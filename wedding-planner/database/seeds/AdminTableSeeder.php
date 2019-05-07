<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('password'),
            'type' => ('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('password'),
            'type' => ('admin'),
        ]);
    }
}
