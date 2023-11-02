<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disponibilitie Entity
 *
 * @property int $id
 * @property int $teacher_id
 * @property bool|null $active
 * @property int $hour_id
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property \Cake\I18n\FrozenTime|null $created_at
 *
 * @property \App\Model\Entity\Teacher $teacher
 * @property \App\Model\Entity\Hour $hour
 */
class Disponibility extends Entity
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
        'teacher_id' => true,
        'active' => true,
        'hour_id' => true,
        'updated_at' => true,
        'created_at' => true,
        'teacher' => true,
        'hour' => true,
    ];
}
