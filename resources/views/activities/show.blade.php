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
                    <th>Type</th>
                    <td>{{ $activity->type }}</td>
                </tr>
                <tr>
                    <th>User (id = {{ $activity->user_id }})</th>
                    <td>
                        {{ $activity->user->name ?? 'N/A' }}
                        ({{ $activity->user->email ?? 'Sin email' }})
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{ $activity->datetime }}</td>
                </tr>
                <tr>
                    <th>Paid</th>
                    <td>{{ $activity->paid ? 'Sí' : 'No' }}</td>
                </tr>
                <tr>
                    <th>Satisfaction</th>
                    <td>{{ $activity->satisfaction }}</td>
                </tr>
                <tr>
                    <th>Notes</th>
                    <td>{{ $activity->notes }}</td>
                </tr>
            </tbody>
        </table>
        <a class="back-link" href="{{ route('activities.index') }}">Volver a la lista</a>
    </div>
</body>
</html>