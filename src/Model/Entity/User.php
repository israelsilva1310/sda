<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $status
 * @property string $password
 * @property string|null $forget
 * @property string|null $document
 * @property string|null $photo
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property int|null $level
 *
 * @property \App\Model\Entity\Addres[] $address
 * @property \App\Model\Entity\Address[] $addresses
 * @property \App\Model\Entity\AppCreditCard[] $app_credit_cards
 * @property \App\Model\Entity\AppInvoice[] $app_invoices
 * @property \App\Model\Entity\AppOrder[] $app_orders
 * @property \App\Model\Entity\AppSubscription[] $app_subscriptions
 * @property \App\Model\Entity\AppWallet[] $app_wallets
 * @property \App\Model\Entity\Notification[] $notifications
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    // Add this method
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
