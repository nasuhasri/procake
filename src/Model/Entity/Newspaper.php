<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Newspaper Entity
 *
 * @property int $id
 * @property string|null $news_name
 * @property string|null $news_lang
 * @property \Cake\I18n\FrozenTime|null $date_receipt
 * @property \Cake\I18n\FrozenTime|null $date_published
 * @property int|null $pages
 * @property int|null $price
 * @property string|null $type
 * @property string|null $publisher
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Newspaper extends Entity
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
        'news_name' => true,
        'news_lang' => true,
        'date_receipt' => true,
        'date_published' => true,
        'pages' => true,
        'price' => true,
        'type' => true,
        'publisher' => true,
        'created' => true,
        'modified' => true,
    ];
}
