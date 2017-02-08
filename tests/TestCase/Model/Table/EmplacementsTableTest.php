<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmplacementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmplacementsTable Test Case
 */
class EmplacementsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmplacementsTable
     */
    public $Emplacements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emplacements',
        'app.aaps',
        'app.deltas',
        'app.mailcapacitaires',
        'app.qfabrics',
        'app.skswitches',
        'app.irlskswitches',
        'app.membres',
        'app.typemembres',
        'app.extensions',
        'app.extensions_membres',
        'app.portchannels',
        'app.ports',
        'app.portvlans',
        'app.portchannels_ports',
        'app.sanaliases',
        'app.sanzas',
        'app.sanzones',
        'app.vlans',
        'app.aapsifs',
        'app.snatpools',
        'app.virtualvlans',
        'app.aapsinterfaces',
        'app.aapsinterfaces_vlans',
        'app.skswitches_vlans'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Emplacements') ? [] : ['className' => 'App\Model\Table\EmplacementsTable'];
        $this->Emplacements = TableRegistry::get('Emplacements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Emplacements);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
