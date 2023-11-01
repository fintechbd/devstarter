<pre>
@php

    $user = \Fintech\Auth\Facades\Auth::user()->find(38);
    $data = [];
    $user->profile->getMedia('documents')->each(function(\Spatie\MediaLibrary\MediaCollections\Models\Media $media) use (&$data) {
        $data[$media->getCustomProperty('type')][$media->getCustomProperty('side')] = $media->getFullUrl();
    });

    dd($data);
@endphp
</pre>
