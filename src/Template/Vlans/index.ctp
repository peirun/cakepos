<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vlan'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emplacements'), ['controller' => 'Emplacements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emplacement'), ['controller' => 'Emplacements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aapsifs'), ['controller' => 'Aapsifs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aapsif'), ['controller' => 'Aapsifs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Portvlans'), ['controller' => 'Portvlans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portvlan'), ['controller' => 'Portvlans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Snatpools'), ['controller' => 'Snatpools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Snatpool'), ['controller' => 'Snatpools', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Virtualvlans'), ['controller' => 'Virtualvlans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Virtualvlan'), ['controller' => 'Virtualvlans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aapsinterfaces'), ['controller' => 'Aapsinterfaces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aapsinterface'), ['controller' => 'Aapsinterfaces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vlans index large-9 medium-8 columns content">
    <h3><?= __('Vlans') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_Vlan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nom_Vlan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emplacement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created_Vlan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NomIRL_Vlan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Presence_Vlan') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vlans as $vlan): ?>
            <tr>
                <td><?= $this->Number->format($vlan->id) ?></td>
                <td><?= $this->Number->format($vlan->id_Vlan) ?></td>
                <td><?= h($vlan->Nom_Vlan) ?></td>
                <td><?= $vlan->has('emplacement') ? $this->Html->link($vlan->emplacement->id, ['controller' => 'Emplacements', 'action' => 'view', $vlan->emplacement->id]) : '' ?></td>
                <td><?= h($vlan->Created_Vlan) ?></td>
                <td><?= h($vlan->NomIRL_Vlan) ?></td>
                <td><?= h($vlan->Presence_Vlan) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vlan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vlan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vlan->id)]) ?>
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
