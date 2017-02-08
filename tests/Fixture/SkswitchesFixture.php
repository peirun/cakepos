<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SkswitchesFixture
 *
 */
class SkswitchesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Nom_Skswitch' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IP_Skswitch' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LastIRLImport_Skswitch' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'emplacement_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'skswitch_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Salle_Skswitch' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Baie_Skswitch' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Constructeur_Skswitch' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Compatibilite_Skswitch' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Mgmtvlan_Skswitch' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Netmask_Skswitch' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Gateway_Skswitch' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Snmpip_Skswitch' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Syslogip_Skswitch' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Radiusip_Skswitch' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Snmpread_Skswitch' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Snmpwrite_Skswitch' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Ntpip_Skswitch' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Capacityalert_Skswitch' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'irlskswitch_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Info_Skswitch' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Otherinfo_Skswitch' => ['type' => 'text', 'length' => 4294967295, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'qfabric_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'RsngGroup_Skswitch' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Alias_Skswitch' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Exploitant_Skswitch' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => 'ERCI/ERAP', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'BladeName_Skswitch' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'BladeNameIRL_Skswitch' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LastCfgChange_Skswitch' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'LastSvgStatus_Skswitch' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'AutoReservation_Skswitch' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'POD_Skswitch' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Projet_Skswitch' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Statut26e_Skswitch' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_eqswitches_emplacements1' => ['type' => 'index', 'columns' => ['emplacement_id'], 'length' => []],
            'fk_skswitches_skswitches1' => ['type' => 'index', 'columns' => ['skswitch_id'], 'length' => []],
            'fk_skswitches_qfabrics1' => ['type' => 'index', 'columns' => ['qfabric_id'], 'length' => []],
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
            'Nom_Skswitch' => 'Lorem ipsum dolor sit amet',
            'IP_Skswitch' => 'Lorem ipsum d',
            'LastIRLImport_Skswitch' => '2017-02-08',
            'emplacement_id' => 1,
            'skswitch_id' => 1,
            'Salle_Skswitch' => 'Lorem ipsum d',
            'Baie_Skswitch' => 'Lorem ipsum d',
            'Constructeur_Skswitch' => 'Lorem ipsum dolor sit amet',
            'Compatibilite_Skswitch' => 1,
            'Mgmtvlan_Skswitch' => 1,
            'Netmask_Skswitch' => 'Lorem ipsum d',
            'Gateway_Skswitch' => 'Lorem ipsum d',
            'Snmpip_Skswitch' => 'Lorem ipsum dolor sit amet',
            'Syslogip_Skswitch' => 'Lorem ipsum dolor sit amet',
            'Radiusip_Skswitch' => 'Lorem ipsum dolor sit amet',
            'Snmpread_Skswitch' => 'Lorem ipsum dolor sit a',
            'Snmpwrite_Skswitch' => 'Lorem ipsum dolor sit a',
            'Ntpip_Skswitch' => 'Lorem ipsum dolor sit amet',
            'Capacityalert_Skswitch' => 1,
            'irlskswitch_id' => 1,
            'Info_Skswitch' => 'Lorem ipsum dolor sit amet',
            'Otherinfo_Skswitch' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'qfabric_id' => 1,
            'RsngGroup_Skswitch' => 'Lorem ipsum dolor ',
            'Alias_Skswitch' => 'Lorem ipsum dolor ',
            'Exploitant_Skswitch' => 'Lorem ipsum dolor sit amet',
            'BladeName_Skswitch' => 'Lorem ipsum dolor ',
            'BladeNameIRL_Skswitch' => 'Lorem ipsum dolor ',
            'LastCfgChange_Skswitch' => '2017-02-08 15:20:46',
            'LastSvgStatus_Skswitch' => 1,
            'AutoReservation_Skswitch' => 1,
            'POD_Skswitch' => 'Lor',
            'Projet_Skswitch' => 'Lorem ipsum dolor ',
            'Statut26e_Skswitch' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
