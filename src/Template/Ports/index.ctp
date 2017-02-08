<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Port'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skswitches'), ['controller' => 'Skswitches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skswitch'), ['controller' => 'Skswitches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Portvlans'), ['controller' => 'Portvlans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portvlan'), ['controller' => 'Portvlans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Portchannels'), ['controller' => 'Portchannels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portchannel'), ['controller' => 'Portchannels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ports index large-9 medium-8 columns content">
    <h3><?= __('Ports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Num_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Speed_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tag_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pvid_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Status_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Connectedto_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('GDOassos_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IPassos_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Portassos_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('State_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skswitch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NumSlot_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Type_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Infogbic_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Maxspeed_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Prefixe_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Extension_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Commentaire_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Salleassos_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Baieassos_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Affectation_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('UserLastModif_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateTimeLastModif_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DescriptionIRL_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LLDP_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fabricid_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fabricname_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Index_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('OpticalState_Port') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mode_Port') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ports as $port): ?>
            <tr>
                <td><?= $this->Number->format($port->id) ?></td>
                <td><?= $this->Number->format($port->Num_Port) ?></td>
                <td><?= h($port->Speed_Port) ?></td>
                <td><?= h($port->Tag_Port) ?></td>
                <td><?= $this->Number->format($port->Pvid_Port) ?></td>
                <td><?= h($port->Status_Port) ?></td>
                <td><?= h($port->Connectedto_Port) ?></td>
                <td><?= h($port->GDOassos_Port) ?></td>
                <td><?= h($port->IPassos_Port) ?></td>
                <td><?= h($port->Portassos_Port) ?></td>
                <td><?= h($port->State_Port) ?></td>
                <td><?= $port->has('skswitch') ? $this->Html->link($port->skswitch->id, ['controller' => 'Skswitches', 'action' => 'view', $port->skswitch->id]) : '' ?></td>
                <td><?= $this->Number->format($port->NumSlot_Port) ?></td>
                <td><?= h($port->Type_Port) ?></td>
                <td><?= h($port->Infogbic_Port) ?></td>
                <td><?= h($port->Maxspeed_Port) ?></td>
                <td><?= h($port->Prefixe_Port) ?></td>
                <td><?= $this->Number->format($port->Extension_Port) ?></td>
                <td><?= h($port->Commentaire_Port) ?></td>
                <td><?= h($port->Salleassos_Port) ?></td>
                <td><?= h($port->Baieassos_Port) ?></td>
                <td><?= h($port->Affectation_Port) ?></td>
                <td><?= h($port->UserLastModif_Port) ?></td>
                <td><?= h($port->DateTimeLastModif_Port) ?></td>
                <td><?= h($port->DescriptionIRL_Port) ?></td>
                <td><?= h($port->LLDP_Port) ?></td>
                <td><?= $this->Number->format($port->Fabricid_Port) ?></td>
                <td><?= h($port->Fabricname_Port) ?></td>
                <td><?= h($port->Index_Port) ?></td>
                <td><?= h($port->OpticalState_Port) ?></td>
                <td><?= h($port->Mode_Port) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $port->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $port->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $port->id], ['confirm' => __('Are you sure you want to delete # {0}?', $port->id)]) ?>
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
