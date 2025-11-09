<x-main-view>
    <x-slot name="title">Editar Cuenta</x-slot>
    <x-slot name="slot">
        <div class="max-w-3xl mx-auto">
            <div class="mb-6">
                <a href="{{ route('accounts.index') }}"
                   class="inline-flex items-center px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                    Volver
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Cuenta</h2>

                <form action="{{ route('accounts.update', $account->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="customer_id" class="block text-sm font-medium text-gray-700 mb-2">Cliente</label>
                            <select name="customer_id" id="customer_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}" {{ old('customer_id', $account->customer_id) == $customer->id ? 'selected' : '' }}>
                                        {{ $customer->firstname }} {{ $customer->lastname }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-700 mb-2">Tipo de cuenta</label>
                            <select name="type" id="type" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required>
                                <option value="Ahorro" {{ old('type', $account->type) == 'Ahorro' ? 'selected' : '' }}>Ahorro</option>
                                <option value="Débito" {{ old('type', $account->type) == 'Débito' ? 'selected' : '' }}>Débito</option>
                                <option value="Crédito" {{ old('type', $account->type) == 'Crédito' ? 'selected' : '' }}>Crédito</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="balance" class="block text-sm font-medium text-gray-700 mb-2">Balance</label>
                            <input type="number" step="0.01" name="balance" id="balance" value="{{ old('balance', $account->balance) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required>
                        </div>

                        <div>
                            <label for="date_opened" class="block text-sm font-medium text-gray-700 mb-2">Fecha de apertura</label>
                            <input type="date" name="date_opened" id="date_opened" value="{{ old('date_opened', $account->date_opened) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Estado</label>
                        <select name="status" id="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required>
                            <option value="active" {{ old('status', $account->status) == 'active' ? 'selected' : '' }}>Activo</option>
                            <option value="inactive" {{ old('status', $account->status) == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-4">
                        <a href="{{ route('accounts.index') }}"
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
    </x-slot>
</x-main-view>
