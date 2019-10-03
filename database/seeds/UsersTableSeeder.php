<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name'=>'Admin',
            'role_id'=>'1',
            'username'=>'AdminUser',
            'email'=>'AdminUser@email.com',
            'password'=>bcrypt('AdminPass'),
        ]);
        DB::table('users')->insert([
            'name'=>'Author',
            'role_id'=>'2',
            'username'=>'AuthorUser',
            'email'=>'AuthorUser@email.com',
            'password'=>bcrypt('AuthorPass'),
        ]);
    }
}
