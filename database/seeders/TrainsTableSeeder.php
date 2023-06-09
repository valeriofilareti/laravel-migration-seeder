<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->agency = $faker->word();
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->departure_time = $faker->word();
            $train->arrival_time = $faker->word();
            $train->carriages = $faker->word();
            $train->is_in_time = $faker->word();
            $train->is_cancelled = $faker->word();

            $train->save();

        }
    }
}
