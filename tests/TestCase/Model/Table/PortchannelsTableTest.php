<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PortchannelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PortchannelsTable Test Case
 */
class PortchannelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PortchannelsTable
     */
    public $Portchannels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.portchannels',
        'app.skswitches',
        'app.emplacements',
        'app.irlskswitches',
        'app.qfabrics',
        'app.deltas',
        'app.membres',
        'app.typemembres',
        'app.extensions',
        'app.extensions_membres',
        'app.ports',
        'app.portvlans',
        'app.portchannels_ports',
        'app.sanaliases',
        'app.sanzas',
        'app.sanzones',
        'app.vlans',
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
        $config = TableRegistry::exists('Portchannels') ? [] : ['className' => 'App\Model\Table\PortchannelsTable'];
        $this->Portchannels = TableRegistry::get('Portchannels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Portchannels);

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
