<x-main-view>
    <x-slot name="title">Empleados</x-slot>
    <x-slot name="slot">
        <div class="flex justify-end mb-4">
            <a href="{{ route('employes.create') }}" class="btn">
                Crear Empleado
            </a>
        </div>

        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Completo</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Inicio de Contrato</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employes as $employe)
                    <tr>
                        <td>{{ $employe->id }}</td>
                        <td>{{ $employe->firstname }} {{ $employe->lastname }}</td>
                        <td>{{ $employe->email }}</td>
                        <td>{{ $employe->phone }}</td>
                        <td>{{ $employe->hire_date ?? 'N/A' }}</td>
                        <td>
                            <div class="flex space-x-2">
                                <a href="{{ route('employes.show', $employe) }}" class="btn">
                                    Ver
                                </a>
                                <a href="{{ route('employes.edit', $employe) }}" class="btn">
                                    Editar
                                </a>
                                <form action="{{ route('employes.destroy', $employe) }}" method="POST" class="inline">
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
