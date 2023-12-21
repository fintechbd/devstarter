@php
     $entries = collect();
    foreach (\Fintech\Core\Enums\Auth\ProofOfAddressType::toArray() as $key => $status) {
                $entries->push([
                    'label' => ucwords(str_replace("_", " ", preg_replace('/(?<!^)[A-Z]/', '_$0', $status))),
                    'attribute' => $key
                ]);
    }
    dd($entries);
@endphp
