<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TurmasFixture
 */
class TurmasFixture extends TestFixture
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
                'teacher_id' => 1,
                'cursos_id' => 1,
                'sector_id' => 1,
                'period_id' => 1,
                'data_inicio' => '2023-07-11',
                'data_final' => '2023-07-11',
                'carga_horaria' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'acronym' => 'Lorem ip',
                'collor' => 'Lorem ipsum dolor ',
                'period' => 1,
                'created' => '2023-07-11 19:05:36',
                'modified' => 1689102336,
            ],
        ];
        parent::init();
    }
}
