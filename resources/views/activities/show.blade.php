<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activity details</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    <div class="container">
        <h1>Details of activity (ID {{ $activity->id }})</h1>
        <table>
            <tbody>
                <tr>
                    <th>Tipo</th>
                    <td>{{ $activity->type }}</td>
                </tr>
                <tr>
                    <th>Usuario (ID: {{ $activity->user_id }})</th>
                    <td>
                        {{ $activity->user->name ?? 'N/A' }} 
                        ({{ $activity->user->email ?? 'Sin email' }})
                    </td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>{{ $activity->datetime }}</td>
                </tr>
                <tr>
                    <th>Pagado</th>
                    <td>{{ $activity->paid ? 'Sí' : 'No' }}</td>
                </tr>
                <tr>
                    <th>Satisfacción</th>
                    <td>{{ $activity->satisfaction }}</td>
                </tr>
                <tr>
                    <th>Notas</th>
                    <td>{{ $activity->notes }}</td>
                </tr>
            </tbody>
        </table>
        
        <a class="back-link" href="{{ route('activities.index') }}">Volver a la lista</a>
        
        <div class="actions">
            <a class="edit-btn" href="{{ route('activities.edit', $activity->id) }}">
                <i class="fa-solid fa-pen-to-square"></i> Editar actividad
            </a>
            
            <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" onsubmit="return confirm('¿Está seguro de que desea eliminar esta actividad?');" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn">
                    <i class="fa-solid fa-trash"></i> Delete activity
                </button>
            </form>
        </div>
    </div>
</body>
</html>