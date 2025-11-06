<x-main-view>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary">📘 Cuentas registradas</h2>
            <a href="{{ route('accounts.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Nueva cuenta
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <table class="table table-hover mb-0 align-middle text-center">
                    <thead class="table-primary text-uppercase">
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
                        @forelse ($accounts as $account)
                            <tr>
                                <td>{{ $account->id }}</td>
                                <td>{{ ucfirst($account->type) }}</td>
                                <td>${{ number_format($account->balance, 2) }}</td>
                                <td>{{ $account->date_opened }}</td>
                                <td>
                                    <span
                                        class="badge {{ $account->status === 'active' ? 'bg-success' : 'bg-secondary' }}">
                                        {{ ucfirst($account->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('accounts.edit', $account->id) }}"
                                        class="btn btn-sm btn-warning me-1">
                                        <i class="bi bi-pencil"></i> Editar
                                    </a>
                                    <form action="{{ route('accounts.destroy', $account->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Eliminar esta cuenta?')">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-muted py-4">
                                    No hay cuentas registradas todavía 💤
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-main-view>
