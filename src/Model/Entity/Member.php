<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property int $id
 * @property string|null $member_name
 * @property int|null $ic_number
 * @property int|null $phone_number
 *
 * @property \App\Model\Entity\Issued[] $issued
 */
class Member extends Entity
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
        'member_name' => true,
        'ic_number' => true,
        'phone_number' => true,
        'issued' => true,
    ];
}
