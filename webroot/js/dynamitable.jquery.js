!function($){ 'use strict';
    $.fn.Pagination = function (el, options) {
    	options.labels = options.labels || {};

      var Pagination = this;
    	var $container = $(el),
    		$pagesContainer,
    		$pageRangeCombo,

    		ALL = -1,
    		PREVIOUS_PAGE_NUMBER = -1,
    		NEXT_PAGE_NUMBER = -2,
    		FIRST_PAGE_NUMBER = -3,
    		LAST_PAGE_NUMBER = -4,

    		isDisabled = options.isDisabled || false,
    		itemsCount = $(this).find('tbody >tr').length,
    		currentPage = options.currentPage || 1,
    		pageRange = options.pageRange || [10, 20, 30, -1], //-1 (All)
    		pageSize = options.pageSize || pageRange[0],

    		allPagesLabel = options.labels.all || 'All',
    		firstPageLabel = options.labels.first || 'First',
    		lastPageLabel = options.labels.last || 'Last',
    		nextPageLabel = options.labels.next || '&raquo;',
    		previousPageLabel = options.labels.previous || '&laquo;',

    		init, changePageSize, reRenderPageNumbers, getRenderedPageNumbers, getPageNumbersToDisplay,
    		getPagesCount, goNextPage, goPreviousPage, goToPage, disable, enable, getRenderedPager,
    		process, getRenderedPageRange, toggleElements, onPageClick, onPageRangeComboChange, goToFirstPage, goToLastPage;

    	init = function () {
    		$container.html(getRenderedPager());
    		$pagesContainer = $container.find('.pagination');
    		$pageRangeCombo = $container.find('.page-range');

    		toggleElements();

    		$pagesContainer.on("click", "li", onPageClick);
    		$pageRangeCombo.on('change', onPageRangeComboChange);

    		process();
    	};

      var onPageChange = function (paging) {
        //custom paging logic here
        console.log(paging);
        var start = paging.pageSize * (paging.currentPage - 1),
          end = start + paging.pageSize,
          $rows = Pagination.find('.data');
          alert(JSON.stringify($rows));
        $rows.hide();

        for (var i = start; i < end; i++) {
          $rows.eq(i).show();
        }
      };

      var onDataChange = function ($table){

        currentPage = 1;

      }
    	onPageRangeComboChange = function () {
    		var psValue = Number($(this).val()),
    			ps = psValue === ALL ? itemsCount : psValue;

    		if (!isDisabled) {
    			if (typeof options.onPageSizeChange === 'function') {
    				options.onPageSizeChange(ps);
    			}

    			changePageSize(ps);
    			toggleElements();
    		}
    	};

    	onPageClick = function () {
    		var $p = $(this),
    			page = $p.data('page');

    		if (!isDisabled && !$p.hasClass('active')) {
    			switch (page) {
    				case PREVIOUS_PAGE_NUMBER:
    					goPreviousPage();
    					break;
    				case NEXT_PAGE_NUMBER:
    					goNextPage();
    					break;
    				case FIRST_PAGE_NUMBER:
    					goToFirstPage();
    					break;
    				case LAST_PAGE_NUMBER:
    					goToLastPage();
    					break;
    				default:
    					goToPage(page);
    					break;
    			}

    			toggleElements();
    		}
    	};

    	toggleElements = function () {
    		var pageCount = getPagesCount();

    		$pagesContainer.find('li[data-page="' + PREVIOUS_PAGE_NUMBER + '"]').toggleClass('disabled', currentPage === 1);
    		$pagesContainer.find('li[data-page="' + NEXT_PAGE_NUMBER + '"]').toggleClass('disabled', currentPage === pageCount);
    		$pagesContainer.find('li[data-page="' + FIRST_PAGE_NUMBER + '"]').toggleClass('disabled', currentPage === 1);
    		$pagesContainer.find('li[data-page="' + LAST_PAGE_NUMBER + '"]').toggleClass('disabled', currentPage === pageCount);
    	};

    	changePageSize = function (ps) {
    		pageSize = ps;
    		goToPage(1);
    	};

    	reRenderPageNumbers = function () {
    		$pagesContainer.html(getRenderedPageNumbers());
    	};

    	getRenderedPager = function () {
    		return '<ul class="pagination">' + getRenderedPageNumbers() + '</ul>' + getRenderedPageRange();
    	};

    	getRenderedPageRange = function () {
    		var result = '<select class="page-range">';

    		$.each(pageRange, function (i, p) {
    			var selected = pageSize === p ? 'selected="selected"' : '';
    			result += '<option ' + selected + ' value="' + p + '">' + (p === ALL ? allPagesLabel : p) + '</option>';
    		});

    		return result += '</select>';
    	};

    	getRenderedPageNumbers = function () {
    		var pageNumbers = getPageNumbersToDisplay(),
    			result;

    		result = '<li data-page="' + FIRST_PAGE_NUMBER + '"><a "><span aria-hidden="true">' + firstPageLabel + '</span></a></li>' +
    				 '<li data-page="' + PREVIOUS_PAGE_NUMBER + '"><a "><span aria-hidden="true">' + previousPageLabel + '</span></a></li>';

    		$.each(pageNumbers, function (i, p) {
    			result += '<li data-page="' + p + '" ' + (p === currentPage ? 'class="active"' : '') + '><a href="javascipt:void(0)">' + p + '</a></li>';
    		});

    		result += '<li data-page="' + NEXT_PAGE_NUMBER + '"><a"><span aria-hidden="true">' + nextPageLabel + '</span></a></li>' +
    				  '<li data-page="' + LAST_PAGE_NUMBER + '"><a"><span aria-hidden="true">' + lastPageLabel + '</span></a></li>';

    		return result;
    	};

    	getPageNumbersToDisplay = function () {
    		var pageNumbers = [],
    			startFromNumber,
    			pagesToShow = 5,
    			i = 1,
    			pageCount = getPagesCount();

    		if (pageCount < 5) {
    			pagesToShow = pageCount;
    		}

    		if (currentPage === 1 || currentPage === 2) {
    			startFromNumber = 1;
    		}
    		else if (currentPage === pageCount) {
    			startFromNumber = currentPage - (pagesToShow - 1);
    		}
    		else if ((pageCount - currentPage) === 1 && pageCount >= 5) {
    			startFromNumber = currentPage - 3;
    		}
    		else {
    			startFromNumber = currentPage - 2;
    		}

    		while (i <= pagesToShow) {
    			pageNumbers.push(startFromNumber++);
    			i++;
    		}

    		return pageNumbers;
    	};

    	getPagesCount = function () {
    		return Math.ceil(itemsCount / pageSize);
    	};

    	goNextPage = function () {
    		if (currentPage < getPagesCount()) {
    			currentPage++;
    			reRenderPageNumbers();

    			process();
    		}
    	};

    	goPreviousPage = function () {
    		if (currentPage > 1) {
    			currentPage--;
    			reRenderPageNumbers();
    			process();
    		}
    	};

    	goToFirstPage = function() {
    		if (currentPage !== 1) {
    			goToPage(1);
    		}
    	};

    	goToLastPage = function () {
    		var pageCount = getPagesCount();

    		if (currentPage !== pageCount) {
    			goToPage(pageCount);
    		}
    	};

    	goToPage = function (pageNumber) {
    		currentPage = pageNumber;
    		reRenderPageNumbers();
    		process();
    	};

    	disable = function () {
    		isDisabled = true;
    		$pagesContainer.addClass('disabled');
    		$pageRangeCombo.prop('disabled', true);
    	};

    	enable = function () {
    		isDisabled = false;
    		$pagesContainer.removeClass('disabled');
    		$pageRangeCombo.prop('disabled', false);
    	};

    	process = function () {
    		if (typeof onPageChange === 'function') {
    			onPageChange({
    				currentPage: currentPage,
    				pageSize: pageSize
    			});
    		}
    	};

    	init();



    	this.disable = disable;
    	this.enable = enable;

      var dynamitableCore = new (function($Pagination) {

          /**********************************************
           * dynamitableCore.getIndex($field)
           *
           * get the index of a field
           *
           * return integer
           **********************************************/
          this.getIndex = function($field) {
              return $field.parents('tr').children('td, th').index($field);
          };

          /**********************************************
           * dynamitableCore.getBody()
           *
           * get the body of the table
           *
           * return dom
           **********************************************/
          this.getBody = function() {
              return $Pagination.find('tbody');
          };

          /**********************************************
           * dynamitableCore.getRows()
           *
           * get all row inside the body of the table
           *
           * return dom
           **********************************************/
          this.getRows = function() {
              return this.getBody().children('tr');
          };

          /**********************************************
           * dynamitableCore.getField(index, $row)
           *
           * get a field
           *
           * return dom
           **********************************************/
          this.getField = function(index, $row) {
              return $row.children('td, th').eq(index);
          };

          /**********************************************
           * dynamitableCore.getValue(index, $row)
           *
           * get a field value
           *
           * return string
           **********************************************/
          this.getValue = function(index, $row) {
              return this.getField(index, $row).text();
          };

      })($(this));

      /**********************************************
       * dynamitable.filterList
       *
       * list of filter selector
       *
       * array of string
       **********************************************/
      this.filterList = [];

      /**********************************************
       * dynamitable.displayAll()
       *
       * show all <tr>
       *
       * return dynamitable
       **********************************************/
      this.displayAll = function() {

          dynamitableCore.getRows().each(function() {
              $(this).show();
          });

          return this;
      };

      /**********************************************
       * dynamitable.filter(index, matches)
       *
       * hide all <tr> that doen't martch
       *
       * - index (integer): index of the colum to filter
       * - matches (string)  : string to search on the colum
       *
       * return dynamitable
       **********************************************/
      this.filter = function filter(index, matches) {

          var regex = new RegExp(matches, 'i');
          dynamitableCore.getRows().each(function () {
              if(true !== regex.test(dynamitableCore.getValue(index, $(this)))) {
                  $(this).hide();
              }
          });
      };
      /**********************************************
       * dynamitable.addFilter(selector)
       *
       * add filter event on element inside the table heading
       *
       * - selector (string) : selector of the element that trigger the event
       *
       * return dynamitable
       **********************************************/
      this.addFilter = function addFilter(selector) {

          // add the selector on the filter list
          Pagination.filterList.push(selector);

          // the filter
          var filterAction = function() {



               $(Pagination.filterList).each(function(index, selector) {

                  $(Pagination).find(selector).each(function() {
                      var $this =  $(this);
                      Pagination.filter(dynamitableCore.getIndex($this.parent('td, th')), $this.val());
                  });

               });
          };

          // attach the filter action to the selector
          $(selector).on('change keyup keydown', filterAction);

          // initialization
          filterAction();

          return this;
      };
      this.addFilter('.js-filter')
      /**********************************************
       * dynamitable.addSorter(selector, order)
       *
       * add soter event on element inside the table heading
       *
       * - selector (string) : selector of the element that trigger the event
       * - order (string) :  sorting order [asc, desc]
       *
       * return dynamitable
       **********************************************/
      this.addSorter = function addSorter(selector, order) {
        Pagination.displayAll();
          $(Pagination).find(selector).each(function() {
              var $this = $(this);

              var index = dynamitableCore.getIndex($this.parent('td, th'));

              $this.on('click', function() { Pagination.sorter(index, order); });
          });

          return this;
      };
      this.addSorter('.js-sorter-asc', 'asc')
      this.addSorter('.js-sorter-desc', 'desc')
      /**********************************************
       * dynamitable.sorter(index, order)
       *
       * - index (integer): index of the colum to sorter
       * - order (string)  : sorting order [asc, desc]
       *
       * return dynamitable
       **********************************************/
      this.sorter = function sorter(index, order) {

         dynamitableCore.getBody().append(dynamitableCore.getRows().detach().sort(function(row_a, row_b) {

              var value_a = dynamitableCore.getValue(index, $(row_a));
              var value_b = dynamitableCore.getValue(index, $(row_b));

              var order_desc = ('desc' === order) ? true : false;

              // numeric order mode
              if(value_a.replace(/[^\d-]/g, '') !== '' && value_b.replace(/[^\d-]/g, '') !== '') {
                  value_a = parseFloat(value_a.replace(/[^\d-,.+-]/g, ''));
                  value_b = parseFloat(value_b.replace(/[^\d-,.+-]/g, ''));
              }

              if(value_a === value_b) {
                  return 0;
              }

              return (value_a > value_b) ? order_desc ? 1 : -1 : order_desc ? -1 : 1;

          }));
      };


    };

    $.fn.dynamitable = function(options) {

        /**********************************************
         * dynamitable
         **********************************************/

        /**********************************************
         * dynamitableCore
         **********************************************/



        $(this).Pagination('#tablePaging', {
          onPageSizeChange: function (ps) {
            console.log('changed to ' + ps);
          }
        });

    };


    /**********************************************
     * Dynamitable trigger
     **********************************************/


}(jQuery);
