@extends('layouts.admin')

@section('content')

<div class="max-w-4xl">

    <div class="flex items-center justify-between mb-10">

        <h1 class="text-4xl font-bold">
            Message Details
        </h1>

        <form
            action="{{ route('admin.messages.destroy', $message) }}"
            method="POST"
        >

            @csrf
            @method('DELETE')

            <button
                class="bg-red-500 text-white px-5 py-3 rounded-2xl"
                onclick="return confirm('Delete this message?')"
            >
                Delete Message
            </button>

        </form>

    </div>

    <div class="bg-white rounded-3xl shadow-xl p-10 space-y-8">

        <div>

            <p class="text-gray-500 mb-2">
                Name
            </p>

            <h2 class="text-2xl font-bold">
                {{ $message->name }}
            </h2>

        </div>

        <div>

            <p class="text-gray-500 mb-2">
                Email
            </p>

            <h2 class="text-xl">
                {{ $message->email }}
            </h2>

        </div>

        <div>

            <p class="text-gray-500 mb-2">
                Message
            </p>

            <div class="bg-gray-100 rounded-2xl p-6 leading-relaxed">

                {{ $message->message }}

            </div>

        </div>

        <div class="text-gray-500">

            Received {{ $message->created_at->diffForHumans() }}

        </div>

    </div>

</div>

@endsection
