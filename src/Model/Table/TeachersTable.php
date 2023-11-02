<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teachers Model
 *
 * @property \App\Model\Table\DisciplinesTable&\Cake\ORM\Association\BelongsTo $Disciplines
 * @property \App\Model\Table\DisciplinesTable&\Cake\ORM\Association\HasMany $Disciplines
 * @property \App\Model\Table\DisponibilitiesTable&\Cake\ORM\Association\HasMany $Disponibilities
 * @property \App\Model\Table\TurmasTable&\Cake\ORM\Association\HasMany $Turmas
 *
 * @method \App\Model\Entity\Teacher newEmptyEntity()
 * @method \App\Model\Entity\Teacher newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Teacher[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Teacher get($primaryKey, $options = [])
 * @method \App\Model\Entity\Teacher findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Teacher patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Teacher[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Teacher|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Teacher saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Teacher[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Teacher[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Teacher[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Teacher[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TeachersTable extends Table
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

        $this->setTable('teachers');
        $this->setDisplayField('first_name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Disciplines', [
            'foreignKey' => 'discipline_id',
        ]);
        $this->hasMany('Disciplines', [
            'foreignKey' => 'teacher_id',
        ]);
        $this->hasMany('Disponibilities', [
            'foreignKey' => 'teacher_id',
        ]);
        $this->hasMany('TeacherDisciplines', [
            'foreignKey' => 'teacher_id',
        ]);
        $this->hasMany('TeacherDisponibilities', [
            'foreignKey' => 'teacher_id',
        ]);
        $this->hasMany('Turmas', [
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
            ->scalar('qrcode')
            ->allowEmptyString('qrcode');

        $validator
            ->scalar('hash')
            ->maxLength('hash', 255)
            ->allowEmptyString('hash');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->scalar('acronym')
            ->maxLength('acronym', 10)
            ->allowEmptyString('acronym');

        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('discipline_id')
            ->allowEmptyString('discipline_id');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('title')
            ->maxLength('title', 100)
            ->allowEmptyString('title');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 14)
            ->allowEmptyString('phone');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('discipline_id', 'Disciplines'), ['errorField' => 'discipline_id']);

        return $rules;
    }
}
