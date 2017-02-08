<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Skswitch'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emplacements'), ['controller' => 'Emplacements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emplacement'), ['controller' => 'Emplacements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Qfabrics'), ['controller' => 'Qfabrics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Qfabric'), ['controller' => 'Qfabrics', 'action' => 'add']) ?></li>
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
<div class="skswitches index large-9 medium-8 columns content">
    <h3><?= __('Skswitches') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nom_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IP_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LastIRLImport_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emplacement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skswitch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Salle_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Baie_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Constructeur_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Compatibilite_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mgmtvlan_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Netmask_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Gateway_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Snmpip_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Syslogip_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Radiusip_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Snmpread_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Snmpwrite_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ntpip_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Capacityalert_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('irlskswitch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Info_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qfabric_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RsngGroup_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Alias_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Exploitant_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BladeName_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BladeNameIRL_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LastCfgChange_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LastSvgStatus_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('AutoReservation_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('POD_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Projet_Skswitch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Statut26e_Skswitch') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($skswitches as $skswitch): ?>
            <tr>
                <td><?= $this->Number->format($skswitch->id) ?></td>
                <td><?= h($skswitch->Nom_Skswitch) ?></td>
                <td><?= h($skswitch->IP_Skswitch) ?></td>
                <td><?= h($skswitch->LastIRLImport_Skswitch) ?></td>
                <td><?= $skswitch->has('emplacement') ? $this->Html->link($skswitch->emplacement->id, ['controller' => 'Emplacements', 'action' => 'view', $skswitch->emplacement->id]) : '' ?></td>
                <td><?= $this->Number->format($skswitch->skswitch_id) ?></td>
                <td><?= h($skswitch->Salle_Skswitch) ?></td>
                <td><?= h($skswitch->Baie_Skswitch) ?></td>
                <td><?= h($skswitch->Constructeur_Skswitch) ?></td>
                <td><?= $this->Number->format($skswitch->Compatibilite_Skswitch) ?></td>
                <td><?= $this->Number->format($skswitch->Mgmtvlan_Skswitch) ?></td>
                <td><?= h($skswitch->Netmask_Skswitch) ?></td>
                <td><?= h($skswitch->Gateway_Skswitch) ?></td>
                <td><?= h($skswitch->Snmpip_Skswitch) ?></td>
                <td><?= h($skswitch->Syslogip_Skswitch) ?></td>
                <td><?= h($skswitch->Radiusip_Skswitch) ?></td>
                <td><?= h($skswitch->Snmpread_Skswitch) ?></td>
                <td><?= h($skswitch->Snmpwrite_Skswitch) ?></td>
                <td><?= h($skswitch->Ntpip_Skswitch) ?></td>
                <td><?= h($skswitch->Capacityalert_Skswitch) ?></td>
                <td><?= $this->Number->format($skswitch->irlskswitch_id) ?></td>
                <td><?= h($skswitch->Info_Skswitch) ?></td>
                <td><?= $skswitch->has('qfabric') ? $this->Html->link($skswitch->qfabric->id, ['controller' => 'Qfabrics', 'action' => 'view', $skswitch->qfabric->id]) : '' ?></td>
                <td><?= h($skswitch->RsngGroup_Skswitch) ?></td>
                <td><?= h($skswitch->Alias_Skswitch) ?></td>
                <td><?= h($skswitch->Exploitant_Skswitch) ?></td>
                <td><?= h($skswitch->BladeName_Skswitch) ?></td>
                <td><?= h($skswitch->BladeNameIRL_Skswitch) ?></td>
                <td><?= h($skswitch->LastCfgChange_Skswitch) ?></td>
                <td><?= $this->Number->format($skswitch->LastSvgStatus_Skswitch) ?></td>
                <td><?= h($skswitch->AutoReservation_Skswitch) ?></td>
                <td><?= h($skswitch->POD_Skswitch) ?></td>
                <td><?= h($skswitch->Projet_Skswitch) ?></td>
                <td><?= h($skswitch->Statut26e_Skswitch) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $skswitch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $skswitch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $skswitch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skswitch->id)]) ?>
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
