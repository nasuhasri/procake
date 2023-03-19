<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class UserAddAdmin extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up(): void
    {
        $data = [
            [
                'member_name' => 'Nasuha',
                'ic_number' => '000222112342',
                'phone_number' => '0987'
            ],
            [
                'member_name' => 'Nur',
                'ic_number' => '000222112342',
                'phone_number' => '0987'
            ]
        ];

        $this->table('members')->insert($data)->save();
    }
}
