<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Portchannels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portchannels form large-9 medium-8 columns content">
    <?= $this->Form->create($portchannel) ?>
    <fieldset>
        <legend><?= __('Add Portchannel') ?></legend>
        <?php
            echo $this->Form->input('Mltid_Portchannel');
            echo $this->Form->input('skswitch_id', ['options' => $skswitches]);
            echo $this->Form->input('ports._ids', ['options' => $ports]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
