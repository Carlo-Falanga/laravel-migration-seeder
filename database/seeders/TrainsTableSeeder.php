<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 20; $i++){

            $departure = $faker->dateTimeBetween('now', '+1 week');
            $arrival = $faker->dateTimeBetween($departure, '+1 week');

            $newTrain = new Train();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $departure;
            $newTrain->arrival_time = $arrival;
            $newTrain->train_code = strtoupper($faker->bothify('??###'));
            $newTrain->total_carriages = $faker->numberBetween(4, 16);
            $newTrain->on_time = $faker->boolean(80);
            $newTrain->cancelled = $faker->boolean(10);

            $newTrain->save();

        }
    }
}
