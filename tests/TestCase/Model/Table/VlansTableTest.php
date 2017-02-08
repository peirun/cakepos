<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VlansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VlansTable Test Case
 */
class VlansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VlansTable
     */
    public $Vlans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vlans',
        'app.emplacements',
        'app.aapsifs',
        'app.portvlans',
        'app.snatpools',
        'app.virtualvlans',
        'app.aapsinterfaces',
        'app.aapsinterfaces_vlans',
        'app.skswitches',
        'app.irlskswitches',
        'app.qfabrics',
        'app.deltas',
        'app.membres',
        'app.typemembres',
        'app.extensions',
        'app.extensions_membres',
        'app.portchannels',
        'app.ports',
        'app.portchannels_ports',
        'app.sanaliases',
        'app.sanzas',
        'app.sanzones',
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
        $config = TableRegistry::exists('Vlans') ? [] : ['className' => 'App\Model\Table\VlansTable'];
        $this->Vlans = TableRegistry::get('Vlans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vlans);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
