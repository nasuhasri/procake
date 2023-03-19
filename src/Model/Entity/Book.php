<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property int|null $isbn
 * @property string|null $book_title
 * @property string|null $book_type
 * @property string|null $author_name
 * @property int|null $quantity
 * @property \Cake\I18n\FrozenTime|null $date_purchased
 * @property int|null $price
 * @property string|null $publisher
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Book extends Entity
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
        'isbn' => true,
        'book_title' => true,
        'book_type' => true,
        'author_name' => true,
        'quantity' => true,
        'date_purchased' => true,
        'price' => true,
        'publisher' => true,
        'created' => true,
        'modified' => true,
    ];
}
