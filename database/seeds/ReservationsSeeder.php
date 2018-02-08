<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Reservation;
use App\User;

class ReservationsSeeder extends Seeder
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

    foreach(range(1,60) as $x) {

      $reservations = new Reservation;
      $reservations->name = $faker->name;
      $reservations->phone = $faker->randomNumber;

      //$reservations->users_id = $reservations->users->id; // turi daug ju
      $reservations->users_id = 1;
      $reservations->date = $faker->dateTime();
      $reservations->people_amount = $faker->numberBetween(1,6);
      $reservations->created_at = $faker->dateTime();
      $reservations->user = $faker->name;
      $reservations->save();
      // sudo dpkg -i virtualboxo failas

    }
  }
}
