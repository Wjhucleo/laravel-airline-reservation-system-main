<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run()
    {
        $cities = [
            "Casablanca",
            "Rabat",
            "Fes",
            "Sale",
            "Marrakesh",
            "Agadir",
            "Meknes",
            "Oujda",
            "Moscow",
            "Dubai",
            "London",
            "Paris",
            "Frankfurt",
            "Milan",
            "Istanbul",
            "Jeddah",
            "Barcelona",
            "Naples",
            "Manchester",
            "Munich",
            "Lyon",
            "Liverpool",
            "Stockholm",
            "Tehran",
            "Vienna",
            "Valencia",
            "Lille",
            "Amsterdam",
            "Copenhagen",
            "Sulaimany",
            "Madina",
            "Larnaca",
            "Cairo",
            "Ankara",
            "Antalya",
            "Doha",
            "sharjah",
            "Tbilisi",
            "Batumi",
            "Adana",
            "Tunis",
            "Berlin",
            "Yerevan",
            "Adana",
            "Stuttgart",
            "Baku",
            "Diyarbakir",
            "Gaziantep",
            "Minsk",
            "Nasiriyah",
            "Istanbul",
            "Kiev",
            "Nuremberg",
            "Odessa",
            "Birmingham",
            "Amsterdam",
            "Rotterdam",
            "Cologne",
            "Trabzon",
            "Mugla",
            "Madrid",
            "Bucharest",
            "Prague",
            "Hanover",
            "Aleppo",
            "Urmia",
        ];

        foreach ($cities as $city) {
            City::create([
                'name' => $city,
            ]);
        }
    }
}
