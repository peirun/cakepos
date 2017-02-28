<div class="col-xs-12  col-sm-12 col-md-10 col-md-offset-1 col-lg-10  col-lg-offset-1" style="margin-top:150px">
<div class="table-responsive">
    <h3><?= __('Emplacements') ?></h3>
    <table class="js-dynamitable     table table-bordered">
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
            <tr>
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
