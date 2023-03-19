<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Magazines Model
 *
 * @method \App\Model\Entity\Magazine newEmptyEntity()
 * @method \App\Model\Entity\Magazine newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Magazine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Magazine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Magazine findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Magazine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Magazine[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Magazine|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Magazine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Magazine[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Magazine[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Magazine[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Magazine[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MagazinesTable extends Table
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

        $this->setTable('magazines');
        $this->setDisplayField('id');
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
            ->scalar('mag_name')
            ->maxLength('mag_name', 255)
            ->allowEmptyString('mag_name');

        $validator
            ->scalar('mag_type')
            ->maxLength('mag_type', 255)
            ->allowEmptyString('mag_type');

        $validator
            ->dateTime('date_receipt')
            ->allowEmptyDateTime('date_receipt');

        $validator
            ->integer('pages')
            ->allowEmptyString('pages');

        $validator
            ->integer('price')
            ->allowEmptyString('price');

        $validator
            ->scalar('publisher')
            ->maxLength('publisher', 255)
            ->allowEmptyString('publisher');

        return $validator;
    }
}
