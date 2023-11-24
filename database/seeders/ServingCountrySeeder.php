<?php

namespace Database\Seeders;

use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Seeder;

class ServingCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws UpdateOperationException
     */
    public function run(): void
    {
        $countries = [1, 19, 39, 101, 132, 133, 167, 192, 231];

        foreach ($countries as $countryId) {

            $country = MetaData::country()->find($countryId);

            if (!$country) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.country_model'), $countryId);
            }

            $countryData = $country->country_data;

            $countryData['is_serving'] = true;

            if (!MetaData::country()->update($countryId, ['country_data' => $countryData])) {
                throw (new UpdateOperationException())->setModel(config('fintech.metadata.country_model'), $countryId);
            }
        }
    }
}
