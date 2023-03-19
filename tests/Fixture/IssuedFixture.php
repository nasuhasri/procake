<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IssuedFixture
 */
class IssuedFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'issued';
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
                'date_issue' => '2023-03-17 04:10:19',
                'date_return' => '2023-03-17 04:10:19',
                'status' => 'Lorem ipsum dolor sit amet',
                'due_date' => '2023-03-17 04:10:19',
                'fine' => 1,
                'fine_status' => 'Lorem ipsum dolor sit amet',
                'item_category' => 'Lorem ipsum dolor sit amet',
                'item_condition' => 'Lorem ipsum dolor sit amet',
                'item_comment' => 'Lorem ipsum dolor sit amet',
                'item_number' => 1,
                'member_id' => 1,
                'created' => '2023-03-17 04:10:19',
                'modified' => '2023-03-17 04:10:19',
            ],
        ];
        parent::init();
    }
}
