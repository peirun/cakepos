<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Membre Entity
 *
 * @property int $id
 * @property int $Slot_Membre
 * @property int $typemembre_id
 * @property int $skswitch_id
 * @property string $Nom_Membre
 * @property string $Salle_Membre
 * @property string $Baie_Membre
 *
 * @property \App\Model\Entity\Typemembre $typemembre
 * @property \App\Model\Entity\Skswitch $skswitch
 * @property \App\Model\Entity\Extension[] $extensions
 */
class Membre extends Entity
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
