@extends('layouts.admin')

@section('content')

<div class="flex items-center justify-between mb-8">

    <h1 class="text-3xl font-bold">
        Services
    </h1>

    <a href="{{ route('admin.services.create') }}"
       class="bg-black text-white px-5 py-3 rounded-xl">
        Add Service
    </a>

</div>

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

        <tr>
            <th class="text-left p-4">Image</th>
            <th class="text-left p-4">Title</th>
            <th class="text-left p-4">Price</th>
            <th class="text-left p-4">Actions</th>
        </tr>

        </thead>

        <tbody>

        @foreach($services as $service)

            <tr class="border-t">

                <td class="p-4">

                    @if($service->image)
                        <img
                            src="{{ asset('storage/'.$service->image) }}"
                            class="w-20 h-20 object-cover rounded-lg"
                        >
                    @endif

                </td>

                <td class="p-4 font-semibold">
                    {{ $service->title }}
                </td>

                <td class="p-4">
                    {{ $service->price ?? 'N/A' }}
                </td>

                <td class="p-4 flex gap-3">

                    <a href="{{ route('admin.services.edit', $service) }}"
                       class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                        Edit
                    </a>

                    <form
                        action="{{ route('admin.services.destroy', $service) }}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="bg-red-500 text-white px-4 py-2 rounded-lg"
                        >
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

@endsection
