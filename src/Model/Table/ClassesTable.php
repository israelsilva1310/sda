<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classes Model
 *
 * @property \App\Model\Table\InstructorsTable&\Cake\ORM\Association\BelongsTo $Instructors
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\SectorsTable&\Cake\ORM\Association\BelongsTo $Sectors
 * @property \App\Model\Table\PeriodsTable&\Cake\ORM\Association\BelongsTo $Periods
 *
 * @method \App\Model\Entity\Class newEmptyEntity()
 * @method \App\Model\Entity\Class newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Class[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Class get($primaryKey, $options = [])
 * @method \App\Model\Entity\Class findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Class patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Class[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Class|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Class saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Class[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Class[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Class[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Class[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClassesTable extends Table
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

        $this->setTable('classes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Instructors', [
            'foreignKey' => 'instrutores_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'cursos_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sectors', [
            'foreignKey' => 'sector_id',
        ]);
        $this->belongsTo('Periods', [
            'foreignKey' => 'period_id',
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
            ->integer('instrutores_id')
            ->notEmptyString('instrutores_id');

        $validator
            ->nonNegativeInteger('cursos_id')
            ->notEmptyString('cursos_id');

        $validator
            ->integer('sector_id')
            ->allowEmptyString('sector_id');

        $validator
            ->integer('period_id')
            ->allowEmptyString('period_id');

        $validator
            ->date('data_inicio')
            ->allowEmptyDate('data_inicio');

        $validator
            ->date('data_final')
            ->allowEmptyDate('data_final');

        $validator
            ->allowEmptyString('carga_horaria');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('acronym')
            ->maxLength('acronym', 10)
            ->allowEmptyString('acronym');

        $validator
            ->scalar('collor')
            ->maxLength('collor', 20)
            ->allowEmptyString('collor');

        $validator
            ->integer('period')
            ->requirePresence('period', 'create')
            ->notEmptyString('period');

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
        $rules->add($rules->existsIn('instrutores_id', 'Instructors'), ['errorField' => 'instrutores_id']);
        $rules->add($rules->existsIn('cursos_id', 'Courses'), ['errorField' => 'cursos_id']);
        $rules->add($rules->existsIn('sector_id', 'Sectors'), ['errorField' => 'sector_id']);
        $rules->add($rules->existsIn('period_id', 'Periods'), ['errorField' => 'period_id']);

        return $rules;
    }
}
