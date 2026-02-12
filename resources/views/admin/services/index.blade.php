<h1>Admin Services</h1>
<a href="{{ route('services.create') }}">Add new service</a>

@foreach($services as $service)
    <div>
        <h2>{{ $service->tittle }}</h2>
        <p>{{ $service->description }}</p>
        @if($service->image)
            <img src="{{ asset('storage'/.$service->image) }}" width="100">
        @endif
        <a href="{{ route('services.edit', $service->id) }}">Edit</a>
        <form action="{{ 'services.destroy', $service->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
