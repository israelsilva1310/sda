<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClassesFixture
 */
class ClassesFixture extends TestFixture
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
                'instrutores_id' => 1,
                'cursos_id' => 1,
                'sector_id' => 1,
                'period_id' => 1,
                'data_inicio' => '2023-07-10',
                'data_final' => '2023-07-10',
                'carga_horaria' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'acronym' => 'Lorem ip',
                'collor' => 'Lorem ipsum dolor ',
                'period' => 1,
                'created' => '2023-07-10 22:19:14',
                'modified' => 1689027554,
            ],
        ];
        parent::init();
    }
}
