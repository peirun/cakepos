<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Port'), ['action' => 'edit', $port->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Port'), ['action' => 'delete', $port->id], ['confirm' => __('Are you sure you want to delete # {0}?', $port->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Port'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Portvlans'), ['controller' => 'Portvlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portvlan'), ['controller' => 'Portvlans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Portchannels'), ['controller' => 'Portchannels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portchannel'), ['controller' => 'Portchannels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ports view large-9 medium-8 columns content">
    <h3><?= h($port->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Speed Port') ?></th>
            <td><?= h($port->Speed_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Port') ?></th>
            <td><?= h($port->Status_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Connectedto Port') ?></th>
            <td><?= h($port->Connectedto_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GDOassos Port') ?></th>
            <td><?= h($port->GDOassos_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IPassos Port') ?></th>
            <td><?= h($port->IPassos_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Portassos Port') ?></th>
            <td><?= h($port->Portassos_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State Port') ?></th>
            <td><?= h($port->State_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skswitch') ?></th>
            <td><?= $port->has('skswitch') ? $this->Html->link($port->skswitch->id, ['controller' => 'Skswitches', 'action' => 'view', $port->skswitch->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Port') ?></th>
            <td><?= h($port->Type_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Infogbic Port') ?></th>
            <td><?= h($port->Infogbic_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maxspeed Port') ?></th>
            <td><?= h($port->Maxspeed_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prefixe Port') ?></th>
            <td><?= h($port->Prefixe_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commentaire Port') ?></th>
            <td><?= h($port->Commentaire_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salleassos Port') ?></th>
            <td><?= h($port->Salleassos_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Baieassos Port') ?></th>
            <td><?= h($port->Baieassos_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Affectation Port') ?></th>
            <td><?= h($port->Affectation_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserLastModif Port') ?></th>
            <td><?= h($port->UserLastModif_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DescriptionIRL Port') ?></th>
            <td><?= h($port->DescriptionIRL_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LLDP Port') ?></th>
            <td><?= h($port->LLDP_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fabricname Port') ?></th>
            <td><?= h($port->Fabricname_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Index Port') ?></th>
            <td><?= h($port->Index_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OpticalState Port') ?></th>
            <td><?= h($port->OpticalState_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mode Port') ?></th>
            <td><?= h($port->Mode_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($port->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Port') ?></th>
            <td><?= $this->Number->format($port->Num_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pvid Port') ?></th>
            <td><?= $this->Number->format($port->Pvid_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumSlot Port') ?></th>
            <td><?= $this->Number->format($port->NumSlot_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extension Port') ?></th>
            <td><?= $this->Number->format($port->Extension_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fabricid Port') ?></th>
            <td><?= $this->Number->format($port->Fabricid_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateTimeLastModif Port') ?></th>
            <td><?= h($port->DateTimeLastModif_Port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag Port') ?></th>
            <td><?= $port->Tag_Port ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Portvlans') ?></h4>
        <?php if (!empty($port->portvlans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ref Portvlan') ?></th>
                <th scope="col"><?= __('Port Id') ?></th>
                <th scope="col"><?= __('Vlan Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($port->portvlans as $portvlans): ?>
            <tr>
                <td><?= h($portvlans->id) ?></td>
                <td><?= h($portvlans->Ref_Portvlan) ?></td>
                <td><?= h($portvlans->port_id) ?></td>
                <td><?= h($portvlans->vlan_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Portvlans', 'action' => 'view', $portvlans->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Portvlans', 'action' => 'edit', $portvlans->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Portvlans', 'action' => 'delete', $portvlans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portvlans->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Portchannels') ?></h4>
        <?php if (!empty($port->portchannels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Mltid Portchannel') ?></th>
                <th scope="col"><?= __('Skswitch Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($port->portchannels as $portchannels): ?>
            <tr>
                <td><?= h($portchannels->id) ?></td>
                <td><?= h($portchannels->Mltid_Portchannel) ?></td>
                <td><?= h($portchannels->skswitch_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Portchannels', 'action' => 'view', $portchannels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Portchannels', 'action' => 'edit', $portchannels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Portchannels', 'action' => 'delete', $portchannels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portchannels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
