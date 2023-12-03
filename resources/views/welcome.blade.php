@php
$data1 = [
    'service_id' => 1,
    'source_country_id' => 1,
    'destination_country_id' => 19,
    'amount' => 1000,
    'reverse' => false
];

dump(\Fintech\Business\Facades\Business::currencyRate()->convert($data1));

$data2 = [
    'service_id' => 1,
    'source_country_id' => 1,
    'destination_country_id' => 19,
    'amount' => 1000,
    'reverse' => true,
    'get_only_rate' => true
];

dd(\Fintech\Business\Facades\Business::currencyRate()->convert($data2));
@endphp
