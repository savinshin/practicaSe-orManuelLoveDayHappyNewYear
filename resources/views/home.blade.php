<x-layouts.layout>
    @auth
        <div class="p-4 bg-green-200 rounded shadow">
            <h2>Bienvenido, {{ Auth::user()->name }}</h2>
            <a href="#" class="mt-4 block text-blue-600">Ver Alumnos</a>
        </div>
    @endauth
    @guest
        <img src="{{ asset('images/home.jpg') }}" alt="Bienvenido" class="w-full">
    @endguest
</x-layouts.layout>

{{--<x-layouts.layout>--}}
{{--    <h1>Página Principal</h1>--}}
{{--</x-layouts.layout>--}}
