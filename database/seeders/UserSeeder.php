<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Administrator',
                'email' => 'admin@user.com',
                'password' => bcrypt('12345678'),
            ],
        ]);
    }
}
