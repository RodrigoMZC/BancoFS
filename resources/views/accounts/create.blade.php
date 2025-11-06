<x-main-view>
    <div class="container mt-4">
        <h1>Crear Cuenta</h1>

        <form action="{{ route('accounts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="type" class="form-label">Tipo de cuenta</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Seleccione tipo</option>
                    <option value="Ahorro">Ahorro</option>
                    <option value="Débito">Débito</option>
                    <option value="Crédito">Crédito</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="balance" class="form-label">Saldo inicial</label>
                <input type="number" step="0.01" name="balance" id="balance" class="form-control" value="0"
                    required>
            </div>

            <div class="mb-3">
                <label for="date_opened" class="form-label">Fecha de apertura</label>
                <input type="date" name="date_opened" id="date_opened" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="active" selected>Activo</option>
                    <option value="inactive">Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('accounts.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-main-view>
