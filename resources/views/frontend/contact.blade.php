@extends('layouts.fronted')

@section('content')

<section class="max-w-4xl mx-auto py-16">

    <div class="text-center mb-12">

        <h1 class="text-5xl font-bold mb-4">
            Contact Us
        </h1>

        <p class="text-gray-600 text-lg">
            Have a project in mind? We'd love to hear from you.
        </p>

    </div>

    {{-- Success Message --}}

    @if(session('success'))

        <div
            class="bg-green-100 border border-green-300 text-green-700 px-6 py-4 rounded-2xl mb-8"
        >
            {{ session('success') }}
        </div>

    @endif

    {{-- Validation Errors --}}

    @if ($errors->any())

        <div
            class="bg-red-100 border border-red-300 text-red-700 px-6 py-4 rounded-2xl mb-8"
        >

            <ul class="list-disc list-inside">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    {{-- Contact Form --}}

    <form
        action="{{ url('/contact') }}"
        method="POST"
        class="bg-white rounded-3xl shadow-xl p-10 space-y-8"
    >

        @csrf

        <div>

            <label class="block font-semibold mb-3">
                Name
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full border border-gray-300 rounded-2xl p-4 focus:outline-none focus:ring-2 focus:ring-black"
                required
            >

        </div>

        <div>

            <label class="block font-semibold mb-3">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="w-full border border-gray-300 rounded-2xl p-4 focus:outline-none focus:ring-2 focus:ring-black"
                required
            >

        </div>

        <div>

            <label class="block font-semibold mb-3">
                Message
            </label>

            <textarea
                name="message"
                rows="6"
                class="w-full border border-gray-300 rounded-2xl p-4 focus:outline-none focus:ring-2 focus:ring-black"
                required
            >{{ old('message') }}</textarea>

        </div>

        <button
            type="submit"
            class="bg-black text-white px-8 py-4 rounded-2xl font-semibold hover:opacity-90 transition"
        >
            Send Message
        </button>

    </form>

</section>

@endsection
