<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Issued Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $date_issue
 * @property \Cake\I18n\FrozenTime|null $date_return
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime|null $due_date
 * @property int|null $fine
 * @property string|null $fine_status
 * @property string|null $item_category
 * @property string|null $item_condition
 * @property string|null $item_comment
 * @property int|null $item_number
 * @property int|null $member_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Member $member
 */
class Issued extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'date_issue' => true,
        'date_return' => true,
        'status' => true,
        'due_date' => true,
        'fine' => true,
        'fine_status' => true,
        'item_category' => true,
        'item_condition' => true,
        'item_comment' => true,
        'item_number' => true,
        'member_id' => true,
        'created' => true,
        'modified' => true,
        'member' => true,
    ];
}
