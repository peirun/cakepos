<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emplacement'), ['action' => 'edit', $emplacement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emplacement'), ['action' => 'delete', $emplacement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emplacement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emplacements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emplacement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aaps'), ['controller' => 'Aaps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aap'), ['controller' => 'Aaps', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Deltas'), ['controller' => 'Deltas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Delta'), ['controller' => 'Deltas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mailcapacitaires'), ['controller' => 'Mailcapacitaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailcapacitaire'), ['controller' => 'Mailcapacitaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Qfabrics'), ['controller' => 'Qfabrics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Qfabric'), ['controller' => 'Qfabrics', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vlans'), ['controller' => 'Vlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vlan'), ['controller' => 'Vlans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emplacements view large-9 medium-8 columns content">
    <h3><?= h($emplacement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DC Emplacement') ?></th>
            <td><?= h($emplacement->DC_Emplacement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emplacement->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Aaps') ?></h4>
        <?php if (!empty($emplacement->aaps)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nom Aap') ?></th>
                <th scope="col"><?= __('IP Aap') ?></th>
                <th scope="col"><?= __('Netmask Aap') ?></th>
                <th scope="col"><?= __('Gateway Aap') ?></th>
                <th scope="col"><?= __('Salle Aap') ?></th>
                <th scope="col"><?= __('Baie Aap') ?></th>
                <th scope="col"><?= __('Constructeur Aap') ?></th>
                <th scope="col"><?= __('Snmpwrite Aap') ?></th>
                <th scope="col"><?= __('Snmpread Aap') ?></th>
                <th scope="col"><?= __('Snmpip Aap') ?></th>
                <th scope="col"><?= __('Syslogip Aap') ?></th>
                <th scope="col"><?= __('Ntpip Aap') ?></th>
                <th scope="col"><?= __('Aap Id') ?></th>
                <th scope="col"><?= __('Ismaster Aap') ?></th>
                <th scope="col"><?= __('Radiusip Aap') ?></th>
                <th scope="col"><?= __('Info Aap') ?></th>
                <th scope="col"><?= __('Otherinfo Aap') ?></th>
                <th scope="col"><?= __('Isvirtual Aap') ?></th>
                <th scope="col"><?= __('Realaapid Aap') ?></th>
                <th scope="col"><?= __('Emplacement Id') ?></th>
                <th scope="col"><?= __('LastIRLImport Aap') ?></th>
                <th scope="col"><?= __('Exploitant Aap') ?></th>
                <th scope="col"><?= __('LastCfgChange Aap') ?></th>
                <th scope="col"><?= __('LastSvgStatus Aap') ?></th>
                <th scope="col"><?= __('CN Aap') ?></th>
                <th scope="col"><?= __('Issuer Aap') ?></th>
                <th scope="col"><?= __('CertificatExpiration Aap') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($emplacement->aaps as $aaps): ?>
            <tr>
                <td><?= h($aaps->id) ?></td>
                <td><?= h($aaps->Nom_Aap) ?></td>
                <td><?= h($aaps->IP_Aap) ?></td>
                <td><?= h($aaps->Netmask_Aap) ?></td>
                <td><?= h($aaps->Gateway_Aap) ?></td>
                <td><?= h($aaps->Salle_Aap) ?></td>
                <td><?= h($aaps->Baie_Aap) ?></td>
                <td><?= h($aaps->Constructeur_Aap) ?></td>
                <td><?= h($aaps->Snmpwrite_Aap) ?></td>
                <td><?= h($aaps->Snmpread_Aap) ?></td>
                <td><?= h($aaps->Snmpip_Aap) ?></td>
                <td><?= h($aaps->Syslogip_Aap) ?></td>
                <td><?= h($aaps->Ntpip_Aap) ?></td>
                <td><?= h($aaps->aap_id) ?></td>
                <td><?= h($aaps->Ismaster_Aap) ?></td>
                <td><?= h($aaps->Radiusip_Aap) ?></td>
                <td><?= h($aaps->Info_Aap) ?></td>
                <td><?= h($aaps->Otherinfo_Aap) ?></td>
                <td><?= h($aaps->Isvirtual_Aap) ?></td>
                <td><?= h($aaps->Realaapid_Aap) ?></td>
                <td><?= h($aaps->emplacement_id) ?></td>
                <td><?= h($aaps->LastIRLImport_Aap) ?></td>
                <td><?= h($aaps->Exploitant_Aap) ?></td>
                <td><?= h($aaps->LastCfgChange_Aap) ?></td>
                <td><?= h($aaps->LastSvgStatus_Aap) ?></td>
                <td><?= h($aaps->CN_Aap) ?></td>
                <td><?= h($aaps->Issuer_Aap) ?></td>
                <td><?= h($aaps->CertificatExpiration_Aap) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Aaps', 'action' => 'view', $aaps->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Aaps', 'action' => 'edit', $aaps->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aaps', 'action' => 'delete', $aaps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aaps->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Deltas') ?></h4>
        <?php if (!empty($emplacement->deltas)): ?>
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
            <?php foreach ($emplacement->deltas as $deltas): ?>
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
        <h4><?= __('Related Mailcapacitaires') ?></h4>
        <?php if (!empty($emplacement->mailcapacitaires)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nom Mailcapacitaire') ?></th>
                <th scope="col"><?= __('Listemails Mailcapacitaire') ?></th>
                <th scope="col"><?= __('Emplacement Id') ?></th>
                <th scope="col"><?= __('Recurrence Mailcapacitaire') ?></th>
                <th scope="col"><?= __('Qfx Mailcapacitaire') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($emplacement->mailcapacitaires as $mailcapacitaires): ?>
            <tr>
                <td><?= h($mailcapacitaires->id) ?></td>
                <td><?= h($mailcapacitaires->Nom_Mailcapacitaire) ?></td>
                <td><?= h($mailcapacitaires->Listemails_Mailcapacitaire) ?></td>
                <td><?= h($mailcapacitaires->emplacement_id) ?></td>
                <td><?= h($mailcapacitaires->Recurrence_Mailcapacitaire) ?></td>
                <td><?= h($mailcapacitaires->Qfx_Mailcapacitaire) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Mailcapacitaires', 'action' => 'view', $mailcapacitaires->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Mailcapacitaires', 'action' => 'edit', $mailcapacitaires->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Mailcapacitaires', 'action' => 'delete', $mailcapacitaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailcapacitaires->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Qfabrics') ?></h4>
        <?php if (!empty($emplacement->qfabrics)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Emplacement Id') ?></th>
                <th scope="col"><?= __('Nom Qfabric') ?></th>
                <th scope="col"><?= __('IP Qfabric') ?></th>
                <th scope="col"><?= __('LastCfgChange Qfabric') ?></th>
                <th scope="col"><?= __('LastSvgStatus Qfabric') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($emplacement->qfabrics as $qfabrics): ?>
            <tr>
                <td><?= h($qfabrics->id) ?></td>
                <td><?= h($qfabrics->emplacement_id) ?></td>
                <td><?= h($qfabrics->Nom_Qfabric) ?></td>
                <td><?= h($qfabrics->IP_Qfabric) ?></td>
                <td><?= h($qfabrics->LastCfgChange_Qfabric) ?></td>
                <td><?= h($qfabrics->LastSvgStatus_Qfabric) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Qfabrics', 'action' => 'view', $qfabrics->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Qfabrics', 'action' => 'edit', $qfabrics->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Qfabrics', 'action' => 'delete', $qfabrics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qfabrics->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Skswitches') ?></h4>
        <?php if (!empty($emplacement->skswitches)): ?>
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
            <?php foreach ($emplacement->skswitches as $skswitches): ?>
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
        <h4><?= __('Related Vlans') ?></h4>
        <?php if (!empty($emplacement->vlans)): ?>
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
            <?php foreach ($emplacement->vlans as $vlans): ?>
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
