<x-main-view title="Iniciar Sesión">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center mb-4">Iniciar sesión</h2>

        @if (session('error'))
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block font-medium">Correo electrónico</label>
                <input type="email" id="email" name="email" required class="w-full border p-2 rounded">
            </div>

            <div>
                <label for="password" class="block font-medium">Contraseña</label>
                <input type="password" id="password" name="password" required class="w-full border p-2 rounded">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a>
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Entrar</button>
            </div>
        </form>
    </div>
</x-main-view>
