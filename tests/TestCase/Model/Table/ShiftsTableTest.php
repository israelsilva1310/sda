<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShiftsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShiftsTable Test Case
 */
class ShiftsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ShiftsTable
     */
    protected $Shifts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Shifts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Shifts') ? [] : ['className' => ShiftsTable::class];
        $this->Shifts = $this->getTableLocator()->get('Shifts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Shifts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ShiftsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
