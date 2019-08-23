<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Jesus Fco',
            'email' => 'jfcr@live.com',
            'password' => bcrypt('secret'),
            'patern' => 'Rodriguez',
            'matern' => '',
            'gender' => 1,
            'phone' => 9611221222,
            'active' => true,                    
            'user_type' => 10,
        ]);
    }
}
