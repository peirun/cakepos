<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $membre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $membre->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Membres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Typemembres'), ['controller' => 'Typemembres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typemembre'), ['controller' => 'Typemembres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Extensions'), ['controller' => 'Extensions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Extension'), ['controller' => 'Extensions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="membres form large-9 medium-8 columns content">
    <?= $this->Form->create($membre) ?>
    <fieldset>
        <legend><?= __('Edit Membre') ?></legend>
        <?php
            echo $this->Form->input('Slot_Membre');
            echo $this->Form->input('typemembre_id', ['options' => $typemembres]);
            echo $this->Form->input('skswitch_id', ['options' => $skswitches]);
            echo $this->Form->input('Nom_Membre');
            echo $this->Form->input('Salle_Membre');
            echo $this->Form->input('Baie_Membre');
            echo $this->Form->input('extensions._ids', ['options' => $extensions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
