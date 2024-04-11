<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Modulo Entity
 *
 * @property int $id
 * @property string $name
 * @property bool $active
 * @property string $icon
 * @property string|null $url
 * @property string|null $order
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Menu[] $menus
 */
class Modulo extends Entity
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
        'name' => true,
        'active' => true,
        'icon' => true,
        'url' => true,
        'order' => true,
        'created' => true,
        'modified' => true,
        'menus' => true,
    ];
}
