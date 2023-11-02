<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'forget' => 'Lorem ipsum dolor sit amet',
                'document' => 'Lorem ips',
                'photo' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1687813700,
                'updated_at' => 1687813700,
                'level' => 1,
            ],
        ];
        parent::init();
    }
}
