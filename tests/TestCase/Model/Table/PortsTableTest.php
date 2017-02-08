<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PortsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PortsTable Test Case
 */
class PortsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PortsTable
     */
    public $Ports;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ports',
        'app.skswitches',
        'app.emplacements',
        'app.irlskswitches',
        'app.qfabrics',
        'app.deltas',
        'app.membres',
        'app.typemembres',
        'app.extensions',
        'app.extensions_membres',
        'app.portchannels',
        'app.sanaliases',
        'app.sanzas',
        'app.sanzones',
        'app.vlans',
        'app.skswitches_vlans',
        'app.portvlans',
        'app.portchannels_ports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ports') ? [] : ['className' => 'App\Model\Table\PortsTable'];
        $this->Ports = TableRegistry::get('Ports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ports);

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
