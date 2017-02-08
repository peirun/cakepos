<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MembresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MembresTable Test Case
 */
class MembresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MembresTable
     */
    public $Membres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.membres',
        'app.typemembres',
        'app.skswitches',
        'app.emplacements',
        'app.irlskswitches',
        'app.qfabrics',
        'app.deltas',
        'app.portchannels',
        'app.ports',
        'app.sanaliases',
        'app.sanzas',
        'app.sanzones',
        'app.vlans',
        'app.skswitches_vlans',
        'app.extensions',
        'app.extensions_membres'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Membres') ? [] : ['className' => 'App\Model\Table\MembresTable'];
        $this->Membres = TableRegistry::get('Membres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Membres);

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
