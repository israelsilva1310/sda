<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SectorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SectorsTable Test Case
 */
class SectorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SectorsTable
     */
    protected $Sectors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sectors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sectors') ? [] : ['className' => SectorsTable::class];
        $this->Sectors = $this->getTableLocator()->get('Sectors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sectors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SectorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
