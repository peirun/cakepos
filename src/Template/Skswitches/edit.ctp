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
                ['action' => 'delete', $skswitch->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $skswitch->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Skswitches'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emplacements'), ['controller' => 'Emplacements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emplacement'), ['controller' => 'Emplacements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Qfabrics'), ['controller' => 'Qfabrics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Qfabric'), ['controller' => 'Qfabrics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Deltas'), ['controller' => 'Deltas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Delta'), ['controller' => 'Deltas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Membres'), ['controller' => 'Membres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Membre'), ['controller' => 'Membres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Portchannels'), ['controller' => 'Portchannels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portchannel'), ['controller' => 'Portchannels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sanaliases'), ['controller' => 'Sanaliases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sanalias'), ['controller' => 'Sanaliases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sanzas'), ['controller' => 'Sanzas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sanza'), ['controller' => 'Sanzas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sanzones'), ['controller' => 'Sanzones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sanzone'), ['controller' => 'Sanzones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vlans'), ['controller' => 'Vlans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vlan'), ['controller' => 'Vlans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="skswitches form large-9 medium-8 columns content">
    <?= $this->Form->create($skswitch) ?>
    <fieldset>
        <legend><?= __('Edit Skswitch') ?></legend>
        <?php
            echo $this->Form->input('Nom_Skswitch');
            echo $this->Form->input('IP_Skswitch');
            echo $this->Form->input('LastIRLImport_Skswitch', ['empty' => true]);
            echo $this->Form->input('emplacement_id', ['options' => $emplacements]);
            echo $this->Form->input('skswitch_id');
            echo $this->Form->input('Salle_Skswitch');
            echo $this->Form->input('Baie_Skswitch');
            echo $this->Form->input('Constructeur_Skswitch');
            echo $this->Form->input('Compatibilite_Skswitch');
            echo $this->Form->input('Mgmtvlan_Skswitch');
            echo $this->Form->input('Netmask_Skswitch');
            echo $this->Form->input('Gateway_Skswitch');
            echo $this->Form->input('Snmpip_Skswitch');
            echo $this->Form->input('Syslogip_Skswitch');
            echo $this->Form->input('Radiusip_Skswitch');
            echo $this->Form->input('Snmpread_Skswitch');
            echo $this->Form->input('Snmpwrite_Skswitch');
            echo $this->Form->input('Ntpip_Skswitch');
            echo $this->Form->input('Capacityalert_Skswitch');
            echo $this->Form->input('irlskswitch_id');
            echo $this->Form->input('Info_Skswitch');
            echo $this->Form->input('Otherinfo_Skswitch');
            echo $this->Form->input('qfabric_id', ['options' => $qfabrics, 'empty' => true]);
            echo $this->Form->input('RsngGroup_Skswitch');
            echo $this->Form->input('Alias_Skswitch');
            echo $this->Form->input('Exploitant_Skswitch');
            echo $this->Form->input('BladeName_Skswitch');
            echo $this->Form->input('BladeNameIRL_Skswitch');
            echo $this->Form->input('LastCfgChange_Skswitch', ['empty' => true]);
            echo $this->Form->input('LastSvgStatus_Skswitch');
            echo $this->Form->input('AutoReservation_Skswitch');
            echo $this->Form->input('POD_Skswitch');
            echo $this->Form->input('Projet_Skswitch');
            echo $this->Form->input('Statut26e_Skswitch');
            echo $this->Form->input('vlans._ids', ['options' => $vlans]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
