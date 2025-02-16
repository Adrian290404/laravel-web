<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Nueva Actividad</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Nueva Actividad</h1>
        <form action="{{ route('activities.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="type">Tipo</label>
                <select name="type" id="type">
                    <option value="">Seleccione el tipo de actividad</option>
                    <option value="surf" {{ old('type') == 'surf' ? 'selected' : '' }}>Surf</option>
                    <option value="windsurf" {{ old('type') == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
                    <option value="kayak" {{ old('type') == 'kayak' ? 'selected' : '' }}>Kayak</option>
                    <option value="atv" {{ old('type') == 'atv' ? 'selected' : '' }}>ATV</option>
                    <option value="hot air ballon" {{ old('type') == 'hot air ballon' ? 'selected' : '' }}>Hot Air Ballon</option>
                </select>
                @error('type')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="user_id">ID de Usuario</label>
                <input type="number" name="user_id" id="user_id" value="{{ old('user_id') }}">
                @error('user_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="datetime">Fecha y Hora</label>
                <input type="datetime-local" name="datetime" id="datetime" value="{{ old('datetime') }}">
                @error('datetime')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="paid">Pagado</label>
                <select name="paid" id="paid">
                    <option value="">Seleccione opción</option>
                    <option value="1" {{ old('paid') === '1' ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ old('paid') === '0' ? 'selected' : '' }}>No</option>
                </select>
                @error('paid')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="notes">Notas</label>
                <textarea name="notes" id="notes" rows="4">{{ old('notes') }}</textarea>
                @error('notes')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="satisfaction">Satisfacción (0-10, opcional)</label>
                <input type="number" name="satisfaction" id="satisfaction" value="{{ old('satisfaction') }}" min="0" max="10">
                @error('satisfaction')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Crear Actividad</button>
        </form>
    </div>
</body>
</html>
