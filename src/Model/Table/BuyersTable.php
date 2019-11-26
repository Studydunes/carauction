<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Buyers Model
 *
 * @property \App\Model\Table\BidsTable&\Cake\ORM\Association\HasMany $Bids
 *
 * @method \App\Model\Entity\Buyer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Buyer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Buyer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Buyer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Buyer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Buyer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Buyer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Buyer findOrCreate($search, callable $callback = null, $options = [])
 */
class BuyersTable extends Table
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

        $this->setTable('buyers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Bids', [
            'foreignKey' => 'buyer_id'
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('gmail')
            ->maxLength('gmail', 255)
            ->allowEmptyString('gmail');

        $validator
            ->integer('phone')
            ->allowEmptyString('phone');

        return $validator;
    }
}
