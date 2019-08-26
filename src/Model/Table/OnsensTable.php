<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Onsens Model
 *
 * @method \App\Model\Entity\Onsen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Onsen newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Onsen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Onsen|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Onsen saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Onsen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Onsen[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Onsen findOrCreate($search, callable $callback = null, $options = [])
 */
class OnsensTable extends Table
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

        $this->setTable('onsens');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->maxLength('name', 1000)
            ->allowEmptyString('name');

        $validator
            ->scalar('map')
            ->maxLength('map', 1000)
            ->allowEmptyString('map');

        $validator
            ->integer('picint')
            ->allowEmptyString('picint');

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 10)
            ->allowEmptyString('prefecture');

        $validator
            ->integer('prefectureint')
            ->allowEmptyString('prefectureint');

        $validator
            ->scalar('adress')
            ->maxLength('adress', 1000)
            ->allowEmptyString('adress');

        $validator
            ->scalar('eat')
            ->maxLength('eat', 10)
            ->allowEmptyString('eat');

        $validator
            ->scalar('sauna')
            ->maxLength('sauna', 10)
            ->allowEmptyString('sauna');

        $validator
            ->scalar('towel')
            ->maxLength('towel', 10)
            ->allowEmptyString('towel');

        $validator
            ->scalar('towel_text')
            ->maxLength('towel_text', 50)
            ->allowEmptyString('towel_text');

        $validator
            ->scalar('hot_stone')
            ->maxLength('hot_stone', 10)
            ->allowEmptyString('hot_stone');

        $validator
            ->scalar('open_bath')
            ->maxLength('open_bath', 10)
            ->allowEmptyString('open_bath');

        $validator
            ->time('time_opne')
            ->allowEmptyTime('time_opne');

        $validator
            ->time('time_close')
            ->allowEmptyTime('time_close');

        $validator
            ->time('w_time_opne')
            ->allowEmptyTime('w_time_opne');

        $validator
            ->time('w_time_close')
            ->allowEmptyTime('w_time_close');

        $validator
            ->time('h_time_opne')
            ->allowEmptyTime('h_time_opne');

        $validator
            ->time('h_time_close')
            ->allowEmptyTime('h_time_close');

        $validator
            ->scalar('w_a_fee')
            ->maxLength('w_a_fee', 10)
            ->allowEmptyString('w_a_fee');

        $validator
            ->scalar('w_c_fee')
            ->maxLength('w_c_fee', 10)
            ->allowEmptyString('w_c_fee');

        $validator
            ->scalar('h_a_fee')
            ->maxLength('h_a_fee', 10)
            ->allowEmptyString('h_a_fee');

        $validator
            ->scalar('h_c_fee')
            ->maxLength('h_c_fee', 10)
            ->allowEmptyString('h_c_fee');

        $validator
            ->scalar('close_text')
            ->maxLength('close_text', 50)
            ->allowEmptyString('close_text');

        $validator
            ->scalar('close')
            ->maxLength('close', 10)
            ->allowEmptyString('close');

        $validator
            ->scalar('jaf_url')
            ->maxLength('jaf_url', 1000)
            ->allowEmptyString('jaf_url');

        $validator
            ->scalar('nifty_url')
            ->maxLength('nifty_url', 1000)
            ->allowEmptyString('nifty_url');

        $validator
            ->scalar('onsen_url')
            ->maxLength('onsen_url', 1000)
            ->allowEmptyString('onsen_url');

        $validator
            ->scalar('blog_url')
            ->maxLength('blog_url', 1000)
            ->allowEmptyString('blog_url');

        return $validator;
    }
}
