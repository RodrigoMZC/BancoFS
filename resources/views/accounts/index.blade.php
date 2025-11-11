<x-main-view>
    <x-slot name="title">Cuentas</x-slot>
    <x-slot name="slot">
        <div class="flex justify-end mb-4">
            <a href="{{ route('accounts.create') }}" class="btn">
                Nueva Cuenta
            </a>
        </div>

        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Saldo</th>
                        <th>Fecha de Apertura</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $account)
                        <tr>
                            <td>{{ $account->id }}</td>
                            <td>{{ $account->type }}</td>
                            <td>${{ number_format($account->balance, 2) }}</td>
                            <td>{{ $account->date_opened }}</td>
                            <td>
                                <span class="{{ $account->status === 'active' ? 'text-green-600' : 'text-red-600' }}">
                                    {{ $account->status }}
                                </span>
                            </td>
                            <td>
                                <div class="flex space-x-2">
                                    <a href="{{ route('accounts.show', $account->id) }}" class="btn">
                                        Ver
                                    </a>
                                    <a href="{{ route('accounts.edit', $account->id) }}" class="btn">
                                        Editar
                                    </a>
                                    <form action="{{ route('accounts.destroy', $account->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn" style="background-color: #ef4444;" onclick="return confirm('¿Eliminar esta cuenta?')">
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
