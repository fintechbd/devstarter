<?php

namespace Database\Seeders;

use Fintech\Auth\Seeders\PermissionSeeder;
use Fintech\Auth\Seeders\RoleSeeder;
use Fintech\Auth\Seeders\TeamSeeder;
use Fintech\Auth\Seeders\UserSeeder;
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
        $this->call(RegionSeeder::class);
        $this->call(SubRegionSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
//        $this->call(CitySeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
