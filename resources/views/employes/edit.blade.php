<x-mainview>
    <x-slot name="title">Editar Empleado</x-slot>

    <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('employes.index') }}"
               class="inline-flex items-center px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                Volver
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Empleado</h2>

            <form action="{{ route('employes.update', $employe) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="firstname" class="block text-sm font-medium text-gray-700 mb-2">
                            Nombre
                        </label>
                        <input type="text"
                               name="firstname"
                               id="firstname"
                               value="{{ old('firstname', $employe->firstname) }}"
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
                               value="{{ old('lastname', $employe->lastname) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('lastname') border-red-500 @enderror"
                               required>

                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email
                        </label>
                        <input type="email"
                               name="email"
                               id="email"
                               value="{{ old('email', $employe->email) }}"
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
                               value="{{ old('phone', $employe->phone) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('phone') border-red-500 @enderror">

                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="branch_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Sucursal
                        </label>
                        <select name="branch_id" id="branch_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required>
                            @foreach($branches as $branch)
                                <option value="{{ $branch->id }}" {{ old('branch_id', $employe->branch_id) == $branch->id ? 'selected' : '' }}>
                                    {{ $branch->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="hire_date" class="block text-sm font-medium text-gray-700 mb-2">
                            Fecha de Contratación
                        </label>
                        <input type="date"
                               name="hire_date"
                               id="hire_date"
                               value="{{ old('hire_date', $employe->hire_date) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('hire_date') border-red-500 @enderror"
                               required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="salary" class="block text-sm font-medium text-gray-700 mb-2">
                            Salario
                        </label>
                        <input type="number"
                               name="salary"
                               id="salary"
                               value="{{ old('salary', $employe->salary) }}"
                               min="0"
                               step="0.01"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('salary') border-red-500 @enderror"
                               placeholder="30000.00"
                               required>
                    </div>
                </div>

                <div class="flex items-center justify-end space-x-4 pt-4 border-t border-gray-200">
                    <a href="{{ route('employes.index') }}"
                       class="px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                        Cancelar
                    </a>
                    <button type="submit"
                            class="px-3 py-1 bg-indigo-600 hover:bg-indigo-400 text-white font-medium rounded-lg shadow-sm transition-colors">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-mainview>
