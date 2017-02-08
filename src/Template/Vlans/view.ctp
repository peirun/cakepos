<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vlan'), ['action' => 'edit', $vlan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vlan'), ['action' => 'delete', $vlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vlan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vlans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vlan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emplacements'), ['controller' => 'Emplacements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emplacement'), ['controller' => 'Emplacements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aapsifs'), ['controller' => 'Aapsifs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aapsif'), ['controller' => 'Aapsifs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Portvlans'), ['controller' => 'Portvlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portvlan'), ['controller' => 'Portvlans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Snatpools'), ['controller' => 'Snatpools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Snatpool'), ['controller' => 'Snatpools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Virtualvlans'), ['controller' => 'Virtualvlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Virtualvlan'), ['controller' => 'Virtualvlans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aapsinterfaces'), ['controller' => 'Aapsinterfaces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aapsinterface'), ['controller' => 'Aapsinterfaces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vlans view large-9 medium-8 columns content">
    <h3><?= h($vlan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom Vlan') ?></th>
            <td><?= h($vlan->Nom_Vlan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emplacement') ?></th>
            <td><?= $vlan->has('emplacement') ? $this->Html->link($vlan->emplacement->id, ['controller' => 'Emplacements', 'action' => 'view', $vlan->emplacement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NomIRL Vlan') ?></th>
            <td><?= h($vlan->NomIRL_Vlan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presence Vlan') ?></th>
            <td><?= h($vlan->Presence_Vlan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vlan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Vlan') ?></th>
            <td><?= $this->Number->format($vlan->id_Vlan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Vlan') ?></th>
            <td><?= h($vlan->Created_Vlan) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Aapsifs') ?></h4>
        <?php if (!empty($vlan->aapsifs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('State Aapsif') ?></th>
                <th scope="col"><?= __('Addr Aapsif') ?></th>
                <th scope="col"><?= __('Mask Aapsif') ?></th>
                <th scope="col"><?= __('Vlan Id') ?></th>
                <th scope="col"><?= __('Partition Id') ?></th>
                <th scope="col"><?= __('Num Aapsif') ?></th>
                <th scope="col"><?= __('Aapindex Aapsif') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vlan->aapsifs as $aapsifs): ?>
            <tr>
                <td><?= h($aapsifs->id) ?></td>
                <td><?= h($aapsifs->State_Aapsif) ?></td>
                <td><?= h($aapsifs->Addr_Aapsif) ?></td>
                <td><?= h($aapsifs->Mask_Aapsif) ?></td>
                <td><?= h($aapsifs->vlan_id) ?></td>
                <td><?= h($aapsifs->partition_id) ?></td>
                <td><?= h($aapsifs->Num_Aapsif) ?></td>
                <td><?= h($aapsifs->Aapindex_Aapsif) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Aapsifs', 'action' => 'view', $aapsifs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Aapsifs', 'action' => 'edit', $aapsifs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aapsifs', 'action' => 'delete', $aapsifs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aapsifs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Portvlans') ?></h4>
        <?php if (!empty($vlan->portvlans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ref Portvlan') ?></th>
                <th scope="col"><?= __('Port Id') ?></th>
                <th scope="col"><?= __('Vlan Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vlan->portvlans as $portvlans): ?>
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
        <h4><?= __('Related Snatpools') ?></h4>
        <?php if (!empty($vlan->snatpools)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nom Snatpool') ?></th>
                <th scope="col"><?= __('Vlan Id') ?></th>
                <th scope="col"><?= __('ID Snatpool') ?></th>
                <th scope="col"><?= __('Aap Id') ?></th>
                <th scope="col"><?= __('Type Snatpool') ?></th>
                <th scope="col"><?= __('Ports Snatpool') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vlan->snatpools as $snatpools): ?>
            <tr>
                <td><?= h($snatpools->id) ?></td>
                <td><?= h($snatpools->Nom_Snatpool) ?></td>
                <td><?= h($snatpools->vlan_id) ?></td>
                <td><?= h($snatpools->ID_Snatpool) ?></td>
                <td><?= h($snatpools->aap_id) ?></td>
                <td><?= h($snatpools->Type_Snatpool) ?></td>
                <td><?= h($snatpools->Ports_Snatpool) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Snatpools', 'action' => 'view', $snatpools->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Snatpools', 'action' => 'edit', $snatpools->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Snatpools', 'action' => 'delete', $snatpools->id], ['confirm' => __('Are you sure you want to delete # {0}?', $snatpools->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Virtualvlans') ?></h4>
        <?php if (!empty($vlan->virtualvlans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Virtual Id') ?></th>
                <th scope="col"><?= __('Vlan Id') ?></th>
                <th scope="col"><?= __('State Virtualvlan') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vlan->virtualvlans as $virtualvlans): ?>
            <tr>
                <td><?= h($virtualvlans->id) ?></td>
                <td><?= h($virtualvlans->virtual_id) ?></td>
                <td><?= h($virtualvlans->vlan_id) ?></td>
                <td><?= h($virtualvlans->State_Virtualvlan) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Virtualvlans', 'action' => 'view', $virtualvlans->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Virtualvlans', 'action' => 'edit', $virtualvlans->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Virtualvlans', 'action' => 'delete', $virtualvlans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $virtualvlans->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Aapsinterfaces') ?></h4>
        <?php if (!empty($vlan->aapsinterfaces)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nom Aapsinterface') ?></th>
                <th scope="col"><?= __('Tag Aapsinterface') ?></th>
                <th scope="col"><?= __('State Aapsinterface') ?></th>
                <th scope="col"><?= __('Aap Id') ?></th>
                <th scope="col"><?= __('Type Aapsinterface') ?></th>
                <th scope="col"><?= __('Infogbic Aapsinterface') ?></th>
                <th scope="col"><?= __('Maxspeed Aapsinterface') ?></th>
                <th scope="col"><?= __('Pvid Aapsinterface') ?></th>
                <th scope="col"><?= __('Speed Aapsinterface') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vlan->aapsinterfaces as $aapsinterfaces): ?>
            <tr>
                <td><?= h($aapsinterfaces->id) ?></td>
                <td><?= h($aapsinterfaces->Nom_Aapsinterface) ?></td>
                <td><?= h($aapsinterfaces->Tag_Aapsinterface) ?></td>
                <td><?= h($aapsinterfaces->State_Aapsinterface) ?></td>
                <td><?= h($aapsinterfaces->aap_id) ?></td>
                <td><?= h($aapsinterfaces->Type_Aapsinterface) ?></td>
                <td><?= h($aapsinterfaces->Infogbic_Aapsinterface) ?></td>
                <td><?= h($aapsinterfaces->Maxspeed_Aapsinterface) ?></td>
                <td><?= h($aapsinterfaces->Pvid_Aapsinterface) ?></td>
                <td><?= h($aapsinterfaces->Speed_Aapsinterface) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Aapsinterfaces', 'action' => 'view', $aapsinterfaces->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Aapsinterfaces', 'action' => 'edit', $aapsinterfaces->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aapsinterfaces', 'action' => 'delete', $aapsinterfaces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aapsinterfaces->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Skswitches') ?></h4>
        <?php if (!empty($vlan->skswitches)): ?>
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
            <?php foreach ($vlan->skswitches as $skswitches): ?>
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
</div>
