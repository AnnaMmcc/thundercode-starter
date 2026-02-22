<nav style="background:#222; color:white; padding:10px;">
    <a href="{{ route('admin.services.index') }}" style="color:white; margin-right:10px;">Services</a>
    <a href="{{ route('dashboard') }}" style="color:white;">Dashboard</a>
    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" style="background:none;border:none;color:white;cursor:pointer;">Logout</button>
    </form>
</nav>
