<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Membre'), ['action' => 'edit', $membre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Membre'), ['action' => 'delete', $membre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Membres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Membre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typemembres'), ['controller' => 'Typemembres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typemembre'), ['controller' => 'Typemembres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extensions'), ['controller' => 'Extensions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension'), ['controller' => 'Extensions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="membres view large-9 medium-8 columns content">
    <h3><?= h($membre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Typemembre') ?></th>
            <td><?= $membre->has('typemembre') ? $this->Html->link($membre->typemembre->id, ['controller' => 'Typemembres', 'action' => 'view', $membre->typemembre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skswitch') ?></th>
            <td><?= $membre->has('skswitch') ? $this->Html->link($membre->skswitch->id, ['controller' => 'Skswitches', 'action' => 'view', $membre->skswitch->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom Membre') ?></th>
            <td><?= h($membre->Nom_Membre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salle Membre') ?></th>
            <td><?= h($membre->Salle_Membre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Baie Membre') ?></th>
            <td><?= h($membre->Baie_Membre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($membre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slot Membre') ?></th>
            <td><?= $this->Number->format($membre->Slot_Membre) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Extensions') ?></h4>
        <?php if (!empty($membre->extensions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Compatibilite Extension') ?></th>
                <th scope="col"><?= __('Modele Extension') ?></th>
                <th scope="col"><?= __('Constructeur Extension') ?></th>
                <th scope="col"><?= __('Sousslot Extension') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($membre->extensions as $extensions): ?>
            <tr>
                <td><?= h($extensions->id) ?></td>
                <td><?= h($extensions->Compatibilite_Extension) ?></td>
                <td><?= h($extensions->Modele_Extension) ?></td>
                <td><?= h($extensions->Constructeur_Extension) ?></td>
                <td><?= h($extensions->Sousslot_Extension) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Extensions', 'action' => 'view', $extensions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Extensions', 'action' => 'edit', $extensions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Extensions', 'action' => 'delete', $extensions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extensions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
