<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Periods Model
 *
 * @property \App\Model\Table\ClassesTable&\Cake\ORM\Association\HasMany $Classes
 *
 * @method \App\Model\Entity\Period newEmptyEntity()
 * @method \App\Model\Entity\Period newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Period[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Period get($primaryKey, $options = [])
 * @method \App\Model\Entity\Period findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Period patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Period[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Period|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Period saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Period[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Period[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Period[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Period[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PeriodsTable extends Table
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

        $this->setTable('periods');
        $this->setDisplayField('semester');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Classes', [
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
            ->integer('period')
            ->allowEmptyString('period');

        $validator
            ->integer('bimester')
            ->allowEmptyString('bimester');

        $validator
            ->integer('semester')
            ->allowEmptyString('semester');

        $validator
            ->scalar('year')
            ->allowEmptyString('year');

        return $validator;
    }
}
