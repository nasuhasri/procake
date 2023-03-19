<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MagazinesFixture
 */
class MagazinesFixture extends TestFixture
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
                'mag_name' => 'Lorem ipsum dolor sit amet',
                'mag_type' => 'Lorem ipsum dolor sit amet',
                'date_receipt' => '2023-03-16 02:37:10',
                'pages' => 1,
                'price' => 1,
                'publisher' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-16 02:37:10',
                'modified' => '2023-03-16 02:37:10',
            ],
        ];
        parent::init();
    }
}
