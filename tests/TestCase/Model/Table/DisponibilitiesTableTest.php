<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisponibilitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisponibilitiesTable Test Case
 */
class DisponibilitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DisponibilitiesTable
     */
    protected $Disponibilities;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Disponibilities',
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
        $config = $this->getTableLocator()->exists('Disponibilities') ? [] : ['className' => DisponibilitiesTable::class];
        $this->Disponibilities = $this->getTableLocator()->get('Disponibilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Disponibilities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DisponibilitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DisponibilitiesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
