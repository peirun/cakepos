<<<<<<< HEAD
<?php
/**
  * @var \App\View\AppView $this
  */
?>
<script>


</script>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Emplacement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aaps'), ['controller' => 'Aaps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aap'), ['controller' => 'Aaps', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Deltas'), ['controller' => 'Deltas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Delta'), ['controller' => 'Deltas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mailcapacitaires'), ['controller' => 'Mailcapacitaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mailcapacitaire'), ['controller' => 'Mailcapacitaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Qfabrics'), ['controller' => 'Qfabrics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Qfabric'), ['controller' => 'Qfabrics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vlans'), ['controller' => 'Vlans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vlan'), ['controller' => 'Vlans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emplacements index large-9 medium-8 columns content">
    <h3><?= __('Emplacements') ?></h3>
    <table id= "table" cellpadding="0" cellspacing="0">

              <tr class="table-row header">
                <th class="column-title id" scope="col"><?= __('id') ?></th>
                <th class="column-title emplacement" scope="col"><?= __('DC_Emplacement') ?></th>
                <th class="column-title actions"scope="col" ><?= __('Actions') ?></th>
              </tr>


            <?php foreach ($emplacements as $emplacement): ?>
              <tr class="table-row">
                <td class="column-title id"><?= $emplacement->id ?></td>
                <td class="column-title emplacement"><?= $emplacement->DC_Emplacement ?></td>
                <td class="column-title actions">
=======
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
            <tr class="data filter">
                <td class="text-right"><?= $this->Number->format($emplacement->id) ?></td>
                <td class="emplacement"><?= h($emplacement->DC_Emplacement) ?></td>
                <td class="actions">
>>>>>>> temp
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emplacement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emplacement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emplacement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emplacement->id)]) ?>
                </td>
<<<<<<< HEAD
              </tr>
            <?php endforeach; ?>

    </table>

</div>
<script>
$(document).ready(function(){
  $('#table').flexsort();
})
=======
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<div class="paging-container" id="tablePaging"> </div>
</div>
<script>

$(document).find('.js-dynamitable').each(function(){

    $(this).dynamitable()
        .addFilter('.js-filter')
        .addSorter('.js-sorter-asc', 'asc')
        .addSorter('.js-sorter-desc', 'desc')
    ;
});
>>>>>>> temp

</script>
