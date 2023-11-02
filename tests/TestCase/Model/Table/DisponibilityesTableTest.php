<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisponibilityesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisponibilityesTable Test Case
 */
class DisponibilityesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DisponibilityesTable
     */
    protected $Disponibilityes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Disponibilityes',
        'app.Teachers',
        'app.Hours',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Disponibilityes') ? [] : ['className' => DisponibilityesTable::class];
        $this->Disponibilityes = $this->getTableLocator()->get('Disponibilityes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Disponibilityes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DisponibilityesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DisponibilityesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
