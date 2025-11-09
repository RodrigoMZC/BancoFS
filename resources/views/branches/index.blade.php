<x-main-view>
    <x-slot name="title">Sucursales</x-slot>
    <x-slot name="slot">
        <div class="flex justify-end mb-4">
            <a href="{{ route('branches.create') }}" class="btn">
                Crear Sucursal
            </a>
        </div>

        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($branches as $branch)
                    <tr>
                        <td>{{ $branch->id }}</td>
                        <td>{{ $branch->name }}</td>
                        <td>{{ $branch->address }}</td>
                        <td>{{ $branch->phone }}</td>
                        <td>
                            <div class="flex space-x-2">
                                <a href="{{ route('branches.show', $branch) }}" class="btn">
                                    Ver
                                </a>
                                <a href="{{ route('branches.edit', $branch) }}" class="btn">
                                    Editar
                                </a>
                                <form action="{{ route('branches.destroy', $branch) }}" method="POST" class="inline">
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
