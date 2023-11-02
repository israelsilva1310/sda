<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Turma Entity
 *
 * @property int $id
 * @property int $teacher_id
 * @property int $cursos_id
 * @property int|null $sector_id
 * @property int|null $period_id
 * @property \Cake\I18n\FrozenDate|null $data_inicio
 * @property \Cake\I18n\FrozenDate|null $data_final
 * @property int|null $carga_horaria
 * @property string|null $name
 * @property string|null $acronym
 * @property string|null $collor
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Period $period
 * @property \App\Model\Entity\Instructor $instructor
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Sector $sector
 */
class Turma extends Entity
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
        'cursos_id' => true,
        'sector_id' => true,
        'period_id' => true,
        'data_inicio' => true,
        'data_final' => true,
        'carga_horaria' => true,
        'name' => true,
        'acronym' => true,
        'collor' => true,
        'period' => true,
        'created' => true,
        'modified' => true,
        'instructor' => true,
        'course' => true,
        'sector' => true,
    ];
}
