@include('frontend.partials.navbar')

<h1>Our Services</h1>

<div style="display:flex; flex-wrap:wrap; gap:20px;">
    @foreach($services as $service)
        <div style="border:1px solid #ccc; padding:10px; width:250px;">
            <h2>{{ $service->title }}</h2>
            @if($service->image)
                <img src="{{ asset('storage/'.$service->image) }}" width="200">
            @endif
            <p>{{ $service->description }}</p>
            <p>Price: {{ $service->price ?? 'Contact us' }}</p>
        </div>
    @endforeach
</div>
