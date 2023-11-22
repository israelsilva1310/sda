<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Restricao Entity
 *
 * @property int $id
 * @property string|null $tipo
 * @property string|null $descricao
 * @property int|null $teacher_id
 * @property string|null $dia_semana
 * @property \Cake\I18n\Time|null $hora
 * @property bool|null $active
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Teacher $teacher
 */
class Restricao extends Entity
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
        'tipo' => true,
        'descricao' => true,
        'teacher_id' => true,
        'dia_semana' => true,
        'hora' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'teacher' => true,
    ];
}
