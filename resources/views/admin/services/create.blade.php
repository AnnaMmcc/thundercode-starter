<h1>Add New Service</h1>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title') }}" required><br><br>

    <label>Description:</label>
    <textarea name="description" required>{{ old('description') }}</textarea><br><br>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="{{ old('price') }}"><br><br>

    <label>Image:</label>
    <input type="file" name="image"><br><br>

    <button type="submit">Save</button>
</form>

<a href="{{ route('services.index') }}">Back to list</a>
