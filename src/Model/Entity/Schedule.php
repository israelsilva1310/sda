<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Schedule Entity
 *
 * @property int $id
 * @property int|null $course_id
 * @property int|null $period
 * @property int|null $teacher_id
 * @property int|null $discipline_id
 * @property string|null $day
 * @property string|null $hour
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Teacher $teacher
 * @property \App\Model\Entity\Discipline $discipline
 */
class Schedule extends Entity
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
        'course_id' => true,
        'period' => true,
        'teacher_id' => true,
        'discipline_id' => true,
        'day' => true,
        'hour' => true,
        'created' => true,
        'modified' => true,
        'course' => true,
        'teacher' => true,
        'discipline' => true,
    ];
}
