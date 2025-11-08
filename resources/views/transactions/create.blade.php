<x-main-view>
    <x-slot name="title">Crear Transacciones</x-slot>
    <x-slot name="slot">
         <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('transactions.index') }}"
               class="inline-flex items-center px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                Volver
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Crear Transacción</h2>

            <form action="{{ route('transactions.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

                    <div>
                        <label for="account_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Cuenta Origen
                        </label>
                        <select name="account_id" id="account_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                            <option value="">Seleccione cuenta</option>
                            @foreach($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->customer->firstname }} {{ $account->customer->lastname }} ({{ $account->type }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="tiype" class="block text-sm font-medium text-gray-700 mb-2">
                            Tipo de Transacción
                        </label>
                        <select name="type" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                            <option value="Intrabancarias">Intrabancarias</option>
                            <option value="Interbancarias">Interbancarias</option>
                            <option value="Inmediata">Inmediata</option>
                            <option value="Financiación">Financiación</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">
                            Monto
                        </label>
                        <input type="number"
                               name="amount"
                               id="amount"
                               min="0"
                               step="0.10"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                               placeholder="30000.00"
                               required>
                    </div>

                    <div class="mb-6">
                        <label for="transaction_date" class="block text-sm font-medium text-gray-700 mb-2">
                            Fecha de la Transacción
                        </label>
                        <input type="date"
                           name="transaction_date"
                           id="transaction_date"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                    </div>

                </div>

                <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Descripción
                        </label>
                        <textarea name="description"
                                  id="description"
                                  rows="3"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"></textarea>
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
