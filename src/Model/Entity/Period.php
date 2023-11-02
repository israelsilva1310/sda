<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Period Entity
 *
 * @property int $id
 * @property int|null $period
 * @property int|null $bimester
 * @property int|null $semester
 * @property string|null $year
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Class[] $classes
 */
class Period extends Entity
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
        'period' => true,
        'bimester' => true,
        'semester' => true,
        'year' => true,
        'created' => true,
        'modified' => true,
        'classes' => true,
    ];
}
