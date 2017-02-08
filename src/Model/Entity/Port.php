<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Port Entity
 *
 * @property int $id
 * @property int $Num_Port
 * @property string $Speed_Port
 * @property bool $Tag_Port
 * @property int $Pvid_Port
 * @property string $Status_Port
 * @property string $Connectedto_Port
 * @property string $GDOassos_Port
 * @property string $IPassos_Port
 * @property string $Portassos_Port
 * @property string $State_Port
 * @property int $skswitch_id
 * @property int $NumSlot_Port
 * @property string $Type_Port
 * @property string $Infogbic_Port
 * @property string $Maxspeed_Port
 * @property string $Prefixe_Port
 * @property int $Extension_Port
 * @property string $Commentaire_Port
 * @property string $Salleassos_Port
 * @property string $Baieassos_Port
 * @property string $Affectation_Port
 * @property string $UserLastModif_Port
 * @property \Cake\I18n\Time $DateTimeLastModif_Port
 * @property string $DescriptionIRL_Port
 * @property string $LLDP_Port
 * @property int $Fabricid_Port
 * @property string $Fabricname_Port
 * @property string $Index_Port
 * @property string $OpticalState_Port
 * @property string $Mode_Port
 *
 * @property \App\Model\Entity\Skswitch $skswitch
 * @property \App\Model\Entity\Portvlan[] $portvlans
 * @property \App\Model\Entity\Portchannel[] $portchannels
 */
class Port extends Entity
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
