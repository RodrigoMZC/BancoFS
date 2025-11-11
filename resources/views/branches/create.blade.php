<x-mainview>
    <x-slot name="title">Crear Sucursal</x-slot>
    <x-slot name="slot">
        <div class="max-w-4xl mx-auto">
            <div class="mb-6">
                <a href="{{ route('branches.index') }}"
                   class="inline-flex items-center px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                    Volver
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Nueva Sucursal</h2>

                <form action="{{ route('branches.store') }}" method="POST">
                    @csrf

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4 pb-2">
                            Información Sucursal
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Nombre
                                </label>
                                <input type="text"
                                       name="name"
                                       id="name"
                                       value="{{ old('name') }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                       required>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                    Teléfono
                                </label>
                                <input type="tel"
                                       name="phone"
                                       id="phone"
                                       value="{{ old('phone') }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                            </div>

                            <div class="md:col-span-2">
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                                    Dirección
                                </label>
                                <input type="text"
                                       name="address"
                                       id="address"
                                       value="{{ old('address') }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                       required>
                            </div>

                        </div> </div>

                    <div class="flex items-center justify-end space-x-4 pt-4">
                        <a href="{{ route('branches.index') }}"
                           class="px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                            Cancelar
                        </a>
                        <button type="submit"
                                class="px-3 py-1 bg-indigo-600 hover:bg-indigo-400 text-white font-medium rounded-lg shadow-sm transition-colors">
                            Guardar Sucursal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-mainview>
