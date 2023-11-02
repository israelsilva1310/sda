<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HoursFixture
 */
class HoursFixture extends TestFixture
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
                'description' => 'Lorem ipsum dolor sit amet',
                'period' => 'Lorem ipsum dolor sit amet',
                'hour_initial' => '21:15:39',
                'hour_final' => '21:15:39',
                'week' => 'Lorem ipsum dolor ',
                'active' => 1,
                'created_at' => '2023-07-02 21:15:39',
                'updated_at' => 1688332539,
            ],
        ];
        parent::init();
    }
}
