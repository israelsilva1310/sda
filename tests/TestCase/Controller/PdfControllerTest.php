<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\PdfController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\PdfController Test Case
 *
 * @uses \App\Controller\PdfController
 */
class PdfControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pdf',
    ];
}
