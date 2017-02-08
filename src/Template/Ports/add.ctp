<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Portvlans'), ['controller' => 'Portvlans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portvlan'), ['controller' => 'Portvlans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Portchannels'), ['controller' => 'Portchannels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portchannel'), ['controller' => 'Portchannels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ports form large-9 medium-8 columns content">
    <?= $this->Form->create($port) ?>
    <fieldset>
        <legend><?= __('Add Port') ?></legend>
        <?php
            echo $this->Form->input('Num_Port');
            echo $this->Form->input('Speed_Port');
            echo $this->Form->input('Tag_Port');
            echo $this->Form->input('Pvid_Port');
            echo $this->Form->input('Status_Port');
            echo $this->Form->input('Connectedto_Port');
            echo $this->Form->input('GDOassos_Port');
            echo $this->Form->input('IPassos_Port');
            echo $this->Form->input('Portassos_Port');
            echo $this->Form->input('State_Port');
            echo $this->Form->input('skswitch_id', ['options' => $skswitches]);
            echo $this->Form->input('NumSlot_Port');
            echo $this->Form->input('Type_Port');
            echo $this->Form->input('Infogbic_Port');
            echo $this->Form->input('Maxspeed_Port');
            echo $this->Form->input('Prefixe_Port');
            echo $this->Form->input('Extension_Port');
            echo $this->Form->input('Commentaire_Port');
            echo $this->Form->input('Salleassos_Port');
            echo $this->Form->input('Baieassos_Port');
            echo $this->Form->input('Affectation_Port');
            echo $this->Form->input('UserLastModif_Port');
            echo $this->Form->input('DateTimeLastModif_Port', ['empty' => true]);
            echo $this->Form->input('DescriptionIRL_Port');
            echo $this->Form->input('LLDP_Port');
            echo $this->Form->input('Fabricid_Port');
            echo $this->Form->input('Fabricname_Port');
            echo $this->Form->input('Index_Port');
            echo $this->Form->input('OpticalState_Port');
            echo $this->Form->input('Mode_Port');
            echo $this->Form->input('portchannels._ids', ['options' => $portchannels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
