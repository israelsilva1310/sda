<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teacher Entity
 *
 * @property int $id
 * @property string|null $qrcode
 * @property string|null $hash
 * @property string $first_name
 * @property string $last_name
 * @property string|null $acronym
 * @property int|null $user_id
 * @property int|null $discipline_id
 * @property string|null $email
 * @property string|null $title
 * @property string|null $phone
 * @property bool|null $active
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\Discipline $discipline
 * @property \App\Model\Entity\Course[] $courses
 * @property \App\Model\Entity\Disponibility[] $disponibilities
 * @property \App\Model\Entity\Turma[] $turmas
 */
class Teacher extends Entity
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
        'qrcode' => true,
        'hash' => true,
        'first_name' => true,
        'last_name' => true,
        'acronym' => true,
        'user_id' => true,
        'discipline_id' => true,
        'email' => true,
        'title' => true,
        'phone' => true,
        'active' => true,
        'created_at' => true,
        'updated_at' => true,
        'discipline' => true,
        'courses' => true,
        'disponibilities' => true,
        'turmas' => true,
    ];
}
