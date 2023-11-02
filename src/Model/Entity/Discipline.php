<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Discipline Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $teacher_id
 * @property int|null $course_id
 * @property int|null $workload
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $room_id
 *
 * @property \App\Model\Entity\Teacher[] $teachers
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\TeacherDiscipline[] $teacher_disciplines
 */
class Discipline extends Entity
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
        'teacher_id' => true,
        'course_id' => true,
        'workload' => true,
        'created' => true,
        'modified' => true,
        'room_id' => true,
        'teachers' => true,
        'course' => true,
        'room' => true,
        'teacher_disciplines' => true,
    ];
}
