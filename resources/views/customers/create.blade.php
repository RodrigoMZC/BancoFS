<x-mainview>
    <x-slot name="title">Crear Cliente</x-slot>
    <x-slot name="slot">
        <div class="max-w-3xl mx-auto">
            <!-- Botón de regreso -->
            <div class="mb-6">
                <a href="{{ route('customers.index') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Volver
                </a>
            </div>

            <!-- Formulario -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Nuevo Cliente</h2>

                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="firstname" class="block text-sm font-medium text-gray-700 mb-2">
                                Nombre <span class="text-red-500">*</span>
                            </label>
                            <input type="text"
                                   name="firstname"
                                   id="firstname"
                                   value="{{ old('firstname') }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('firstname') border-red-500 @enderror"
                                   required>
                            @error('firstname')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="lastname" class="block text-sm font-medium text-gray-700 mb-2">
                                Apellido <span class="text-red-500">*</span>
                            </label>
                            <input type="text"
                                   name="lastname"
                                   id="lastname"
                                   value="{{ old('lastname') }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('lastname') border-red-500 @enderror"
                                   required>
                            @error('lastname')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Email y Teléfono -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   value="{{ old('email') }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('email') border-red-500 @enderror"
                                   required>
                            @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Teléfono <span class="text-red-500">*</span>
                            </label>
                            <input type="tel"
                                   name="phone"
                                   id="phone"
                                   value="{{ old('phone') }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('phone') border-red-500 @enderror"
                                   required>
                            @error('phone')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Dirección -->
                    <div class="mb-6">
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                            Dirección
                        </label>
                        <textarea name="address"
                                  id="address"
                                  rows="3"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('address') border-red-500 @enderror">{{ old('address') }}</textarea>
                        @error('address')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Fecha de Nacimiento y RFC -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="birtday" class="block text-sm font-medium text-gray-700 mb-2">
                                Fecha de Nacimiento
                            </label>
                            <input type="date"
                                   name="birthday"
                                   id="birthday"
                                   value="{{ old('birthday') }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('birthday') border-red-500 @enderror">
                            @error('birthday')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="rfc" class="block text-sm font-medium text-gray-700 mb-2">
                                RFC
                            </label>
                            <input type="text"
                                   name="rfc"
                                   id="rfc"
                                   value="{{ old('rfc') }}"
                                   maxlength="13"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('rfc') border-red-500 @enderror"
                                   placeholder="XAXX010101000">
                            @error('rfc')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Botones -->
                    <div class="flex items-center justify-end space-x-4 pt-4 border-t border-gray-200">
                        <a href="{{ route('customers.index') }}"
                           class="px-6 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium rounded-lg transition-colors">
                            Cancelar
                        </a>
                        <button type="submit"
                                class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm transition-colors">
                            Guardar Cliente
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-mainview>
