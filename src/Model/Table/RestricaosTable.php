<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Restricaos Model
 *
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\BelongsTo $Teachers
 *
 * @method \App\Model\Entity\Restricao newEmptyEntity()
 * @method \App\Model\Entity\Restricao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Restricao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Restricao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Restricao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Restricao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Restricao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Restricao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Restricao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Restricao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Restricao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Restricao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Restricao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RestricaosTable extends Table
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

        $this->setTable('restricaos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Teachers', [
            'foreignKey' => 'teacher_id',
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
            ->scalar('tipo')
            ->maxLength('tipo', 255)
            ->allowEmptyString('tipo');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        $validator
            ->integer('teacher_id')
            ->allowEmptyString('teacher_id');

        $validator
            ->scalar('dia_semana')
            ->maxLength('dia_semana', 30)
            ->allowEmptyString('dia_semana');

        $validator
            ->time('hora')
            ->allowEmptyTime('hora');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

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

        return $rules;
    }
}
