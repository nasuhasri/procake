<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MembersFixture
 */
class MembersFixture extends TestFixture
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
                'member_name' => 'Lorem ipsum dolor sit amet',
                'ic_number' => 1,
                'phone_number' => 1,
            ],
        ];
        parent::init();
    }
}
