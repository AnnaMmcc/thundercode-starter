@extends('layouts.fronted')

@section('content')

<h1 class="text-4xl font-bold mb-8">
    Welcome to ThunderCode Business Starter
</h1>

<p class="mb-8 text-gray-600">
    Professional digital services for modern businesses.
</p>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    @foreach($services as $service)

        <div class="bg-white rounded-2xl shadow p-5">

            @if($service->image)
                <img src="{{ asset('storage/'.$service->image) }}"
                     class="w-full h-48 object-cover rounded-xl mb-4">
            @endif

            <h2 class="text-xl font-semibold mb-2">
                {{ $service->title }}
            </h2>

            <p class="text-gray-600 mb-4">
                {{ Str::limit($service->description, 100) }}
            </p>

            <a href="/services"
               class="inline-block bg-black text-white px-4 py-2 rounded-lg">
                Learn More
            </a>

        </div>

    @endforeach

</div>

@endsection
