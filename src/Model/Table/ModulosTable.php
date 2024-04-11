<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Modulos Model
 *
 * @property \App\Model\Table\MenusTable&\Cake\ORM\Association\HasMany $Menus
 *
 * @method \App\Model\Entity\Modulo newEmptyEntity()
 * @method \App\Model\Entity\Modulo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Modulo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Modulo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Modulo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Modulo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Modulo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Modulo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Modulo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Modulo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Modulo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Modulo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Modulo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ModulosTable extends Table
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

        $this->setTable('modulos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Menus', [
            'foreignKey' => 'modulo_id',
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
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmptyString('active');

        $validator
            ->scalar('icon')
            ->maxLength('icon', 255)
            ->requirePresence('icon', 'create')
            ->notEmptyString('icon');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmptyString('url');

        $validator
            ->scalar('order')
            ->maxLength('order', 3)
            ->allowEmptyString('order');

        return $validator;
    }
}
