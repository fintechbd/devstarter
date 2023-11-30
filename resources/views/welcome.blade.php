<pre>
@php

$deposit =\Reload::deposit()->find(1);

        $orderDetailEntry = \Transaction::orderDetail()->list([
            'get_order_detail_amount_sum' => true,
            'user_id' => $deposit->user_id,
            'order_detail_currency' => $deposit->currency,
            ]);

        dd($orderDetailEntry);
@endphp
</pre>
