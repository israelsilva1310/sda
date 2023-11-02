<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeriodsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeriodsTable Test Case
 */
class PeriodsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeriodsTable
     */
    protected $Periods;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Periods',
        'app.Classes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Periods') ? [] : ['className' => PeriodsTable::class];
        $this->Periods = $this->getTableLocator()->get('Periods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Periods);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PeriodsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
