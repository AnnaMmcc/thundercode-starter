<nav class="bg-white shadow-sm border-b border-gray-200">

    <div class="container mx-auto px-6">

        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}

            <a href="/"
               class="text-2xl font-bold text-black">

                ThunderCode

            </a>

            {{-- Navigation --}}

            <div class="flex items-center gap-8">

                <a href="/"
                   class="text-gray-700 hover:text-black font-medium">
                    Home
                </a>

                <a href="/services"
                   class="text-gray-700 hover:text-black font-medium">
                    Services
                </a>

                <a href="/about"
                   class="text-gray-700 hover:text-black font-medium">
                    About
                </a>

                <a href="/contact"
                   class="text-gray-700 hover:text-black font-medium">
                    Contact
                </a>

            </div>

            {{-- Right Side --}}

            <div class="flex items-center gap-4">

                @auth

                    <a href="/admin"
                       class="bg-black text-white px-5 py-2 rounded-xl font-medium">

                        Admin Panel

                    </a>

                    @if(auth()->user()->is_admin)

    <a href="{{ route('admin.services.index') }}"
       class="text-gray-700 font-medium">
        Manage Services
    </a>

    <a href="{{ route('admin.services.create') }}"
       class="bg-gray-200 px-4 py-2 rounded-xl font-medium">
        Add Service
    </a>
    <a href="{{ route('admin.messages.index') }}"
   class="text-gray-700 font-medium">
    Messages
</a>

@endif
                @else

                    <a href="/login"
                       class="text-gray-700 font-medium">

                        Login

                    </a>

                    <a href="/register"
                       class="bg-black text-white px-5 py-2 rounded-xl font-medium">

                        Register

                    </a>

                @endauth

            </div>

        </div>

    </div>

</nav>
