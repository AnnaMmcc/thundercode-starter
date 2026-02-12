@include('frontend.partials.navbar')

<h1>Contact Us</h1>

@if(session('success'))
    <div style="color:green;">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ url('/contact') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required><br><br>

    <label>Message:</label>
    <textarea name="message" required>{{ old('message') }}</textarea><br><br>

    <button type="submit">Send Message</button>
</form>
