<x-main-view>
    <x-slot name="title">Detalle de Transacciones</x-slot>
    <x-slot name="slot">
        <div class="max-w-3xl mx-auto">
            <div class="mb-6">
                <a href="{{ route('transactions.index') }}"
                   class="inline-flex items-center px-3 py-1 bg-gray-200 hover:bg-gray-100 text-gray-700 font-medium rounded-lg transition-colors">
                    Volver
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">

                <div class="flex flex-col md:flex-row justify-between md:items-center mb-6 pb-4 border-b border-gray-200">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Transacción {{ $transaction->id }}</h2>
                        <p class="text-sm text-gray-500">{{ $transaction->transaction_date }}</p>
                    </div>

                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <a href="{{ route('transactions.edit', $transaction) }}"
                           class="px-3 py-1 bg-blue-600 hover:bg-blue-400 text-white font-medium rounded-lg shadow-sm transition-colors text-sm">
                            Editar
                        </a>
                        <form action="{{ route('transactions.destroy', $transaction) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-1 bg-red-600 hover:bg-red-400 text-white font-medium rounded-lg shadow-sm transition-colors text-sm">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <span class="block text-sm font-medium text-gray-500">Cuenta</span>
                        <p class="text-lg text-gray-800">{{ $transaction->account->id }} - {{ $transaction->account->customer->firstname }} {{ $transaction->account->customer->lastname }}</p>
                    </div>

                    <div>
                        <span class="block text-sm font-medium text-gray-500">Tipo</span>
                        <p class="text-lg text-gray-800">{{ $transaction->type }}</p>
                    </div>

                    <div>
                        <span class="block text-sm font-medium text-gray-500">Monto</span>
                        <p class="text-lg text-gray-800">${{ number_format($transaction->amount, 2) }}</p>
                    </div>

                    <div>
                        <span class="block text-sm font-medium text-gray-500">Estado de la Cuenta</span>
                        <p class="text-lg text-gray-800">{{ $transaction->account->status }}</p>
                    </div>

                    <div class="md:col-span-2">
                        <span class="block text-sm font-medium text-gray-500">Descripción</span>
                        <p class="text-lg text-gray-800">{{ $transaction->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-main-view>
