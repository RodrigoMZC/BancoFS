<x-main-view>
    <x-slot name="title">Editar Transacciones</x-slot>
    <x-slot name="slot">
        <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('transactions.index') }}"
               class="inline-flex items-center px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                Volver
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Transacción</h2>

            <form action="{{ route('transactions.update', $transaction) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

                    <div>
                        <label for="tiype" class="block text-sm font-medium text-gray-700 mb-2">
                            Tipo de Transacción
                        </label>
                        <select name="type" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                            <option value="Intrabancarias" {{ old('type', $transaction->type) }}>Intrabancarias</option>
                            <option value="Interbancarias" {{ old('type', $transaction->type) }}>Interbancarias</option>
                            <option value="Inmediata" {{ old('type', $transaction->type) }}>Inmediata</option>
                            <option value="Financiación" {{ old('type', $transaction->type) }}>Financiación</option>
                        </select>
                    </div>

                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">
                            Monto
                        </label>
                        <input type="number"
                               name="amount"
                               id="amount"
                               value="{{ old('amount', $transaction->amount) }}"
                               min="0"
                               step="0.10"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                               placeholder="30000.00"
                               required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="transaction_date" class="block text-sm font-medium text-gray-700 mb-2">
                        Fecha de la Transacción
                    </label>
                    <input type="date"
                           name="transaction_date"
                           id="transaction_date"
                           value="{{ old('transaction_date', $transaction->transaction_date) }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Descripción
                        </label>
                        <textarea name="description"
                                  id="description"
                                  rows="3"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">{{ old('description', $transaction->description) }}
                        </textarea>
                    </div>


                <div class="flex items-center justify-end space-x-4 pt-4">
                    <a href="{{ route('transactions.index') }}"
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
    </x-slot>
</x-main-view>
