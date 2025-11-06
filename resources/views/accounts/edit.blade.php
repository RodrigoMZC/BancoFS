<x-main-view :title="$title">
    <form action="{{ route('accounts.update', $account->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <label>Tipo de cuenta</label>
        <select name="type" class="border rounded p-2">
            <option value="ahorro" {{ $account->type == 'ahorro' ? 'selected' : '' }}>Ahorro</option>
            <option value="debito" {{ $account->type == 'debito' ? 'selected' : '' }}>Débito</option>
            <option value="credito" {{ $account->type == 'credito' ? 'selected' : '' }}>Crédito</option>
        </select>

        <label>Balance</label>
        <input type="number" name="balance" value="{{ $account->balance }}" class="border rounded p-2">

        <label>Fecha de apertura</label>
        <input type="date" name="date_opened" value="{{ $account->date_opened }}" class="border rounded p-2">

        <label>Estado</label>
        <select name="status" class="border rounded p-2">
            <option value="activo" {{ $account->status == 'activo' ? 'selected' : '' }}>Activo</option>
            <option value="inactivo" {{ $account->status == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
        </select>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Actualizar</button>
    </form>
</x-main-view>
