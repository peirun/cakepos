/*
  jQuery FlexSort Plugin
  https://github.com/MrJoelKelly/FlexSort
  Joel Kelly (Joel.Kelly@keltec.systems)
*/
(function($){
  var FlexSort; //Parent FlexSort element

  var system_options = {}

  var default_options = {
    row_name: "table-row",
    column_name: "column-title",
    header_row_class: "header",
    columns: [] //Array of SORTABLE columns, by default all
  }

  //Stores all data in the table
  //table.data[0] would contain an array of the first row of data, table.data[0][1] is the second column on the first row
  var table = {
    columns: [],
    data: [],
    currency_columns: {} //i.e. selector [0] containing "$" would mean the first column is USD
  }

  $.fn.flexsort = function(options){

    FlexSort = $(this);
    setOptions(options);
    initiate(options);
    drawTable();
  };

  //Set default_options object to user options
  function setOptions(options){
    //Iterate through keys given in users options
    for(var key in options){
      //Check not empty value
      var empty_test = options[key] + ""; //Convert to string to perform boolean test
      if(empty_test){ //If value not empty
        //If exists in default_options, these are user-definable options
        if(key in default_options){
          //If the key exists in system_options, we need to check that the parameter passed is also valid
          if(key in system_options){
            //If a valid option from system_options
            if(!(options[key] in system_options[key])) continue //Skips rest of loop if the key doesn't have a valid value within system_options
          }
          //Validation tests
          valid = false; //Presume invalidity
          switch(key){
            default: //Any others that don't require validation, such as
              valid = true;
              break;
          };

          if(valid){
            default_options[key] = options[key]; //Update default_options values
          }
        }else if(key == 'data'){ //If the user has set their own data in options
          var rowIndex = 0;
          for(var row in options[key]){ //Loops through each row array in the given data
            for(var item in options[key][row]){
              item = Number(item);
              populateTableData(options[key][row][item], item, rowIndex)
            }
            rowIndex++;
          }
        }
      }
    }
  };

  //Used to populate table data from both the page search and data included in options
  function populateTableData(content, index, row){
    if(index == 0){
      table.data[row] = new Array();
    }
    //Convert content to string
    content += "";
    //Check if currency row
    var currencies = ["£","$"];
    for(var i=0; i<currencies.length; i++){
      if(content.substring(0,1) == currencies[i]){
        table.currency_columns[index] = content.substring(0,1);
        content = content.substr(1,content.length);
        var number = Number(content);
      }
    }

    //Test if string is an integer, only fires if number doesn't already exist
    //Converts to integer
    if(!isNaN(content) && isEmpty(number)){
      var number = Number(content);
    }
    if(number && !isNaN(number)){
      table.data[row][index] = number
    }else{
      table.data[row][index] = content;
    }
  }

  //Adds FlexSort class to the table
  //Binds elements
  function initiate(options){
    if(options == null){
      options = "";
    }

    FlexSort.addClass('FlexSort');
    var classList = [];
    var row = table.data.length,
        row_length = FlexSort.find('tr.' + default_options.row_name + '.' + default_options.header_row_class + ' th.' + default_options.column_name).length - 1; //Number of columns per row
    //Get column classes from header row
	FlexSort.find('tr.' + default_options.row_name + '.' + default_options.header_row_class + ' th.' + default_options.column_name).each(function(){
      var thisList = this.className.split(/\s+/); //Get list of all of this elements classes
      //We only update the list of user-sortable columns if not set in options
      if(isEmpty(options.columns) && $(this).closest('tr.' + default_options.row_name).hasClass(default_options.header_row_class)){

        default_options.columns.push(thisList[1]); //We always presume first column is column_name and second is the sortable name

      }
      table.columns.push(thisList[1]); //Add column class/'name' to our table data

    })
    FlexSort.find('tr.' + default_options.row_name).not('.' + default_options.header_row_class).find(' td.' + default_options.column_name).each(function(index){
      var columnIndex = $(this).index();

      var content = $(this).text();
      populateTableData(content,columnIndex,row);
      //If reached end of row, increment row
      if(columnIndex === row_length){
        row++;
      }
    })

    //Bind header columns to sortColumn()
    FlexSort.find('tr.' + default_options.row_name + '.' + default_options.header_row_class + ' th.' + default_options.column_name).each(function(){
      //Check if it's a sortable column
      var element = $(this);
      var column_classes = element.attr('class').split(/\s+/);

      for(var i=0; i<default_options.columns.length; i++){
        if(column_classes[1] == default_options.columns[i]){

          element.click(function(){sortColumn(element);});
          break;
        }
      }
    })
  }

  //Used to test if an object/val is empty.
  //Return true if empty, false if not
  function isEmpty(value){
    var test_string = value+'';
    if(!test_string || value == null){
      return true;

    }else{
      return false;
    }
  }

  //Sorts table based on clicked header
  function sortColumn(element){
    var sort_state = element.attr('class').split(/\s+/);
    var columnIndex = element.index(); //Index of column to select data from table object
    var sorted_classes = ["asc", "desc"]; //Class names applied to columns that are sorted in some way
    var sorted = false; //Indicates sorted state

    $('tr.' + default_options.row_name + '.' + default_options.header_row_class + ' th.' + default_options.column_name).not(element).removeClass('desc asc'); //Remove asc and desc classes from any other columns

    for(var current_class in sort_state){
      $.each(sorted_classes, function(index, value){
        if(sort_state[current_class] == value){ //If triggered, 'value' is the current sort state class, if it's never triggered then it's not currently sorted.
          switch(value){
            case 'asc': //Already asc, set to desc
              sortTableData(false, columnIndex);
              element.removeClass('asc').addClass('desc');
              break;
            case 'desc': //Already desc, set to asc
              sortTableData(true, columnIndex);
              element.removeClass('desc').addClass('asc');
              break;
          }
          sorted = true;
        }
        if(sorted){return}
      })
    }

    //Fires if the column had no existing sort state, defaults to ascending
    if(!sorted){
      sortTableData(true, columnIndex);
      element.addClass('asc');
    }
    drawTable();
  }

  //Sorts the actual table.data object, based on 'action' being true for asc and false for desc
  //columnIndex is the column to sort
  //Compares table.data[0][columnIndex] to table.data[1][columnIndex] and so on
  function sortTableData(action, columnIndex){
    if(action){ //Sort to ascending (A to Z)
      table.data = table.data.sort(function(a,b){ //Sorts ascending
        return a[columnIndex] > b[columnIndex];
      })

    }else{ //Sort to descending (Z to A)
      table.data = table.data.sort(function(a,b){ //Sorts descending
        return a[columnIndex] < b[columnIndex];
      })
    }
  }

  //Redraws the table from the table object
  function drawTable(){
    $(FlexSort).find('tr.' + default_options.row_name ).not('.' + default_options.header_row_class).remove(); //Remove all rows
    $(FlexSort).find('tr.' + default_options.row_name + '.' + default_options.header_row_class + ' th.' + default_options.column_name + ' div.arrow').remove();
    //Draw each new row
    for(var row in table.data){
      var row_html = '<tr class="' + default_options.row_name + '">';

      for(var i=0; i<table.data[row].length; i++){ //Each cell
        row_html += '<td class="' + default_options.column_name + ' ' + table.columns[i] + '">';

        if(i in table.currency_columns){
          row_html += table.currency_columns[i];
        }
        row_html += table.data[row][i] + '</td>';
      }

      row_html += '</tr>';
      $(FlexSort).append(row_html);
    }

    //Add SVG Arrow(s)
    $(FlexSort).find('tr.' + default_options.row_name + '.' + default_options.header_row_class + ' th.' + default_options.column_name).each(function(){
      if($(this).hasClass('asc') || $(this).hasClass('desc')){
        $(this).append('<div class="arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></div>');

        if($(this).hasClass('asc')){
          $(this).find('div.arrow svg').addClass('asc');
        }else{
          $(this).find('div.arrow svg').addClass('desc');
        }
      }
    })
  }
})(jQuery);
