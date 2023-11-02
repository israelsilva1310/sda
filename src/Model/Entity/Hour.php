<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hour Entity
 *
 * @property int $id
 * @property string|null $description
 * @property string|null $period
 * @property \Cake\I18n\Time|null $hour_initial
 * @property \Cake\I18n\Time|null $hour_final
 * @property string|null $week
 * @property bool|null $active
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\Disponibilitye[] $disponibilityes
 */
class Hour extends Entity
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
        'description' => true,
        'period' => true,
        'hour_initial' => true,
        'hour_final' => true,
        'week' => true,
        'active' => true,
        'created_at' => true,
        'updated_at' => true,
        'disponibilityes' => true,
    ];
}
