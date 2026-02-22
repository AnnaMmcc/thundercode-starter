@include('frontend.partials.navbar')
    <h1>Our Services</h1>

    <div style="display:flex; flex-wrap:wrap; gap:20px;">
        @foreach($services as $service)
            <div style="border:1px solid #ccc; padding:10px; width:250px;">
                <h2>{{ $service->title }}</h2>
                <p>{{ $service->description }}</p>
                <p><strong>Price:</strong> {{ $service->price ?? 'N/A' }}</p>
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" style="width:100%;">
                @endif
                <a href="{{ route('services.show', $service->id) }}">Read more</a>
            </div>
        @endforeach
    </div>
@endsection

