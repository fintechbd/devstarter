<?php

namespace Database\Seeders;

use Fintech\MetaData\Seeders\CitySeeder;
use Fintech\MetaData\Seeders\CountrySeeder;
use Fintech\MetaData\Seeders\RegionSeeder;
use Fintech\MetaData\Seeders\StateSeeder;
use Fintech\MetaData\Seeders\SubRegionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $this->call(RegionSeeder::class);
//        $this->call(SubRegionSeeder::class);
//        $this->call(CountrySeeder::class);
//        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
    }
}
