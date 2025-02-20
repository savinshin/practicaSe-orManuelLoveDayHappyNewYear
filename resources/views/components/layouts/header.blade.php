<header class="bg-gray-800 text-white p-4 h:15v">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-lg">Mi Proyecto</h1>
        <nav>
            @auth
                <span>{{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="ml-4 text-red-500">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-blue-300">Login</a>
                <a href="{{ route('register') }}" class="ml-4 text-blue-300">Register</a>
            @endauth
        </nav>
    </div>
</header>
