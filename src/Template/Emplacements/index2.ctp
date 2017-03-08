<div class="container">
		<h1>jQuery Pagination Tables Plugin Demo</h1>
				<div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
			 		<select class  ="form-control" name="state" id="maxRows">
						 <option value="5000">Show ALL Rows</option>
						 <option value="5">5</option>
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
						</select>

			  	</div>
    <h3><?= __('Emplacements') ?></h3>
    <table class="table table-striped table-class js-dynamitable" id= "table-id">
        <thead>
      <tr>
         <th scope="col"><?= __('id') ?><span class="js-sorter-desc     glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc     glyphicon glyphicon-chevron-up pull-right"></span> </th>
         <th scope="col"><?= __('DC_Emplacement') ?> <span class="js-sorter-desc     glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc     glyphicon glyphicon-chevron-up pull-right"></span> </th>
         <th scope="col" class="actions"><?= __('Actions') ?> <span class="js-sorter-desc     glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc     glyphicon glyphicon-chevron-up pull-right"></span> </th>
       </tr>
       <tr>
             <th><input class="js-filter  form-control" type="text" value=""></th>
             <th><input class="js-filter  form-control" type="text" value=""></th>

           </tr>
        </thead>
        <tbody>
            <?php foreach ($emplacements as $emplacement): ?>
            <tr class="data">
                <td class="text-right"><?= $this->Number->format($emplacement->id) ?></td>
                <td class="emplacement"><?= h($emplacement->DC_Emplacement) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emplacement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emplacement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emplacement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emplacement->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!--		Start Pagination -->
    			<div class='pagination-container' >
    				<nav>
    				  <ul class="pagination">
    				   <!--	Here the JS Function Will Add the Rows -->
    				  </ul>
    				</nav>
    			</div>
</div>

<script>
$(document).find('.js-dynamitable').each(function(){

        $(this).dynamitable()
            .addFilter('.js-filter')
            .addSorter('.js-sorter-asc', 'asc')
            .addSorter('.js-sorter-desc', 'desc')
        ;
    });
  </script>
