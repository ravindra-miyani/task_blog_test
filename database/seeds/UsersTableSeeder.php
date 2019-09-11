<?php

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
        DB::table('users')->insert([
            'name' => 'Test1',
            'email' => 'test1@gmail.com',
            'agreed'=>1,
            'password' => bcrypt('123123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Test2',
            'email' => 'test2@gmail.com',
            'agreed'=>0,
            'password' => bcrypt('123123'),
        ]);
    }
}
