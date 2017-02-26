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
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DC_Emplacement') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emplacements as $emplacement): ?>
            <tr>
                <td><?= $this->Number->format($emplacement->id) ?></td>
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
<script></script>
