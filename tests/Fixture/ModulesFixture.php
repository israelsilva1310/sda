<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModulesFixture
 */
class ModulesFixture extends TestFixture
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
                'active' => 1,
                'icon' => 'Lorem ipsum dolor sit amet',
                'prefix' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-04-11 11:16:05',
                'modified' => 1712834165,
            ],
        ];
        parent::init();
    }
}
