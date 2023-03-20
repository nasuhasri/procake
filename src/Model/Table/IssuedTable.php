<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Issued Model
 *
 * @property \App\Model\Table\MembersTable&\Cake\ORM\Association\BelongsTo $Members
 *
 * @method \App\Model\Entity\Issued newEmptyEntity()
 * @method \App\Model\Entity\Issued newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Issued[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Issued get($primaryKey, $options = [])
 * @method \App\Model\Entity\Issued findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Issued patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Issued[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Issued|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Issued saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IssuedTable extends Table
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

        $this->setTable('issued');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Members', [
            'foreignKey' => 'member_id',
        ]);

        $this->belongsTo('Books', [
            'foreignKey' => 'item_number',
            // tell cake that all issue with category books are belong to books table
            'conditions' => ['item_category' => 'books']
        ]);

        $this->belongsTo('Magazines', [
            'foreignKey' => 'item_number',
            'conditions' => ['item_category' => 'magazines']
        ]);

        $this->belongsTo('Newspapers', [
            'foreignKey' => 'item_number',
            'conditions' => ['item_category' => 'newspapers'],
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
            ->dateTime('date_issue')
            ->allowEmptyDateTime('date_issue');

        $validator
            ->dateTime('date_return')
            ->allowEmptyDateTime('date_return');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        $validator
            ->dateTime('due_date')
            ->allowEmptyDateTime('due_date');

        $validator
            ->integer('fine')
            ->allowEmptyString('fine');

        $validator
            ->scalar('fine_status')
            ->maxLength('fine_status', 255)
            ->allowEmptyString('fine_status');

        $validator
            ->scalar('item_category')
            ->maxLength('item_category', 255)
            ->allowEmptyString('item_category');

        $validator
            ->scalar('item_condition')
            ->maxLength('item_condition', 255)
            ->allowEmptyString('item_condition');

        $validator
            ->scalar('item_comment')
            ->maxLength('item_comment', 255)
            ->allowEmptyString('item_comment');

        $validator
            ->integer('item_number')
            ->allowEmptyString('item_number');

        $validator
            ->integer('member_id')
            ->allowEmptyString('member_id');

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
        $rules->add($rules->existsIn('member_id', 'Members'), ['errorField' => 'member_id']);

        return $rules;
    }
}
