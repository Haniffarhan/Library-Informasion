<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
        	'id_role' => '1',
        	'role_name' => 'Admin'
        ]);

        DB::table('role')->insert([
        	'id_role' => '2',
        	'role_name' => 'Head Staff'
        ]);

        DB::table('role')->insert([
        	'id_role' => '3',
        	'role_name' => 'User'
        ]);
    }
}
