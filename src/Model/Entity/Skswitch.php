<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Skswitch Entity
 *
 * @property int $id
 * @property string $Nom_Skswitch
 * @property string $IP_Skswitch
 * @property \Cake\I18n\Time $LastIRLImport_Skswitch
 * @property int $emplacement_id
 * @property int $skswitch_id
 * @property string $Salle_Skswitch
 * @property string $Baie_Skswitch
 * @property string $Constructeur_Skswitch
 * @property int $Compatibilite_Skswitch
 * @property int $Mgmtvlan_Skswitch
 * @property string $Netmask_Skswitch
 * @property string $Gateway_Skswitch
 * @property string $Snmpip_Skswitch
 * @property string $Syslogip_Skswitch
 * @property string $Radiusip_Skswitch
 * @property string $Snmpread_Skswitch
 * @property string $Snmpwrite_Skswitch
 * @property string $Ntpip_Skswitch
 * @property bool $Capacityalert_Skswitch
 * @property int $irlskswitch_id
 * @property string $Info_Skswitch
 * @property string $Otherinfo_Skswitch
 * @property int $qfabric_id
 * @property string $RsngGroup_Skswitch
 * @property string $Alias_Skswitch
 * @property string $Exploitant_Skswitch
 * @property string $BladeName_Skswitch
 * @property string $BladeNameIRL_Skswitch
 * @property \Cake\I18n\Time $LastCfgChange_Skswitch
 * @property int $LastSvgStatus_Skswitch
 * @property bool $AutoReservation_Skswitch
 * @property string $POD_Skswitch
 * @property string $Projet_Skswitch
 * @property string $Statut26e_Skswitch
 *
 * @property \App\Model\Entity\Emplacement $emplacement
 * @property \App\Model\Entity\Skswitch[] $skswitches
 * @property \App\Model\Entity\Irlskswitch $irlskswitch
 * @property \App\Model\Entity\Qfabric $qfabric
 * @property \App\Model\Entity\Delta[] $deltas
 * @property \App\Model\Entity\Membre[] $membres
 * @property \App\Model\Entity\Portchannel[] $portchannels
 * @property \App\Model\Entity\Port[] $ports
 * @property \App\Model\Entity\Sanalias[] $sanaliases
 * @property \App\Model\Entity\Sanza[] $sanzas
 * @property \App\Model\Entity\Sanzone[] $sanzones
 * @property \App\Model\Entity\Vlan[] $vlans
 */
class Skswitch extends Entity
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
