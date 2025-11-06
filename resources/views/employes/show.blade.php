<x-mainview>
    <x-slot name="title">Detalle del Empleado</x-slot>

    <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('employes.index') }}"
               class="inline-flex items-center px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                Volver
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">

            <div class="flex flex-col md:flex-row justify-between md:items-center mb-6 pb-4 border-b border-gray-200">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        {{ $employe->firstname }} {{ $employe->lastname }}
                    </h2>
                    <p class="text-sm text-gray-500">{{ $employe->email }}</p>
                </div>

                <div class="flex space-x-2 mt-4 md:mt-0">
                    <a href="{{ route('employes.edit', $employe) }}"
                       class="px-2 py-1 bg-yellow-600 hover:bg-yellow-400 text-white font-medium rounded-lg shadow-sm transition-colors text-sm">
                        Editar
                    </a>
                    <form action="{{ route('employes.destroy', $employe) }}" method="POST");">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-2 py-1 bg-red-600 hover:bg-red-400 text-white font-medium rounded-lg shadow-sm transition-colors text-sm">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <span class="block text-sm font-medium text-gray-500">Teléfono</span>
                    <p class="text-lg text-gray-800">{{ $employe->phone ?? 'N/A' }}</p>
                </div>

                <div>
                    <span class="block text-sm font-medium text-gray-500">RFC</span>
                    <p class="text-lg text-gray-800 uppercase">{{ $employe->rfc ?? 'N/A' }}</p>
                </div>

                <div>
                    <span class="block text-sm font-medium text-gray-500">Fecha de Nacimiento</span>
                    <p class="text-lg text-gray-800">
                        {{ $employe->birthday ?? 'N/A' }}
                    </p>
                </div>

                <div>
                    <span class="block text-sm font-medium text-gray-500">Salario</span>
                    <p class="text-lg text-gray-800">{{ $employe->salary ? '$' . number_format($employe->salary, 2) : 'N/A' }}</p>
                </div>

                <div>
                    <span class="block text-sm font-medium text-gray-500">Fecha de Contratación</span>
                    <p class="text-lg text-gray-800">{{ $employe->hire_date ?? 'N/A' }}</p>
                </div>
            </div>
        </div>


    </div>
</x-mainview>
