@extends('layouts.admin')

@section('content')

<div class="max-w-3xl">

    <h1 class="text-3xl font-bold mb-8">
        Edit Service
    </h1>

    @if ($errors->any())

        <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-xl mb-6">

            <ul class="list-disc list-inside">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form
        action="{{ route('admin.services.update', $service) }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white rounded-2xl shadow p-8 space-y-6"
    >


     @csrf
     @method('PUT')
        <div>

            <label class="block mb-2 font-semibold">
                Title
            </label>

            <input
                type="text"
                name="title"
                value="{{ old('title', $service->title) }}"
                class="w-full border border-gray-300 rounded-xl p-3"
                required
            >

        </div>

        <div>

            <label class="block mb-2 font-semibold">
                Description
            </label>

            <textarea
                name="description"
                rows="5"
                class="w-full border border-gray-300 rounded-xl p-3"
                required
            >{{ old('description', $service->description) }}</textarea>

        </div>

        <div>

            <label class="block mb-2 font-semibold">
                Price
            </label>

            <input
                type="number"
                step="0.01"
                name="price"
                value="{{ old('price', $service->price) }}"
                class="w-full border border-gray-300 rounded-xl p-3"
            >

        </div>

        <div>

            <label class="block mb-2 font-semibold">
                Image
            </label>

            <input
                type="file"
                name="image"
                class="w-full"
            >
         @if($service->image)

         <img
          src="{{ asset('storage/'.$service->image) }}"
          class="w-40 rounded-xl mt-4"
         >

         @endif
        </div>

        <button
            type="submit"
            class="bg-black text-white px-6 py-3 rounded-xl"
        >
            Update Service
        </button>

    </form>

</div>

@endsection
