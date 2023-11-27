<pre>
@php

    $data = array(
array(1, 'Master Point Transfer', 'master_point_transfer', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(2, 'Point Transfer', 'point_transfer', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(3, 'Point Assign', 'point_assign', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(4, 'Point Reload', 'point_reload', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(5, 'BD Top up', 'top_up', 'ACTIVE', 0, 1, 26, NULL, '2020-08-28 15:48:48', '2020-11-30 11:38:04'),
array(6, 'Money Transfer', 'money_transfer', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(7, 'BD MB Reload', 'bd_mb_reload', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(8, 'International Top up', 'international_top_up', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(9, 'Singapore Top up', 'singapore_top_up', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(10, 'Wallet Transfer', 'wallet_transfer', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(11, 'E-Reload Transfer', 'e_reload_transfer', 'ACTIVE', 0, 1, 0, NULL, '2020-08-28 15:48:48', '2020-08-28 15:48:48'),
array(12, 'Malaysia Top Up', 'malaysia_top_up', 'ACTIVE', 0, 6, 0, NULL, '2020-12-10 16:47:25', '2020-12-10 16:47:25'),
array(13, 'Nium Transfer', 'nium_transfer', 'ACTIVE', 0, 6, 0, NULL, '2021-03-02 07:29:59', '2021-03-02 07:29:59'),
array(14, 'Manual Refund', 'manual_refund', 'ACTIVE', 0, 6, 0, NULL, '2021-03-02 07:30:14', '2021-03-02 07:30:14'),
array(15, 'Malaysia Bill Payment', 'malaysia_bill_payment', 'ACTIVE', 0, 6, 0, NULL, '2021-03-18 10:05:41', '2021-03-18 10:05:41'),
array(16, 'Salary Advance', 'salary_advance', 'ACTIVE', 0, 15, 0, NULL, '2022-02-23 15:55:56', '2022-02-23 15:55:56'),
        );
    $d=[];

    foreach ($data as $index => $country) {
        $d[] = [
            'id' => $country[0],
            'name' => $country[1],
            'code' => $country[2],
            'enabled' => $country[3] == 'ACTIVE',
            'transaction_form_data' => [],
            ];
    }
    var_export($d);
@endphp
</pre>
