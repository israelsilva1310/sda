<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\ImportHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\ImportHelper Test Case
 */
class ImportHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\ImportHelper
     */
    protected $Import;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Import = new ImportHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Import);

        parent::tearDown();
    }
}
