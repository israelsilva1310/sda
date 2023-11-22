<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RestricaosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RestricaosTable Test Case
 */
class RestricaosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RestricaosTable
     */
    protected $Restricaos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Restricaos',
        'app.Teachers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Restricaos') ? [] : ['className' => RestricaosTable::class];
        $this->Restricaos = $this->getTableLocator()->get('Restricaos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Restricaos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RestricaosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RestricaosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
