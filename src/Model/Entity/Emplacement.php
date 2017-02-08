<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emplacement Entity
 *
 * @property int $id
 * @property string $DC_Emplacement
 *
 * @property \App\Model\Entity\Aap[] $aaps
 * @property \App\Model\Entity\Delta[] $deltas
 * @property \App\Model\Entity\Mailcapacitaire[] $mailcapacitaires
 * @property \App\Model\Entity\Qfabric[] $qfabrics
 * @property \App\Model\Entity\Skswitch[] $skswitches
 * @property \App\Model\Entity\Vlan[] $vlans
 */
class Emplacement extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
