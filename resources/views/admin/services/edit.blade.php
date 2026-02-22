@include('admin.partials.admin-navbar')

<h1>Edit Service</h1>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title', $service->title) }}" required><br><br>

    <label>Description:</label>
    <textarea name="description" required>{{ old('description', $service->description) }}</textarea><br><br>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="{{ old('price', $service->price) }}"><br><br>

    <label>Image:</label>
    <input type="file" name="image"><br>
    @if($service->image)
        <img src="{{ asset('storage/'.$service->image) }}" width="100"><br>
    @endif

    <button type="submit">Update</button>
</form>

<a href="{{ route('admin.services.index') }}">Back to list</a>



