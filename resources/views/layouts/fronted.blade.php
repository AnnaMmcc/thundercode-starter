<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThunderCode Starter</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

@include('frontend.partials.navbar')

<main class="container mx-auto px-6 py-10">
    @yield('content')
</main>

</body>
</html>
