<nav class="bg-white dark:bg-gray-900 shadow-sm border-b border-gray-200 dark:border-gray-700">

    <div class="container mx-auto px-6">

        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="/" class="text-2xl font-bold text-black dark:text-white">
                ThunderCode
            </a>

            {{-- DESKTOP NAV --}}
            <div class="hidden md:flex items-center gap-8">

                <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white font-medium">
                    Home
                </a>

                <a href="/services" class="text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white font-medium">
                    Services
                </a>

                <a href="/about" class="text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white font-medium">
                    About
                </a>

                <a href="/contact" class="text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white font-medium">
                    Contact
                </a>

            </div>

            {{-- RIGHT SIDE (DESKTOP) --}}
            <div class="hidden md:flex items-center gap-4">


                <button id="darkToggle"
                    class="px-3 py-1 border rounded text-sm text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white">
                    🌙
                </button>

                @auth

                    @if(auth()->user()->is_admin)

                        <a href="{{ route('admin.dashboard') }}"
                           class="bg-black dark:bg-white text-white dark:text-black px-4 py-2 rounded-xl font-medium">
                            Admin
                        </a>

                        <a href="{{ route('admin.services.index') }}"
                           class="text-gray-700 dark:text-gray-300 font-medium">
                            Services
                        </a>

                        <a href="{{ route('admin.messages.index') }}"
                           class="text-gray-700 dark:text-gray-300 font-medium">
                            Messages
                        </a>

                    @endif

                @else

                    <a href="/login" class="text-gray-700 dark:text-gray-300 font-medium">
                        Login
                    </a>

                    <a href="/register"
                       class="bg-black dark:bg-white text-white dark:text-black px-5 py-2 rounded-xl font-medium">
                        Register
                    </a>

                @endauth

            </div>

            {{-- MOBILE BUTTON --}}
            <button id="mobileMenuBtn" class="md:hidden text-2xl text-gray-700 dark:text-white">
                ☰
            </button>

        </div>

    </div>

    {{-- MOBILE MENU --}}
    <div id="mobileMenu" class="hidden md:hidden px-6 pb-6 space-y-4">

        <a href="/" class="block text-gray-700 dark:text-gray-300">Home</a>
        <a href="/services" class="block text-gray-700 dark:text-gray-300">Services</a>
        <a href="/about" class="block text-gray-700 dark:text-gray-300">About</a>
        <a href="/contact" class="block text-gray-700 dark:text-gray-300">Contact</a>

        <hr class="border-gray-200 dark:border-gray-700">

        <button id="darkToggleMobile"
            class="px-3 py-1 border rounded text-sm text-gray-700 dark:text-gray-300">
            🌙 
        </button>

        @auth
            @if(auth()->user()->is_admin)
                <a href="{{ route('admin.dashboard') }}" class="block">Admin</a>
                <a href="{{ route('admin.services.index') }}" class="block">Services</a>
                <a href="{{ route('admin.messages.index') }}" class="block">Messages</a>
            @endif
        @else
            <a href="/login" class="block">Login</a>
            <a href="/register" class="block font-bold">Register</a>
        @endauth

    </div>

</nav>

{{-- JS --}}
<script>
    // MOBILE MENU
    const btn = document.getElementById('mobileMenuBtn');
    const menu = document.getElementById('mobileMenu');

    btn?.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // DARK MODE (desktop + mobile)
    const html = document.documentElement;

    const applyTheme = () => {
        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }
    };

    applyTheme();

    function toggleDark() {
        html.classList.toggle('dark');

        if (html.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    }

    document.getElementById('darkToggle')?.addEventListener('click', toggleDark);
    document.getElementById('darkToggleMobile')?.addEventListener('click', toggleDark);
</script>
