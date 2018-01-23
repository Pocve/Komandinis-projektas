<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Dish;

class DishSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $faker->name();

      foreach(range(1,10) as $x) {
        $dish = new Dish;
        $dish->title = $faker->name;
        $dish->price = $faker->randomNumber(3);
        $dish->description = $faker->text(50);
        $dish->save();
      }
    }
}
