<x-mainview>
    <x-slot name="title">Crear Empleado</x-slot>
    <x-slot name="slot">
        <div class="max-w-4xl mx-auto">
            <!-- Botón de regreso -->
            <div class="mb-6">
                <a href="{{ route('employes.index') }}"
                   class="inline-flex items-center px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                    Volver
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Nuevo Empleado</h2>

                <form action="{{ route('employes.store') }}" method="POST">
                    @csrf

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4 pb-2">
                            Información Personal
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstname" class="block text-sm font-medium text-gray-700 mb-2">
                                    Nombre
                                </label>
                                <input type="text"
                                        name="firstname"
                                       id="firstname"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('firstname') border-red-500 @enderror"
                                       required>
                            </div>

                            <div>
                                <label for="lastname" class="block text-sm font-medium text-gray-700 mb-2">
                                    Apellido
                                </label>
                                <input type="text"
                                       name="lastname"
                                       id="lastname"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('lastname') border-red-500 @enderror"
                                       required>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email
                                </label>
                                <input type="email"
                                       name="email"
                                       id="email"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('email') border-red-500 @enderror"
                                       required>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                    Teléfono
                                </label>
                                <input type="tel"
                                       name="phone"
                                       id="phone"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('phone') border-red-500 @enderror"
                                       required>
                            </div>

                            <div>
                                <label for="birthday" class="block text-sm font-medium text-gray-700 mb-2">
                                    Fecha de Nacimiento
                                </label>
                                <input type="date"
                                       name="birthday"
                                       id="birthday"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('birthday') border-red-500 @enderror">
                            </div>

                            <div>
                                <label for="rfc" class="block text-sm font-medium text-gray-700 mb-2">
                                    RFC
                                </label>
                                <input type="text"
                                       name="rfc"
                                       id="rfc"
                                       maxlength="13"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('rfc') border-red-500 @enderror">
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4 pb-2">
                            Información Laboral
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <div>
                                <label for="salary" class="block text-sm font-medium text-gray-700 mb-2">
                                    Salario
                                </label>
                                <div class="relative">
                                    <span class="absolute left-3 top-2 text-gray-500">$</span>
                                    <input type="number"
                                           name="salary"
                                           id="salary"
                                           step="50.00"
                                           min="0"
                                           class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('salary') border-red-500 @enderror"
                                           placeholder="0.00"
                                           required>
                                </div>
                            </div>

                            <div>
                                <label for="hire_date" class="block text-sm font-medium text-gray-700 mb-2">
                                    Fecha de Contratación
                                </label>
                                <input type="date"
                                       name="hire_date"
                                       id="hire_date"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('hire_date') border-red-500 @enderror"
                                       required>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-4">
                        <a href="{{ route('employes.index') }}"
                           class="px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                            Cancelar
                        </a>
                        <button type="submit"
                                class="px-3 py-1 bg-indigo-600 hover:bg-indigo-400 text-white font-medium rounded-lg shadow-sm transition-colors">
                            Guardar Empleado
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-mainview>
