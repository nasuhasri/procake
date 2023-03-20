<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Newspapers Model
 *
 * @method \App\Model\Entity\Newspaper newEmptyEntity()
 * @method \App\Model\Entity\Newspaper newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Newspaper[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Newspaper get($primaryKey, $options = [])
 * @method \App\Model\Entity\Newspaper findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Newspaper patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Newspaper[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Newspaper|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newspaper saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newspaper[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newspaper[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newspaper[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newspaper[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NewspapersTable extends Table
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

        $this->setTable('newspapers');
        $this->setDisplayField('news_name');
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
            ->scalar('news_name')
            ->maxLength('news_name', 255)
            ->allowEmptyString('news_name');

        $validator
            ->scalar('news_lang')
            ->maxLength('news_lang', 255)
            ->allowEmptyString('news_lang');

        $validator
            ->dateTime('date_receipt')
            ->allowEmptyDateTime('date_receipt');

        $validator
            ->dateTime('date_published')
            ->allowEmptyDateTime('date_published');

        $validator
            ->integer('pages')
            ->allowEmptyString('pages');

        $validator
            ->integer('price')
            ->allowEmptyString('price');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->allowEmptyString('type');

        $validator
            ->scalar('publisher')
            ->maxLength('publisher', 255)
            ->allowEmptyString('publisher');

        return $validator;
    }
}
