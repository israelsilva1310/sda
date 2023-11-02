<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string|null $teacher_coordinator
 * @property string|null $acronym
 * @property string $name
 * @property string|null $requisito
 * @property int|null $carga_horaria
 */
class Course extends Entity
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
        'teacher_coordinator' => true,
        'acronym' => true,
        'name' => true,
        'requisito' => true,
        'carga_horaria' => true,
    ];
}
