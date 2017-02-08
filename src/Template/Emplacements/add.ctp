<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emplacements'), ['action' => 'index']) ?></li>
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
<div class="emplacements form large-9 medium-8 columns content">
    <?= $this->Form->create($emplacement) ?>
    <fieldset>
        <legend><?= __('Add Emplacement') ?></legend>
        <?php
            echo $this->Form->input('DC_Emplacement');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
