<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoomsFixture
 */
class RoomsFixture extends TestFixture
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
                'location' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => 1700679641,
                'modified' => 1700679641,
                'active' => 1,
            ],
        ];
        parent::init();
    }
}
