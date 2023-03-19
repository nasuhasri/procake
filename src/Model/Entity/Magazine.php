<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Magazine Entity
 *
 * @property int $id
 * @property string|null $mag_name
 * @property string|null $mag_type
 * @property \Cake\I18n\FrozenTime|null $date_receipt
 * @property int|null $pages
 * @property int|null $price
 * @property string|null $publisher
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Magazine extends Entity
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
        'mag_name' => true,
        'mag_type' => true,
        'date_receipt' => true,
        'pages' => true,
        'price' => true,
        'publisher' => true,
        'created' => true,
        'modified' => true,
    ];
}
