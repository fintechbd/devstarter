<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(\Fintech\Auth\Seeders\PermissionSeeder::class);
        $this->call(\Fintech\Auth\Seeders\RoleSeeder::class);
        $this->call(\Fintech\MetaData\Seeders\RegionSeeder::class);
        $this->call(\Fintech\MetaData\Seeders\SubRegionSeeder::class);

        //N.B: Role and Permission seed must load before country and user seed
        $this->call(\Fintech\MetaData\Seeders\CountrySeeder::class);
        $this->stateSeeders();
        $this->citySeeders();

        $this->call(\Fintech\Auth\Seeders\IdDocTypeSeeder::class);
        $this->call(\Fintech\Auth\Seeders\UserSeeder::class);
        $this->call(\Fintech\MetaData\Seeders\FundSourceSeeder::class);
        $this->call(\Fintech\MetaData\Seeders\RelationSeeder::class);
        $this->call(\Fintech\MetaData\Seeders\OccupationSeeder::class);
        $this->call(\Fintech\MetaData\Seeders\RemittancePurposeSeeder::class);
        $this->call(\Fintech\MetaData\Seeders\BloodGroupSeeder::class);
        $this->call(\Fintech\MetaData\Seeders\GenderSeeder::class);
        $this->call(\Fintech\MetaData\Seeders\MaritalStatusSeeder::class);
        $this->call(\Fintech\Core\Seeders\SettingSeeder::class);
        $this->call(\Fintech\Banco\Seeders\BeneficiaryTypeSeeder::class);
        $this->call(\Fintech\Banco\Seeders\BankSeeder::class);
        $this->branchSeeder();
        $this->call(\Fintech\Business\Seeders\ServiceSettingSeeder::class);
//        $this->call(\Fintech\Business\Seeders\ServiceTypeSeeder::class);
        $this->call(\Fintech\Transaction\Seeders\ChartClassSeeder::class);
        $this->call(\Fintech\Reload\Seeders\DepositSeeder::class);
        $this->call(ServingCountrySeeder::class);
        $this->call(\Fintech\Transaction\Seeders\TransactionFormSeeder::class);
        $this->call(\Fintech\Remit\Seeders\BankTransferSeeder::class);
        $this->call(\Fintech\Business\Seeders\CurrencyRateSeeder::class);
        $this->call(\Fintech\Airtime\Seeders\AirtimeSeeder::class);
        $this->call(\Fintech\Airtime\Seeders\BangladeshTopUpSeeder::class);
        $this->call(\Fintech\Airtime\Seeders\InternationalTopUpSeeder::class);
    }

    private function stateSeeders()
    {
        $this->call([
            \Fintech\MetaData\Seeders\States\State1Seeder::class,
            \Fintech\MetaData\Seeders\States\State2Seeder::class,
            \Fintech\MetaData\Seeders\States\State3Seeder::class,
            \Fintech\MetaData\Seeders\States\State4Seeder::class
        ]);
    }

    private function citySeeders()
    {
        $this->call([
            \Fintech\MetaData\Seeders\Cities\City1Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City2Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City3Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City4Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City5Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City6Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City7Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City8Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City9Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City10Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City11Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City12Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City13Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City14Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City15Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City16Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City17Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City18Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City19Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City20Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City21Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City22Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City23Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City24Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City25Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City26Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City27Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City28Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City29Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City30Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City31Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City32Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City33Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City34Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City35Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City36Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City37Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City38Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City39Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City40Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City41Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City42Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City43Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City44Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City45Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City46Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City47Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City48Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City49Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City50Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City51Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City52Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City53Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City54Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City55Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City56Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City57Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City58Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City59Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City60Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City61Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City62Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City63Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City64Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City65Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City66Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City67Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City68Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City69Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City70Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City71Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City72Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City73Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City74Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City75Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City76Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City77Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City78Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City79Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City80Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City81Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City82Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City83Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City84Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City85Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City86Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City87Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City88Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City89Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City90Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City91Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City92Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City93Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City94Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City95Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City96Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City97Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City98Seeder::class,
            \Fintech\MetaData\Seeders\Cities\City99Seeder::class
        ]);
    }

    private function branchSeeder()
    {

        $this->call([
            \Fintech\Banco\Seeders\Branches\Branch1Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch2Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch3Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch4Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch5Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch6Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch7Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch8Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch9Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch10Seeder::class,
            \Fintech\Banco\Seeders\Branches\Branch11Seeder::class
        ]);
    }
}
