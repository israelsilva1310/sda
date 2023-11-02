<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PeriodsFixture
 */
class PeriodsFixture extends TestFixture
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
                'period' => 1,
                'bimester' => 1,
                'semester' => 1,
                'year' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-07-10 22:00:43',
                'modified' => 1689026443,
            ],
        ];
        parent::init();
    }
}
