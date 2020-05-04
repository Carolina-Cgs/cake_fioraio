<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MyflowersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MyflowersTable Test Case
 */
class MyflowersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MyflowersTable
     */
    protected $Myflowers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Myflowers',
        'app.Occasions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Myflowers') ? [] : ['className' => MyflowersTable::class];
        $this->Myflowers = TableRegistry::getTableLocator()->get('Myflowers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Myflowers);

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
