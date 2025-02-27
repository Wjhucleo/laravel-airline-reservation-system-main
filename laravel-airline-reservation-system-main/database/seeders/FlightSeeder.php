<?php

namespace Database\Seeders;

use App\Models\Airline;
use App\Models\City;
use App\Models\Flight;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $airlines = Airline::query()
            ->with('planes');

        $flightsPerPlane = 150; // Number of flights to generate per plane

        foreach ($airlines->cursor() as $airline) {
            foreach ($airline->planes as $plane) {
                for ($i = 0; $i < $flightsPerPlane; $i++) {
                    $departure = $faker->dateTimeBetween('now', '+2 days');
                    $arrival = $faker->dateTimeBetween($departure, '+2 days');
                    Flight::query()->create([
                        "flight_number" => $faker->unique()->numberBetween(1000,9999),
                        'airline_id' => $airline->id,
                        'plane_id' => $plane->id,
                        "origin_id" => City::query()->inRandomOrder()->first()->id,
                        "destination_id" => City::query()->inRandomOrder()->first()->id,
                        "departure" => $departure,
                        "arrival" => $arrival,
                        "seats" => $plane->capacity,
                        "remain_seats" => rand(1, $plane->capacity),
                        "price" => rand(100, 1000),
                        'status' => $faker->boolean(),
                    ]);
                }
            }
        }
    }
}
