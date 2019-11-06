<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccLedgerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccLedgerTable Test Case
 */
class AccLedgerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccLedgerTable
     */
    public $AccLedger;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.acc_ledger',
        'app.colleges',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AccLedger') ? [] : ['className' => AccLedgerTable::class];
        $this->AccLedger = TableRegistry::getTableLocator()->get('AccLedger', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccLedger);

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
