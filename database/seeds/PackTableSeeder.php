<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Pack;

class PackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $singleTripPack = new Pack();
            $singleTripPack->name = $faker->word;
            $singleTripPack->location = $faker->city;
            $singleTripPack->duration = $faker->randomFloat($nbMaxDecimal = 0, $min = 0, $max = 20);
            $singleTripPack->period = $faker->monthName();
            $singleTripPack->price = $faker->numberBetween($min = 30, $max = 5000);
            $singleTripPack->save();
        }
    }
}
