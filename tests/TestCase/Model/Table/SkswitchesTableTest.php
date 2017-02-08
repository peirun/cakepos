<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SkswitchesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SkswitchesTable Test Case
 */
class SkswitchesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SkswitchesTable
     */
    public $Skswitches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.skswitches',
        'app.emplacements',
        'app.irlskswitches',
        'app.qfabrics',
        'app.deltas',
        'app.membres',
        'app.portchannels',
        'app.ports',
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
        $config = TableRegistry::exists('Skswitches') ? [] : ['className' => 'App\Model\Table\SkswitchesTable'];
        $this->Skswitches = TableRegistry::get('Skswitches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Skswitches);

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
