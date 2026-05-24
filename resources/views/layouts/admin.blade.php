<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    <aside class="w-64 bg-black text-white p-6">

        <h2 class="text-2xl font-bold mb-10">
            ThunderCode
        </h2>

        <nav class="space-y-4">

            <a href="{{ route('admin.services.index') }}"
               class="block hover:text-gray-300">
                Services
            </a>

            <a href="/"
               class="block hover:text-gray-300">
                Website
            </a>

        </nav>

    </aside>

    {{-- Content --}}
    <main class="flex-1 p-10">
        @yield('content')
    </main>

</div>

</body>
</html>
