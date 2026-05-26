@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow">
        <h2 class="text-gray-500 dark:text-gray-300">Total Services</h2>
        <p class="text-3xl font-bold">{{ $totalServices }}</p>
    </div>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow">
        <h2 class="text-gray-500 dark:text-gray-300">Messages</h2>
        <p class="text-3xl font-bold">{{ $totalMessages }}</p>
    </div>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow">
        <h2 class="text-gray-500 dark:text-gray-300">Total Value</h2>
        <p class="text-3xl font-bold">${{ number_format($totalValue, 2) }}</p>
    </div>

</div>

{{-- 🔥 OVO JE TVOJ DEO --}}
<div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6">

    <h2 class="text-2xl font-bold mb-6">
        Latest Services
    </h2>

    <div class="space-y-4">

        @foreach($latestServices as $service)

            <div class="flex items-center justify-between border-b pb-4 dark:border-gray-700">

                <div>

                    <h3 class="font-semibold">
                        {{ $service->title }}
                    </h3>

                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        {{ $service->created_at->diffForHumans() }}
                    </p>

                </div>

                <span class="font-bold">
                    ${{ $service->price ?? 'N/A' }}
                </span>

            </div>

        @endforeach

    </div>

</div>

@endsection
