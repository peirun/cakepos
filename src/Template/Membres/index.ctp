<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Membre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typemembres'), ['controller' => 'Typemembres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typemembre'), ['controller' => 'Typemembres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Extensions'), ['controller' => 'Extensions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Extension'), ['controller' => 'Extensions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="membres index large-9 medium-8 columns content">
    <h3><?= __('Membres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Slot_Membre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typemembre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skswitch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nom_Membre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Salle_Membre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Baie_Membre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($membres as $membre): ?>
            <tr>
                <td><?= $this->Number->format($membre->id) ?></td>
                <td><?= $this->Number->format($membre->Slot_Membre) ?></td>
                <td><?= $membre->has('typemembre') ? $this->Html->link($membre->typemembre->id, ['controller' => 'Typemembres', 'action' => 'view', $membre->typemembre->id]) : '' ?></td>
                <td><?= $membre->has('skswitch') ? $this->Html->link($membre->skswitch->id, ['controller' => 'Skswitches', 'action' => 'view', $membre->skswitch->id]) : '' ?></td>
                <td><?= h($membre->Nom_Membre) ?></td>
                <td><?= h($membre->Salle_Membre) ?></td>
                <td><?= h($membre->Baie_Membre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $membre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $membre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $membre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membre->id)]) ?>
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
