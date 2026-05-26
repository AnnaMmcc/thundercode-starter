@extends('layouts.fronted')

@section('content')

{{-- HERO SECTION --}}

<section class="py-20">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        <div>

            <span class="bg-black text-white px-4 py-2 rounded-full text-sm">
                Laravel Business Starter
            </span>

            <h1 class="text-5xl lg:text-6xl font-bold leading-tight mt-6 mb-6">

                Build Modern
                Digital Business
                Websites Faster

            </h1>

            <p class="text-xl text-gray-600 mb-8 leading-relaxed">

                Professional Laravel starter template with admin dashboard,
                services management, authentication and modern UI.

            </p>

            <div class="flex gap-4">

                <a href="/services"
                   class="bg-black text-white px-8 py-4 rounded-2xl font-semibold">

                    Explore Services

                </a>

                <a href="/contact"
                   class="border border-black px-8 py-4 rounded-2xl font-semibold">

                    Contact Us

                </a>

            </div>

        </div>

        <div class="bg-white rounded-3xl shadow-2xl p-10">

            <div class="space-y-6">

                <div class="bg-gray-100 rounded-2xl p-5">
                    <h3 class="font-bold text-xl mb-2">
                        Admin Dashboard
                    </h3>

                    <p class="text-gray-600">
                        Manage services and website content easily.
                    </p>
                </div>

                <div class="bg-gray-100 rounded-2xl p-5">
                    <h3 class="font-bold text-xl mb-2">
                        Tailwind CSS
                    </h3>

                    <p class="text-gray-600">
                        Fully responsive modern UI components.
                    </p>
                </div>

                <div class="bg-gray-100 rounded-2xl p-5">
                    <h3 class="font-bold text-xl mb-2">
                        Laravel Architecture
                    </h3>

                    <p class="text-gray-600">
                        Clean MVC structure and scalable codebase.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

{{-- FEATURED SERVICES --}}

<section class="pb-20">

    <div class="flex items-center justify-between mb-10">

        <div>

            <h2 class="text-4xl font-bold mb-2">
                Featured Services
            </h2>

            <p class="text-gray-600">
                Explore our latest professional services.
            </p>

        </div>

        <a href="/services"
           class="text-black font-semibold">
            View All →
        </a>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        @foreach($services as $service)

            <div class="bg-white rounded-2xl shadow overflow-hidden">

                @if($service->image)

                    <img
                        src="{{ asset('storage/'.$service->image) }}"
                        class="w-full h-52 object-cover"
                    >

                @endif

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-3">
                        {{ $service->title }}
                    </h3>

                    <p class="text-gray-600 mb-5">
                        {{ Str::limit($service->description, 100) }}
                    </p>

                    <div class="flex items-center justify-between">

                        <span class="font-bold text-xl">
                            ${{ $service->price ?? 'N/A' }}
                        </span>

                        <a href="{{ route('services.show', $service) }}"
                           class="bg-black text-white px-4 py-2 rounded-xl">

                            Details

                        </a>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</section>

@endsection
