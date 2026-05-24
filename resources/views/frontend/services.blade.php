@extends('layouts.fronted')

@section('content')

<div class="mb-10">
    <h1 class="text-4xl font-bold mb-3">
        Our Services
    </h1>

    <p class="text-gray-600">
        Explore our professional digital services and solutions.
    </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    @foreach($services as $service)

        <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

            @if($service->image)
                <img
                    src="{{ asset('storage/'.$service->image) }}"
                    class="w-full h-52 object-cover"
                    alt="{{ $service->title }}"
                >
            @endif

            <div class="p-5">

                <h2 class="text-2xl font-semibold mb-3">
                    {{ $service->title }}
                </h2>

                <p class="text-gray-600 mb-5">
                    {{ Str::limit($service->description, 120) }}
                </p>

                <div class="flex items-center justify-between">

                    <span class="font-bold text-lg">
                        {{ $service->price ? '$'.$service->price : 'Contact Us' }}
                    </span>

                    <a href="{{ route('services.show', $service) }}"
                       class="bg-black text-white px-4 py-2 rounded-lg hover:opacity-90">
                        Details
                    </a>

                </div>

            </div>

        </div>

    @endforeach

</div>

@endsection
