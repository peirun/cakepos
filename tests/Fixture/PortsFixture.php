<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PortsFixture
 *
 */
class PortsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Num_Port' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Speed_Port' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => 'auto', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Tag_Port' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'Pvid_Port' => ['type' => 'integer', 'length' => 9, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Status_Port' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => 'libre', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Connectedto_Port' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'GDOassos_Port' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IPassos_Port' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Portassos_Port' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'State_Port' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => 'disable', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'skswitch_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NumSlot_Port' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Type_Port' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Infogbic_Port' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Maxspeed_Port' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Prefixe_Port' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Extension_Port' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Commentaire_Port' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => '', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Salleassos_Port' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Baieassos_Port' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Affectation_Port' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'UserLastModif_Port' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DateTimeLastModif_Port' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'DescriptionIRL_Port' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LLDP_Port' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Fabricid_Port' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Fabricname_Port' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Index_Port' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OpticalState_Port' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Mode_Port' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_ports_skswitches1' => ['type' => 'index', 'columns' => ['skswitch_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'Num_Port' => 1,
            'Speed_Port' => 'Lorem ipsum d',
            'Tag_Port' => 1,
            'Pvid_Port' => 1,
            'Status_Port' => 'Lorem ip',
            'Connectedto_Port' => 'Lorem ipsum dolor sit amet',
            'GDOassos_Port' => 'Lorem ip',
            'IPassos_Port' => 'Lorem ipsum d',
            'Portassos_Port' => 'Lorem ipsum dolor sit amet',
            'State_Port' => 'Lorem ',
            'skswitch_id' => 1,
            'NumSlot_Port' => 1,
            'Type_Port' => 'Lorem ipsum dolor ',
            'Infogbic_Port' => 'Lorem ipsum dolor ',
            'Maxspeed_Port' => 'Lorem ip',
            'Prefixe_Port' => 'Lorem ipsum dolor sit amet',
            'Extension_Port' => 1,
            'Commentaire_Port' => 'Lorem ipsum dolor sit amet',
            'Salleassos_Port' => 'Lorem ipsum d',
            'Baieassos_Port' => 'Lorem ipsum d',
            'Affectation_Port' => 'Lorem ipsum dolor sit amet',
            'UserLastModif_Port' => 'Lorem ipsum d',
            'DateTimeLastModif_Port' => '2017-02-08 15:23:31',
            'DescriptionIRL_Port' => 'Lorem ipsum dolor sit amet',
            'LLDP_Port' => 'Lorem ipsum dolor sit amet',
            'Fabricid_Port' => 1,
            'Fabricname_Port' => 'Lorem ipsum dolor sit amet',
            'Index_Port' => 'Lorem ip',
            'OpticalState_Port' => 'Lorem ipsum d',
            'Mode_Port' => 'Lorem ip'
        ],
    ];
}
