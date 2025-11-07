<x-main-view>
    <x-slot name="title">Detalles de la Cuenta</x-slot>

    <x-slot name="slot">
        <div class="container mt-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Detalles de la cuenta #{{ $account->id }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Tipo de cuenta:</strong> {{ ucfirst($account->type) }}</p>
                    <p><strong>Saldo:</strong> ${{ number_format($account->balance, 2) }}</p>
                    <p><strong>Fecha de apertura:</strong> {{ $account->date_opened }}</p>
                    <p><strong>Estado:</strong>
                        <span class="badge {{ $account->status === 'active' ? 'bg-success' : 'bg-secondary' }}">
                            {{ ucfirst($account->status) }}
                        </span>
                    </p>
                    <p><strong>Creado el:</strong> {{ $account->created_at }}</p>
                    <p><strong>Última actualización:</strong> {{ $account->updated_at }}</p>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('accounts.index') }}" class="btn btn-secondary">
                        <h1>Volver</h1>
                    </a>
                </div>
            </div>
        </div>
    </x-slot>
</x-main-view>
