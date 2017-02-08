<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Portchannel'), ['action' => 'edit', $portchannel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Portchannel'), ['action' => 'delete', $portchannel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portchannel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Portchannels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portchannel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="portchannels view large-9 medium-8 columns content">
    <h3><?= h($portchannel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Skswitch') ?></th>
            <td><?= $portchannel->has('skswitch') ? $this->Html->link($portchannel->skswitch->id, ['controller' => 'Skswitches', 'action' => 'view', $portchannel->skswitch->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($portchannel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mltid Portchannel') ?></th>
            <td><?= $this->Number->format($portchannel->Mltid_Portchannel) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ports') ?></h4>
        <?php if (!empty($portchannel->ports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Num Port') ?></th>
                <th scope="col"><?= __('Speed Port') ?></th>
                <th scope="col"><?= __('Tag Port') ?></th>
                <th scope="col"><?= __('Pvid Port') ?></th>
                <th scope="col"><?= __('Status Port') ?></th>
                <th scope="col"><?= __('Connectedto Port') ?></th>
                <th scope="col"><?= __('GDOassos Port') ?></th>
                <th scope="col"><?= __('IPassos Port') ?></th>
                <th scope="col"><?= __('Portassos Port') ?></th>
                <th scope="col"><?= __('State Port') ?></th>
                <th scope="col"><?= __('Skswitch Id') ?></th>
                <th scope="col"><?= __('NumSlot Port') ?></th>
                <th scope="col"><?= __('Type Port') ?></th>
                <th scope="col"><?= __('Infogbic Port') ?></th>
                <th scope="col"><?= __('Maxspeed Port') ?></th>
                <th scope="col"><?= __('Prefixe Port') ?></th>
                <th scope="col"><?= __('Extension Port') ?></th>
                <th scope="col"><?= __('Commentaire Port') ?></th>
                <th scope="col"><?= __('Salleassos Port') ?></th>
                <th scope="col"><?= __('Baieassos Port') ?></th>
                <th scope="col"><?= __('Affectation Port') ?></th>
                <th scope="col"><?= __('UserLastModif Port') ?></th>
                <th scope="col"><?= __('DateTimeLastModif Port') ?></th>
                <th scope="col"><?= __('DescriptionIRL Port') ?></th>
                <th scope="col"><?= __('LLDP Port') ?></th>
                <th scope="col"><?= __('Fabricid Port') ?></th>
                <th scope="col"><?= __('Fabricname Port') ?></th>
                <th scope="col"><?= __('Index Port') ?></th>
                <th scope="col"><?= __('OpticalState Port') ?></th>
                <th scope="col"><?= __('Mode Port') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($portchannel->ports as $ports): ?>
            <tr>
                <td><?= h($ports->id) ?></td>
                <td><?= h($ports->Num_Port) ?></td>
                <td><?= h($ports->Speed_Port) ?></td>
                <td><?= h($ports->Tag_Port) ?></td>
                <td><?= h($ports->Pvid_Port) ?></td>
                <td><?= h($ports->Status_Port) ?></td>
                <td><?= h($ports->Connectedto_Port) ?></td>
                <td><?= h($ports->GDOassos_Port) ?></td>
                <td><?= h($ports->IPassos_Port) ?></td>
                <td><?= h($ports->Portassos_Port) ?></td>
                <td><?= h($ports->State_Port) ?></td>
                <td><?= h($ports->skswitch_id) ?></td>
                <td><?= h($ports->NumSlot_Port) ?></td>
                <td><?= h($ports->Type_Port) ?></td>
                <td><?= h($ports->Infogbic_Port) ?></td>
                <td><?= h($ports->Maxspeed_Port) ?></td>
                <td><?= h($ports->Prefixe_Port) ?></td>
                <td><?= h($ports->Extension_Port) ?></td>
                <td><?= h($ports->Commentaire_Port) ?></td>
                <td><?= h($ports->Salleassos_Port) ?></td>
                <td><?= h($ports->Baieassos_Port) ?></td>
                <td><?= h($ports->Affectation_Port) ?></td>
                <td><?= h($ports->UserLastModif_Port) ?></td>
                <td><?= h($ports->DateTimeLastModif_Port) ?></td>
                <td><?= h($ports->DescriptionIRL_Port) ?></td>
                <td><?= h($ports->LLDP_Port) ?></td>
                <td><?= h($ports->Fabricid_Port) ?></td>
                <td><?= h($ports->Fabricname_Port) ?></td>
                <td><?= h($ports->Index_Port) ?></td>
                <td><?= h($ports->OpticalState_Port) ?></td>
                <td><?= h($ports->Mode_Port) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ports', 'action' => 'view', $ports->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ports', 'action' => 'edit', $ports->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ports', 'action' => 'delete', $ports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ports->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
