<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Disciplines Model
 *
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\BelongsTo $Teachers
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\RoomsTable&\Cake\ORM\Association\BelongsTo $Rooms
 * @property \App\Model\Table\TeacherDisciplinesTable&\Cake\ORM\Association\HasMany $TeacherDisciplines
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\HasMany $Teachers
 *
 * @method \App\Model\Entity\Discipline newEmptyEntity()
 * @method \App\Model\Entity\Discipline newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Discipline[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Discipline get($primaryKey, $options = [])
 * @method \App\Model\Entity\Discipline findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Discipline patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Discipline[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Discipline|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Discipline saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Discipline[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Discipline[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Discipline[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Discipline[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DisciplinesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('disciplines');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Teachers', [
            'foreignKey' => 'teacher_id',
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
        ]);
        $this->belongsTo('Rooms', [
            'foreignKey' => 'room_id',
        ]);
        $this->hasMany('TeacherDisciplines', [
            'foreignKey' => 'discipline_id',
        ]);
        $this->hasMany('Teachers', [
            'foreignKey' => 'discipline_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('teacher_id')
            ->allowEmptyString('teacher_id');

        $validator
            ->integer('course_id')
            ->allowEmptyString('course_id');

        $validator
            ->integer('workload')
            ->allowEmptyString('workload');

        $validator
            ->integer('room_id')
            ->allowEmptyString('room_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('teacher_id', 'Teachers'), ['errorField' => 'teacher_id']);
        $rules->add($rules->existsIn('course_id', 'Courses'), ['errorField' => 'course_id']);
        $rules->add($rules->existsIn('room_id', 'Rooms'), ['errorField' => 'room_id']);

        return $rules;
    }
}
