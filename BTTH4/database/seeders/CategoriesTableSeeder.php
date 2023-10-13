<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i<10; $i++){
            DB::table(table: 'categories')->insert([
                'name' =>$faker->word(5,true),
                'description' =>$faker->sentence(10,true)
            ]);
        }
    }
}
