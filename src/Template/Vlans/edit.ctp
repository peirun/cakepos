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
                ['action' => 'delete', $vlan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vlan->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vlans'), ['action' => 'index']) ?></li>
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
<div class="vlans form large-9 medium-8 columns content">
    <?= $this->Form->create($vlan) ?>
    <fieldset>
        <legend><?= __('Edit Vlan') ?></legend>
        <?php
            echo $this->Form->input('id_Vlan');
            echo $this->Form->input('Nom_Vlan');
            echo $this->Form->input('emplacement_id', ['options' => $emplacements]);
            echo $this->Form->input('Created_Vlan', ['empty' => true]);
            echo $this->Form->input('NomIRL_Vlan');
            echo $this->Form->input('Presence_Vlan');
            echo $this->Form->input('aapsinterfaces._ids', ['options' => $aapsinterfaces]);
            echo $this->Form->input('skswitches._ids', ['options' => $skswitches]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
