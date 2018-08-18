<?php

use Illuminate\Database\Seeder;

class UserTableSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 'admin', 1)->create();
    }
}
