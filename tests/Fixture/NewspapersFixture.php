<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NewspapersFixture
 */
class NewspapersFixture extends TestFixture
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
                'news_name' => 'Lorem ipsum dolor sit amet',
                'news_lang' => 'Lorem ipsum dolor sit amet',
                'date_receipt' => '2023-03-16 07:45:52',
                'date_published' => '2023-03-16 07:45:52',
                'pages' => 1,
                'price' => 1,
                'type' => 'Lorem ipsum dolor sit amet',
                'publisher' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-16 07:45:52',
                'modified' => '2023-03-16 07:45:52',
            ],
        ];
        parent::init();
    }
}
