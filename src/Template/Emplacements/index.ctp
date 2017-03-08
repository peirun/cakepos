<?php
/**
  * @var \App\View\AppView $this
  */
?>
<script>
$(function () {
  $(".emplacement").dblclick(function () {
    var OriginalContent = $(this).text();
    $(this).addClass("cellEditing");
    $(this).html("<input type='text' value='" + OriginalContent + "' />");
    $(this).children().first().focus();
    $(this).children().first().keypress(function (e) {
      if (e.which == 13) {
        var newContent = $(this).val(); $(this).parent().text(newContent);
        $(this).parent().removeClass("cellEditing"); } });
        $(this).children().first().blur(function(){
          $(this).parent().text(OriginalContent);
          $(this).parent().removeClass("cellEditing");
        });
      });
    });


</script>
<div class="col-xs-12  col-sm-12 col-md-10 col-md-offset-1 col-lg-10  col-lg-offset-1" style="margin-top:150px">
<div class="table-responsive">
    <h3><?= __('Emplacements') ?></h3>
    <table class="js-dynamitable     table table-bordered" id = "table">
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
<div class="paging-container" id="tablePaging"> </div>
</div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
<script>

$(document).find('.table-responsive').each(function(){


        $(this).dynamitable();


    });

</script>
