<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Skswitch'), ['action' => 'edit', $skswitch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Skswitch'), ['action' => 'delete', $skswitch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skswitch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Skswitches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skswitch'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emplacements'), ['controller' => 'Emplacements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emplacement'), ['controller' => 'Emplacements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Qfabrics'), ['controller' => 'Qfabrics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Qfabric'), ['controller' => 'Qfabrics', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Deltas'), ['controller' => 'Deltas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Delta'), ['controller' => 'Deltas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Membres'), ['controller' => 'Membres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Membre'), ['controller' => 'Membres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Portchannels'), ['controller' => 'Portchannels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portchannel'), ['controller' => 'Portchannels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sanaliases'), ['controller' => 'Sanaliases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sanalias'), ['controller' => 'Sanaliases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sanzas'), ['controller' => 'Sanzas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sanza'), ['controller' => 'Sanzas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sanzones'), ['controller' => 'Sanzones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sanzone'), ['controller' => 'Sanzones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vlans'), ['controller' => 'Vlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vlan'), ['controller' => 'Vlans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="skswitches view large-9 medium-8 columns content">
    <h3><?= h($skswitch->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom Skswitch') ?></th>
            <td><?= h($skswitch->Nom_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IP Skswitch') ?></th>
            <td><?= h($skswitch->IP_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emplacement') ?></th>
            <td><?= $skswitch->has('emplacement') ? $this->Html->link($skswitch->emplacement->id, ['controller' => 'Emplacements', 'action' => 'view', $skswitch->emplacement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salle Skswitch') ?></th>
            <td><?= h($skswitch->Salle_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Baie Skswitch') ?></th>
            <td><?= h($skswitch->Baie_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Constructeur Skswitch') ?></th>
            <td><?= h($skswitch->Constructeur_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Netmask Skswitch') ?></th>
            <td><?= h($skswitch->Netmask_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gateway Skswitch') ?></th>
            <td><?= h($skswitch->Gateway_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Snmpip Skswitch') ?></th>
            <td><?= h($skswitch->Snmpip_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Syslogip Skswitch') ?></th>
            <td><?= h($skswitch->Syslogip_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Radiusip Skswitch') ?></th>
            <td><?= h($skswitch->Radiusip_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Snmpread Skswitch') ?></th>
            <td><?= h($skswitch->Snmpread_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Snmpwrite Skswitch') ?></th>
            <td><?= h($skswitch->Snmpwrite_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ntpip Skswitch') ?></th>
            <td><?= h($skswitch->Ntpip_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Skswitch') ?></th>
            <td><?= h($skswitch->Info_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qfabric') ?></th>
            <td><?= $skswitch->has('qfabric') ? $this->Html->link($skswitch->qfabric->id, ['controller' => 'Qfabrics', 'action' => 'view', $skswitch->qfabric->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RsngGroup Skswitch') ?></th>
            <td><?= h($skswitch->RsngGroup_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias Skswitch') ?></th>
            <td><?= h($skswitch->Alias_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exploitant Skswitch') ?></th>
            <td><?= h($skswitch->Exploitant_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BladeName Skswitch') ?></th>
            <td><?= h($skswitch->BladeName_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BladeNameIRL Skswitch') ?></th>
            <td><?= h($skswitch->BladeNameIRL_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('POD Skswitch') ?></th>
            <td><?= h($skswitch->POD_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projet Skswitch') ?></th>
            <td><?= h($skswitch->Projet_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statut26e Skswitch') ?></th>
            <td><?= h($skswitch->Statut26e_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($skswitch->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skswitch Id') ?></th>
            <td><?= $this->Number->format($skswitch->skswitch_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Compatibilite Skswitch') ?></th>
            <td><?= $this->Number->format($skswitch->Compatibilite_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mgmtvlan Skswitch') ?></th>
            <td><?= $this->Number->format($skswitch->Mgmtvlan_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Irlskswitch Id') ?></th>
            <td><?= $this->Number->format($skswitch->irlskswitch_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LastSvgStatus Skswitch') ?></th>
            <td><?= $this->Number->format($skswitch->LastSvgStatus_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LastIRLImport Skswitch') ?></th>
            <td><?= h($skswitch->LastIRLImport_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LastCfgChange Skswitch') ?></th>
            <td><?= h($skswitch->LastCfgChange_Skswitch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacityalert Skswitch') ?></th>
            <td><?= $skswitch->Capacityalert_Skswitch ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AutoReservation Skswitch') ?></th>
            <td><?= $skswitch->AutoReservation_Skswitch ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Otherinfo Skswitch') ?></h4>
        <?= $this->Text->autoParagraph(h($skswitch->Otherinfo_Skswitch)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Skswitches') ?></h4>
        <?php if (!empty($skswitch->skswitches)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nom Skswitch') ?></th>
                <th scope="col"><?= __('IP Skswitch') ?></th>
                <th scope="col"><?= __('LastIRLImport Skswitch') ?></th>
                <th scope="col"><?= __('Emplacement Id') ?></th>
                <th scope="col"><?= __('Skswitch Id') ?></th>
                <th scope="col"><?= __('Salle Skswitch') ?></th>
                <th scope="col"><?= __('Baie Skswitch') ?></th>
                <th scope="col"><?= __('Constructeur Skswitch') ?></th>
                <th scope="col"><?= __('Compatibilite Skswitch') ?></th>
                <th scope="col"><?= __('Mgmtvlan Skswitch') ?></th>
                <th scope="col"><?= __('Netmask Skswitch') ?></th>
                <th scope="col"><?= __('Gateway Skswitch') ?></th>
                <th scope="col"><?= __('Snmpip Skswitch') ?></th>
                <th scope="col"><?= __('Syslogip Skswitch') ?></th>
                <th scope="col"><?= __('Radiusip Skswitch') ?></th>
                <th scope="col"><?= __('Snmpread Skswitch') ?></th>
                <th scope="col"><?= __('Snmpwrite Skswitch') ?></th>
                <th scope="col"><?= __('Ntpip Skswitch') ?></th>
                <th scope="col"><?= __('Capacityalert Skswitch') ?></th>
                <th scope="col"><?= __('Irlskswitch Id') ?></th>
                <th scope="col"><?= __('Info Skswitch') ?></th>
                <th scope="col"><?= __('Otherinfo Skswitch') ?></th>
                <th scope="col"><?= __('Qfabric Id') ?></th>
                <th scope="col"><?= __('RsngGroup Skswitch') ?></th>
                <th scope="col"><?= __('Alias Skswitch') ?></th>
                <th scope="col"><?= __('Exploitant Skswitch') ?></th>
                <th scope="col"><?= __('BladeName Skswitch') ?></th>
                <th scope="col"><?= __('BladeNameIRL Skswitch') ?></th>
                <th scope="col"><?= __('LastCfgChange Skswitch') ?></th>
                <th scope="col"><?= __('LastSvgStatus Skswitch') ?></th>
                <th scope="col"><?= __('AutoReservation Skswitch') ?></th>
                <th scope="col"><?= __('POD Skswitch') ?></th>
                <th scope="col"><?= __('Projet Skswitch') ?></th>
                <th scope="col"><?= __('Statut26e Skswitch') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skswitch->skswitches as $skswitches): ?>
            <tr>
                <td><?= h($skswitches->id) ?></td>
                <td><?= h($skswitches->Nom_Skswitch) ?></td>
                <td><?= h($skswitches->IP_Skswitch) ?></td>
                <td><?= h($skswitches->LastIRLImport_Skswitch) ?></td>
                <td><?= h($skswitches->emplacement_id) ?></td>
                <td><?= h($skswitches->skswitch_id) ?></td>
                <td><?= h($skswitches->Salle_Skswitch) ?></td>
                <td><?= h($skswitches->Baie_Skswitch) ?></td>
                <td><?= h($skswitches->Constructeur_Skswitch) ?></td>
                <td><?= h($skswitches->Compatibilite_Skswitch) ?></td>
                <td><?= h($skswitches->Mgmtvlan_Skswitch) ?></td>
                <td><?= h($skswitches->Netmask_Skswitch) ?></td>
                <td><?= h($skswitches->Gateway_Skswitch) ?></td>
                <td><?= h($skswitches->Snmpip_Skswitch) ?></td>
                <td><?= h($skswitches->Syslogip_Skswitch) ?></td>
                <td><?= h($skswitches->Radiusip_Skswitch) ?></td>
                <td><?= h($skswitches->Snmpread_Skswitch) ?></td>
                <td><?= h($skswitches->Snmpwrite_Skswitch) ?></td>
                <td><?= h($skswitches->Ntpip_Skswitch) ?></td>
                <td><?= h($skswitches->Capacityalert_Skswitch) ?></td>
                <td><?= h($skswitches->irlskswitch_id) ?></td>
                <td><?= h($skswitches->Info_Skswitch) ?></td>
                <td><?= h($skswitches->Otherinfo_Skswitch) ?></td>
                <td><?= h($skswitches->qfabric_id) ?></td>
                <td><?= h($skswitches->RsngGroup_Skswitch) ?></td>
                <td><?= h($skswitches->Alias_Skswitch) ?></td>
                <td><?= h($skswitches->Exploitant_Skswitch) ?></td>
                <td><?= h($skswitches->BladeName_Skswitch) ?></td>
                <td><?= h($skswitches->BladeNameIRL_Skswitch) ?></td>
                <td><?= h($skswitches->LastCfgChange_Skswitch) ?></td>
                <td><?= h($skswitches->LastSvgStatus_Skswitch) ?></td>
                <td><?= h($skswitches->AutoReservation_Skswitch) ?></td>
                <td><?= h($skswitches->POD_Skswitch) ?></td>
                <td><?= h($skswitches->Projet_Skswitch) ?></td>
                <td><?= h($skswitches->Statut26e_Skswitch) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Skswitches', 'action' => 'view', $skswitches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Skswitches', 'action' => 'edit', $skswitches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skswitches', 'action' => 'delete', $skswitches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skswitches->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Deltas') ?></h4>
        <?php if (!empty($skswitch->deltas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Skswitch Id') ?></th>
                <th scope="col"><?= __('Alert Delta') ?></th>
                <th scope="col"><?= __('Severity Delta') ?></th>
                <th scope="col"><?= __('Type Delta') ?></th>
                <th scope="col"><?= __('Soustype Delta') ?></th>
                <th scope="col"><?= __('Detail Delta') ?></th>
                <th scope="col"><?= __('IRL Delta') ?></th>
                <th scope="col"><?= __('Inbdd Delta') ?></th>
                <th scope="col"><?= __('Date Delta') ?></th>
                <th scope="col"><?= __('Firstdate Delta') ?></th>
                <th scope="col"><?= __('Ackdate Delta') ?></th>
                <th scope="col"><?= __('Otherid Delta') ?></th>
                <th scope="col"><?= __('Emplacement Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skswitch->deltas as $deltas): ?>
            <tr>
                <td><?= h($deltas->id) ?></td>
                <td><?= h($deltas->skswitch_id) ?></td>
                <td><?= h($deltas->Alert_Delta) ?></td>
                <td><?= h($deltas->Severity_Delta) ?></td>
                <td><?= h($deltas->Type_Delta) ?></td>
                <td><?= h($deltas->Soustype_Delta) ?></td>
                <td><?= h($deltas->Detail_Delta) ?></td>
                <td><?= h($deltas->IRL_Delta) ?></td>
                <td><?= h($deltas->Inbdd_Delta) ?></td>
                <td><?= h($deltas->Date_Delta) ?></td>
                <td><?= h($deltas->Firstdate_Delta) ?></td>
                <td><?= h($deltas->Ackdate_Delta) ?></td>
                <td><?= h($deltas->Otherid_Delta) ?></td>
                <td><?= h($deltas->emplacement_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Deltas', 'action' => 'view', $deltas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Deltas', 'action' => 'edit', $deltas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Deltas', 'action' => 'delete', $deltas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deltas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Membres') ?></h4>
        <?php if (!empty($skswitch->membres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Slot Membre') ?></th>
                <th scope="col"><?= __('Typemembre Id') ?></th>
                <th scope="col"><?= __('Skswitch Id') ?></th>
                <th scope="col"><?= __('Nom Membre') ?></th>
                <th scope="col"><?= __('Salle Membre') ?></th>
                <th scope="col"><?= __('Baie Membre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skswitch->membres as $membres): ?>
            <tr>
                <td><?= h($membres->id) ?></td>
                <td><?= h($membres->Slot_Membre) ?></td>
                <td><?= h($membres->typemembre_id) ?></td>
                <td><?= h($membres->skswitch_id) ?></td>
                <td><?= h($membres->Nom_Membre) ?></td>
                <td><?= h($membres->Salle_Membre) ?></td>
                <td><?= h($membres->Baie_Membre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Membres', 'action' => 'view', $membres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Membres', 'action' => 'edit', $membres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Membres', 'action' => 'delete', $membres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Portchannels') ?></h4>
        <?php if (!empty($skswitch->portchannels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Mltid Portchannel') ?></th>
                <th scope="col"><?= __('Skswitch Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skswitch->portchannels as $portchannels): ?>
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
    <div class="related">
        <h4><?= __('Related Ports') ?></h4>
        <?php if (!empty($skswitch->ports)): ?>
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
            <?php foreach ($skswitch->ports as $ports): ?>
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
    <div class="related">
        <h4><?= __('Related Sanaliases') ?></h4>
        <?php if (!empty($skswitch->sanaliases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Alias Sanalias') ?></th>
                <th scope="col"><?= __('WWN Sanalias') ?></th>
                <th scope="col"><?= __('FCID Sanalias') ?></th>
                <th scope="col"><?= __('Skswitch Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skswitch->sanaliases as $sanaliases): ?>
            <tr>
                <td><?= h($sanaliases->id) ?></td>
                <td><?= h($sanaliases->Alias_Sanalias) ?></td>
                <td><?= h($sanaliases->WWN_Sanalias) ?></td>
                <td><?= h($sanaliases->FCID_Sanalias) ?></td>
                <td><?= h($sanaliases->skswitch_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sanaliases', 'action' => 'view', $sanaliases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sanaliases', 'action' => 'edit', $sanaliases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sanaliases', 'action' => 'delete', $sanaliases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sanaliases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sanzas') ?></h4>
        <?php if (!empty($skswitch->sanzas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sanalias Id') ?></th>
                <th scope="col"><?= __('Sanzone Id') ?></th>
                <th scope="col"><?= __('Skswitch Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skswitch->sanzas as $sanzas): ?>
            <tr>
                <td><?= h($sanzas->id) ?></td>
                <td><?= h($sanzas->sanalias_id) ?></td>
                <td><?= h($sanzas->sanzone_id) ?></td>
                <td><?= h($sanzas->skswitch_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sanzas', 'action' => 'view', $sanzas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sanzas', 'action' => 'edit', $sanzas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sanzas', 'action' => 'delete', $sanzas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sanzas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sanzones') ?></h4>
        <?php if (!empty($skswitch->sanzones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('CfgName Sanzone') ?></th>
                <th scope="col"><?= __('Enable Sanzone') ?></th>
                <th scope="col"><?= __('FCID Sanzone') ?></th>
                <th scope="col"><?= __('ZoneName Sanzone') ?></th>
                <th scope="col"><?= __('Skswitch Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skswitch->sanzones as $sanzones): ?>
            <tr>
                <td><?= h($sanzones->id) ?></td>
                <td><?= h($sanzones->CfgName_Sanzone) ?></td>
                <td><?= h($sanzones->Enable_Sanzone) ?></td>
                <td><?= h($sanzones->FCID_Sanzone) ?></td>
                <td><?= h($sanzones->ZoneName_Sanzone) ?></td>
                <td><?= h($sanzones->skswitch_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sanzones', 'action' => 'view', $sanzones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sanzones', 'action' => 'edit', $sanzones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sanzones', 'action' => 'delete', $sanzones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sanzones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vlans') ?></h4>
        <?php if (!empty($skswitch->vlans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Id Vlan') ?></th>
                <th scope="col"><?= __('Nom Vlan') ?></th>
                <th scope="col"><?= __('Emplacement Id') ?></th>
                <th scope="col"><?= __('Created Vlan') ?></th>
                <th scope="col"><?= __('NomIRL Vlan') ?></th>
                <th scope="col"><?= __('Presence Vlan') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skswitch->vlans as $vlans): ?>
            <tr>
                <td><?= h($vlans->id) ?></td>
                <td><?= h($vlans->id_Vlan) ?></td>
                <td><?= h($vlans->Nom_Vlan) ?></td>
                <td><?= h($vlans->emplacement_id) ?></td>
                <td><?= h($vlans->Created_Vlan) ?></td>
                <td><?= h($vlans->NomIRL_Vlan) ?></td>
                <td><?= h($vlans->Presence_Vlan) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vlans', 'action' => 'view', $vlans->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vlans', 'action' => 'edit', $vlans->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vlans', 'action' => 'delete', $vlans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vlans->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
