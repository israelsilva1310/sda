<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hours Model
 *
 * @property \App\Model\Table\DisponibilityesTable&\Cake\ORM\Association\HasMany $Disponibilityes
 *
 * @method \App\Model\Entity\Hour newEmptyEntity()
 * @method \App\Model\Entity\Hour newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Hour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hour findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Hour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hour[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hour|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hour saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hour[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hour[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hour[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hour[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HoursTable extends Table
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

        $this->setTable('hours');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Disponibilityes', [
            'foreignKey' => 'hour_id',
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
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->scalar('period')
            ->maxLength('period', 255)
            ->allowEmptyString('period');

        $validator
            ->time('hour_initial')
            ->allowEmptyTime('hour_initial');

        $validator
            ->time('hour_final')
            ->allowEmptyTime('hour_final');

        $validator
            ->scalar('week')
            ->maxLength('week', 20)
            ->allowEmptyString('week');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        return $validator;
    }
}
