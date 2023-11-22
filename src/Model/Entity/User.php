<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'status' => true,
        'password' => true,
        'forget' => true,
        'document' => true,
        'photo' => true,
        'created_at' => true,
        'updated_at' => true,
        'level' => true,
        'address' => true,
        'addresses' => true,
        'app_credit_cards' => true,
        'app_invoices' => true,
        'app_orders' => true,
        'app_subscriptions' => true,
        'app_wallets' => true,
        'notifications' => true,
    ];

    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
