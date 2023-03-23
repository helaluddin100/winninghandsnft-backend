<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'super admin',
            'slug' => 'super-admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'Developer',
            'slug' => 'developer',
        ]);
        DB::table('roles')->insert([
            'name' => 'Designer',
            'slug' => 'designer',
        ]);
        DB::table('roles')->insert([
            'name' => 'Editor',
            'slug' => 'editor',
        ]);
        DB::table('roles')->insert([
            'name' => 'Block user',
            'slug' => 'block',
        ]);
    }
}
