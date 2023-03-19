<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BooksFixture
 */
class BooksFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'isbn' => 1,
                'book_title' => 'Lorem ipsum dolor sit amet',
                'book_type' => 'Lorem ipsum dolor sit amet',
                'author_name' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
                'date_purchased' => '2023-03-15 02:49:11',
                'price' => 1,
                'publisher' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-15 02:49:11',
                'modified' => '2023-03-15 02:49:11',
            ],
        ];
        parent::init();
    }
}
