<?php
namespace App\Test\TestCase\Controller;

use App\Controller\VlansController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\VlansController Test Case
 */
class VlansControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
