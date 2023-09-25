<?php

namespace Database\Seeders;

use Fintech\MetaData\Seeders\RegionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(RegionSeeder::class);
    }
}
