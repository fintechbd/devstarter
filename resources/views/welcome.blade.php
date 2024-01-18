@php
$request = request();

$filters = [
                'user_id' => $request->input('user_id'),
                'created_at_start_date' => now()->subDays($request->input('duration'))->format('Y-m-d'),
                'created_at_end_date' => now()->format('Y-m-d'),
                'sum_converted_amount' => true,
                'order_type' => $request->input('type', 'transfer'),
                'paginate' => false,
                'sort' => 'orders.currency',
                'dir' => 'asc'
            ];
 $orderSum = \Fintech\Transaction\Facades\Transaction::order()->list($filters);

 dd($orderSum);

 @endphp
