<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
            'id_user' => '1',
            'name' => 'Admin',
            'gender' => 'Gender Admin',
            'born_place' => 'Born Place Admin',
            'born_date_day' => '1',
            'born_date_month' => '12',
            'born_date_year' => '1998',
            'address' => 'Jakarta',
            'email' => 'admin@example.com',
            'phone_number' => '085258369147',
            'id_role' => '1',
            'password' => bcrypt('admin123')
        ]);

        DB::table('users')->insert([
            'id_user' => '2',
            'name' => 'Head Staff',
            'gender' => 'Gender Head Staff',
            'born_place' => 'Born Place Head Staff',
            'born_date_day' => '1',
            'born_date_month' => '12',
            'born_date_year' => '1980',
            'address' => 'Jakarta',
            'email' => 'headstaff@example.com',
            'phone_number' => '085258369147',
            'id_role' => '2',
            'password' => bcrypt('headstaff')
        ]);

        DB::table('users')->insert([
            'id_user' => '3',
            'name' => 'User',
            'gender' => 'Gender User',
            'born_place' => 'Born Place User',
            'born_date_day' => '1',
            'born_date_month' => '12',
            'born_date_year' => '1980',
            'address' => 'Jakarta',
            'email' => 'user@example.com',
            'phone_number' => '085258369147',
            'id_role' => '3',
            'password' => bcrypt('user123')
        ]);

        $faker = Faker::create();

        foreach (range(4, 20) as $i) {

            DB::table('users')->insert([
                'id_user' => $i,
                'name' => $faker->name,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'born_place' => $faker->randomElement(['Jakarta', 'Hanoi', 'Kuala Lumpur', 'Singapore']),
                'born_date_day' => $faker->numberBetween(1, 31),
                'born_date_month' => $faker->numberBetween(1, 12),
                'born_date_year' => $faker->numberBetween(1980, 2019),
                'address' => $faker->address,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber ,
                'id_role' => $faker->numberBetween(1, 3),
                'password' => bcrypt('password'),
            ]);
        }
    }
}
