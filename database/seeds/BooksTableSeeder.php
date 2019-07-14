<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
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

            DB::table('books')->insert([
                'id_book' => $i,
                'book_title' => $faker->name,
                'author' => $faker->name,
                'publisher' => $faker->company,
                'description' => $faker->text($maxNbChars = 200) ,
            ]);
        }
    }
}
