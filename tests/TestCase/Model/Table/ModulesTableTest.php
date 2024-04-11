<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModulesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModulesTable Test Case
 */
class ModulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ModulesTable
     */
    protected $Modules;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Modules',
        'app.Menus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Modules') ? [] : ['className' => ModulesTable::class];
        $this->Modules = $this->getTableLocator()->get('Modules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Modules);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ModulesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
