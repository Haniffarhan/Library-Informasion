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
                'borrow_date_day' => $faker->numberBetween(1, 31),
                'borrow_date_month' => $faker->numberBetween(1, 12),
                'borrow_date_year' => $faker->numberBetween(1980, 2019),
                'return_date_day' => $faker->numberBetween(1, 31),
                'return_date_month' => $faker->numberBetween(1, 12),
                'return_date_year' => $faker->numberBetween(1980, 2019),
            ]);
        }
    }
}
