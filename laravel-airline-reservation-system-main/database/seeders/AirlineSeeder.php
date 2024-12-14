<?php

namespace Database\Seeders;

use App\Models\Airline;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    public function run()
    {
        $airlines = [
            ['name' => 'Royal Air Maroc', 'code' => 'RAM', 'logo' => 'Royal-Air-Maroc-logo.jpg'],
            ['name' => 'Easyjet', 'code' => 'ESJ', 'logo' => 'EasyJet-Logo.jpg'],
        ];

        foreach ($airlines as $item) {
            $airline = Airline::create([
                'name' => $item['name'],
                'code' => $item['code'],
            ]);

            $path = "/assets/images/Airline logos/" . $item['logo'];
            $airline->addMedia(public_path() . $path)->preservingOriginal()->usingName($airline->name)->toMediaCollection();

            // PlaneSeeder
            $planes = [];
            foreach (range(1, rand(5, 10)) as $key => $value) {  // Increase the range to generate more planes
                $planes[] = [
                    'name' => "Boeing 737-" . rand(100, 900),
                    'code' => "B" . rand(730, 739),
                    'capacity' => rand(150, 200),
                ];
            }

            $airline->planes()->createMany($planes);
        }
    }
}

