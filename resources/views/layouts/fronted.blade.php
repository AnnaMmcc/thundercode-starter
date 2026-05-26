<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThunderCode Starter</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-white">

@include('frontend.partials.navbar')

<main class="container mx-auto px-6 py-10">
    @yield('content')
</main>
@include('frontend.partials.footer')
<script>
    const html = document.documentElement;
    const toggle = document.getElementById('darkToggle');

    if (localStorage.getItem('theme') === 'dark') {
        html.classList.add('dark');
    }

    toggle?.addEventListener('click', () => {
        html.classList.toggle('dark');

        if (html.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });
</script>
</body>
</html>
