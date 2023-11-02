<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Disponibilities Model
 *
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\BelongsTo $Teachers
 * @property \App\Model\Table\HoursTable&\Cake\ORM\Association\BelongsTo $Hours
 *
 * @method \App\Model\Entity\Disponibility newEmptyEntity()
 * @method \App\Model\Entity\Disponibility newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Disponibility[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Disponibility get($primaryKey, $options = [])
 * @method \App\Model\Entity\Disponibility findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Disponibility patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Disponibility[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Disponibility|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disponibility saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disponibility[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disponibility[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disponibility[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disponibility[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DisponibilitiesTable extends Table
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

        $this->setTable('disponibilities');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Teachers', [
            'foreignKey' => 'teacher_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Hours', [
            'foreignKey' => 'hour_id',
            'joinType' => 'INNER',
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
            ->integer('teacher_id')
            ->notEmptyString('teacher_id');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

        $validator
            ->integer('hour_id')
            ->notEmptyString('hour_id');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

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
        $rules->add($rules->existsIn('hour_id', 'Hours'), ['errorField' => 'hour_id']);

        return $rules;
    }
}
