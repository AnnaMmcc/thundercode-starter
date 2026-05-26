@extends('layouts.fronted')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    @foreach($services as $service)

        <div class="group bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

            {{-- IMAGE --}}
            @if($service->image)
                <div class="overflow-hidden">
                    <img
                        src="{{ asset('storage/'.$service->image) }}"
                        class="w-full h-52 object-cover group-hover:scale-105 transition duration-300"
                        alt="{{ $service->title }}"
                    >
                </div>
            @endif

            {{-- CONTENT --}}
            <div class="p-6 flex flex-col gap-3">

                {{-- TITLE --}}
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">
                    {{ $service->title }}
                </h2>

                {{-- CATEGORY (ako imaš) --}}
                @if($service->category)
                    <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-700 rounded-full w-fit">
                        {{ $service->category->name }}
                    </span>
                @endif

                {{-- DESCRIPTION --}}
                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    {{ Str::limit($service->description, 90) }}
                </p>

                {{-- BOTTOM --}}
                <div class="flex items-center justify-between mt-3">

                    <span class="text-lg font-bold text-black dark:text-white">
                        {{ $service->price ? '$'.$service->price : 'Contact' }}
                    </span>

                    <a href="{{ route('services.show', $service) }}"
                       class="px-4 py-2 bg-black text-white dark:bg-white dark:text-black rounded-xl text-sm font-medium hover:opacity-90 transition">
                        View
                    </a>

                </div>

            </div>

        </div>

    @endforeach

</div>
@endsection
