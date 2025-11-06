<x-main-view>
    <x-slot name="title">Editar Cuenta</x-slot>
    <x-slot name="slot">
        <form action="{{ route('accounts.update', $account->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <label>Cliente</label>
        <select name="customer_id" class="border rounded p-2">
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}" {{ old('customer_id', $account->customer_id) == $customer->id ? 'selected' : '' }}>
                    {{ $customer->firstname }} {{ $customer->lastname }}
                </option>
            @endforeach
        </select>

        <label>Tipo de cuenta</label>
        <select name="type" class="border rounded p-2">
            <option value="Ahorro" {{ old('type', $account->type) }}>Ahorro</option>
            <option value="Débito" {{ old('type', $account->type) }}>Débito</option>
            <option value="Crédito" {{ old('type', $account->type) }}>Crédito</option>
        </select>

        <label>Balance</label>
        <input type="number" name="balance" value="{{ old('balance', $account->balance) }}" class="border rounded p-2">

        <label>Fecha de apertura</label>
        <input type="date" name="date_opened" value="{{ old('date_opened', $account->date_opened) }}" class="border rounded p-2">

        <label>Estado</label>
        <select name="status" class="border rounded p-2">
            <option value="active" {{ old('status', $account->status)}}>Activo</option>
            <option value="inactive" {{ old('status', $account->status) }}>Inactivo</option>
        </select>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Actualizar</button>
    </form>
    </x-slot>
</x-main-view>
