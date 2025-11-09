<x-mainview>
    <x-slot name="title">Clientes</x-slot>
    <x-slot name="slot">
        <div class="flex justify-end mb-4">
            <a href="{{ route('customers.create') }}" class="btn">
                Crear Cliente
            </a>
        </div>

        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>RFC</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->firstname }} {{ $customer->lastname }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->rfc ?? 'N/A' }}</td>
                        <td>
                            <div class="flex space-x-2">
                                <a href="{{ route('customers.show', $customer) }}" class="btn">
                                    Ver
                                </a>
                                <a href="{{ route('customers.edit', $customer) }}" class="btn">
                                    Editar
                                </a>
                                <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="inline">
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
</x-mainview>
