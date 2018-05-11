<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialAccounts Model
 *
 * @property \CakeDC\Users\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\SocialAccount get($primaryKey, $options = [])
 * @method \App\Model\Entity\SocialAccount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SocialAccount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialAccount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialAccount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SocialAccount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialAccount findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SocialAccountsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('social_accounts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('provider')
            ->maxLength('provider', 255)
            ->requirePresence('provider', 'create')
            ->notEmpty('provider');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->allowEmpty('username');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 255)
            ->requirePresence('reference', 'create')
            ->notEmpty('reference');

        $validator
            ->scalar('avatar')
            ->maxLength('avatar', 255)
            ->allowEmpty('avatar');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('link')
            ->maxLength('link', 255)
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        $validator
            ->scalar('token')
            ->maxLength('token', 500)
            ->requirePresence('token', 'create')
            ->notEmpty('token');

        $validator
            ->scalar('token_secret')
            ->maxLength('token_secret', 500)
            ->allowEmpty('token_secret');

        $validator
            ->dateTime('token_expires')
            ->allowEmpty('token_expires');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->scalar('data')
            ->requirePresence('data', 'create')
            ->notEmpty('data');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
