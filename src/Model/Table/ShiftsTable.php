<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shifts Model
 *
 * @method \App\Model\Entity\Shift newEmptyEntity()
 * @method \App\Model\Entity\Shift newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Shift[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shift get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shift findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Shift patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shift[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shift|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shift saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shift[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shift[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shift[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shift[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ShiftsTable extends Table
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

        $this->setTable('shifts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmptyString('name');

        $validator
            ->boolean('sunday')
            ->allowEmptyString('sunday');

        $validator
            ->boolean('monday')
            ->allowEmptyString('monday');

        $validator
            ->boolean('tuesday')
            ->allowEmptyString('tuesday');

        $validator
            ->boolean('wednesday')
            ->allowEmptyString('wednesday');

        $validator
            ->boolean('thursday')
            ->allowEmptyString('thursday');

        $validator
            ->boolean('friday')
            ->allowEmptyString('friday');

        $validator
            ->boolean('saturday')
            ->allowEmptyString('saturday');

        $validator
            ->integer('amount_lessions')
            ->allowEmptyString('amount_lessions');

        return $validator;
    }
}
