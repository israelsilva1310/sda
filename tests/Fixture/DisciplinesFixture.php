<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DisciplinesFixture
 */
class DisciplinesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'teacher_id' => 1,
                'course_id' => 1,
                'workload' => 1,
                'created' => '2023-10-27 17:47:06',
                'modified' => 1698428826,
                'room_id' => 1,
            ],
        ];
        parent::init();
    }
}
