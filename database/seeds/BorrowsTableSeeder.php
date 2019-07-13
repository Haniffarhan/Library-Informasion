<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BorrowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $i) {

            DB::table('borrows')->insert([
                'id_borrow' => $i,
                'id_book' => $i,
                'id_user' => $i,
                'borrow_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'return_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);
        }
    }
}
