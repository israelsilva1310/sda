<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TurmasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TurmasTable Test Case
 */
class TurmasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TurmasTable
     */
    protected $Turmas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Turmas',
        'app.Instructors',
        'app.Courses',
        'app.Sectors',
        'app.Periods',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Turmas') ? [] : ['className' => TurmasTable::class];
        $this->Turmas = $this->getTableLocator()->get('Turmas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Turmas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TurmasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TurmasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
