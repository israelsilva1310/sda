<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SectorsFixture
 */
class SectorsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'active' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-07-09 17:26:41',
                'modified' => 1688923601,
            ],
        ];
        parent::init();
    }
}
