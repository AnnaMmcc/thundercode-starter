@include('frontend.partials.navbar')

<h1>Welcome to ThunderCode Business Starter</h1>
<p>Check out our services:</p>

@foreach($services as $service)
    <div>
        <h2>{{ $service->title }}</h2>
        @if($service->image)
            <img src="{{ asset('storage/'.$service->image) }}" width="150">
        @endif
    </div>
@endforeach

<a href="{{ url('/services') }}">See all services</a>
