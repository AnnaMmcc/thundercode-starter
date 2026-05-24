@extends('layouts.fronted')

@section('content')

<div class="max-w-4xl mx-auto bg-white rounded-2xl shadow overflow-hidden">

    @if($service->image)
        <img
            src="{{ asset('storage/'.$service->image) }}"
            class="w-full h-[400px] object-cover"
        >
    @endif

    <div class="p-8">

        <h1 class="text-4xl font-bold mb-4">
            {{ $service->title }}
        </h1>

        <p class="text-gray-600 text-lg leading-relaxed mb-6">
            {{ $service->description }}
        </p>

        <div class="flex items-center justify-between">

            <span class="text-2xl font-bold">
                {{ $service->price ? '$'.$service->price : 'Contact Us' }}
            </span>

            <a href="/contact"
               class="bg-black text-white px-6 py-3 rounded-xl">
                Contact Us
            </a>

        </div>

    </div>

</div>

@endsection
