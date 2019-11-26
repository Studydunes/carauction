<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bids Model
 *
 * @property \App\Model\Table\CarsTable&\Cake\ORM\Association\BelongsTo $Cars
 * @property \App\Model\Table\BuyersTable&\Cake\ORM\Association\BelongsTo $Buyers
 *
 * @method \App\Model\Entity\Bid get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bid newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bid[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bid|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bid saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bid patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bid[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bid findOrCreate($search, callable $callback = null, $options = [])
 */
class BidsTable extends Table
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

        $this->setTable('bids');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cars', [
                'className' => 'chatss.Cars'
            ])
            ->setForeignKey('car_id');

        $this->belongsTo('Buyers', [
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
            ->integer('amount')
            ->allowEmptyString('amount');

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
        $rules->add($rules->existsIn(['car_id'], 'Cars'));
        $rules->add($rules->existsIn(['buyer_id'], 'Buyers'));

        return $rules;
    }
}
