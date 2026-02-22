@include('admin.partials.admin-navbar')

<h1>Admin Services</h1>

<a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add New Service</a>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td>{{ $service->title }}</td>
            <td>{{ $service->description }}</td>
            <td>{{ $service->price ?? '-' }}</td>
            <td>
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" width="80">
                @else
                    -
                @endif
            </td>
            <td>
                <a href="{{ route('admin.services.edit', $service->id) }}">Edit</a> |
                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

