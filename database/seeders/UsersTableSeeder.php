<?php

namespace Database\Seeders;

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
    //    ===============super admin============
        DB::table('users')->insert([
            'name' => 'super admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => '1',
            'country' => 'Bangladesh',
            'phone' => '0123456789',
            'profation' => 'super admin',

        ]);

        //    ===============Developer============
        DB::table('users')->insert([
            'name' => 'Helal Uddin',
            'email' => 'developer@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => '2',
            'country' => 'Bangladesh',
            'phone' => '0123456789',
            'profation' => 'Developer',

        ]);
        //    ===============Designer============
        DB::table('users')->insert([
            'name' => 'Designer',
            'email' => 'designer@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => '3',
            'country' => 'Bangladesh',
            'phone' => '0123456789',
            'profation' => 'Designer',
        ]);
        //    ===============Eidtor============
        DB::table('users')->insert([
            'name' => 'Aisha',
            'email' => 'aisha@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => '4',
            'country' => 'Pakisthan',
            'phone' => '0123456789',
            'profation' => 'Editor',
        ]);


        //    ===============Eidtor============
        DB::table('users')->insert([
            'name' => 'Block',
            'email' => 'block@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => '5',
            'country' => 'Bangladesh',
            'phone' => '0123456789',
            'profation' => 'block',
        ]);

         

    }
}