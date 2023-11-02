<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursesFixture
 */
class CoursesFixture extends TestFixture
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
                'teacher_coordinator' => 'Lorem ipsum dolor sit amet',
                'acronym' => 'Lorem ip',
                'name' => 'Lorem ipsum dolor sit amet',
                'requisito' => 'Lorem ipsum dolor sit amet',
                'carga_horaria' => 1,
            ],
        ];
        parent::init();
    }
}
