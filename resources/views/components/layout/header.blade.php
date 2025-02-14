<header class="h-15v bg-header flex justify-between items-center p-4">
    <h1>ESTOY EN EL HEADER</h1>

    @auth
        <span>Bienvenido, {{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
</header>
