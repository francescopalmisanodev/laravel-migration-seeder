<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\TravelPack;

class TravelPacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_pack = new TravelPack;
            $new_pack->destinations = $faker->city();
            $new_pack->description = $faker->paragraph();
            $new_pack->price = $faker->randomFloat(2, 0, 9999999);

            $new_pack->save();
        }
    }
}
