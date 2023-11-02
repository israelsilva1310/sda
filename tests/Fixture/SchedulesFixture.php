<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SchedulesFixture
 */
class SchedulesFixture extends TestFixture
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
                'course_id' => 1,
                'period' => 1,
                'teacher_id' => 1,
                'discipline_id' => 1,
                'day' => 'Lorem ipsum d',
                'hour' => 'Lorem ipsum d',
                'created' => '2023-10-27 20:30:16',
                'modified' => 1698438616,
            ],
        ];
        parent::init();
    }
}
