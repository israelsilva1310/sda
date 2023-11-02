<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DisponibilityesFixture
 */
class DisponibilityesFixture extends TestFixture
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
                'active' => 1,
                'hour_id' => 1,
                'updated_at' => 1689015614,
                'created_at' => 1689015614,
            ],
        ];
        parent::init();
    }
}
