<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vlan Entity
 *
 * @property int $id
 * @property int $id_Vlan
 * @property string $Nom_Vlan
 * @property int $emplacement_id
 * @property \Cake\I18n\Time $Created_Vlan
 * @property string $NomIRL_Vlan
 * @property string $Presence_Vlan
 *
 * @property \App\Model\Entity\Emplacement $emplacement
 * @property \App\Model\Entity\Aapsif[] $aapsifs
 * @property \App\Model\Entity\Portvlan[] $portvlans
 * @property \App\Model\Entity\Snatpool[] $snatpools
 * @property \App\Model\Entity\Virtualvlan[] $virtualvlans
 * @property \App\Model\Entity\Aapsinterface[] $aapsinterfaces
 * @property \App\Model\Entity\Skswitch[] $skswitches
 */
class Vlan extends Entity
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
