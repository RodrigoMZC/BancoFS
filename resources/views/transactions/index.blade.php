<x-main-view>
    <x-slot name="title">Transacciones</x-slot>
    <x-slot name="slot">
        <div class="flex justify-end mb-4">
            <a href="{{ route('transactions.create') }}" class="btn">
                Crear Transacción
            </a>
        </div>

        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Monto</th>
                        <th>Fecha de Transacción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->account->customer->firstname }} {{ $transaction->account->customer->lastname }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->transaction_date }}</td>
                        <td>
                            <div class="flex space-x-2">
                                <a href="{{ route('transactions.show', $transaction) }}" class="btn">
                                    Ver
                                </a>
                                <a href="{{ route('transactions.edit', $transaction) }}" class="btn">
                                    Editar
                                </a>
                                <form action="{{ route('transactions.destroy', $transaction) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn" style="background-color: #ef4444;">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-main-view>
