<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContractorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContractorsTable Test Case
 */
class ContractorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContractorsTable
     */
    protected $Contractors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Contractors',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Contractors') ? [] : ['className' => ContractorsTable::class];
        $this->Contractors = $this->getTableLocator()->get('Contractors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Contractors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
