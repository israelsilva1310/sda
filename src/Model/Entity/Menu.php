<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity
 *
 * @property int $id
 * @property int $modulo_id
 * @property int|null $menu_pai
 * @property string $name
 * @property string|null $url
 * @property int|null $order
 * @property string|null $context
 * @property bool|null $active
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Modulo $modulo
 */
class Menu extends Entity
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
        'modulo_id' => true,
        'menu_pai' => true,
        'name' => true,
        'url' => true,
        'order' => true,
        'context' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'modulo' => true,
    ];
}
