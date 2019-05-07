<?php

use Illuminate\Database\Seeder;

class CouplesTableSeeder extends Seeder
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
            'name' => 'couple1',
            'email' => 'couple1@email.com',
            'password' => bcrypt('password'),
            'type' => ('default'),
        ]);
        DB::table('users')->insert([
            'name' => 'couple2',
            'email' => 'couple2@email.com',
            'password' => bcrypt('password'),
            'type' => ('default'),
        ]);
    }
}
