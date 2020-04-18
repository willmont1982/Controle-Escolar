<?php

use Domain\Employee\Employee;
use Domain\User\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = factory(Employee::class)->create([
            'name' => 'Adminstrador', ]
        );
        factory(User::class)->create([
            'username' => 'admin',
            'owner_type' => Employee::class,
            'owner_id' => $employee->id,
        ]
        );
    }
}
