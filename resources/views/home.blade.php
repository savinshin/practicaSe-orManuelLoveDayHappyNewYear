<x-layout>
    @auth
        <div class="card">
            <h2>Ver Alumnos</h2>
        </div>
    @else
        <img src="{{ asset('images/home.jpg') }}" alt="Bienvenido">
    @endauth
</x-layout>
