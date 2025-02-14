<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activities</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <ul>
        <div class="container">
            <h1>List of Activities</h1>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>User ID</th>
                        <th>User email</th>
                        <th>Date</th>
                        <th>Paid</th>
                        <th>Satisfaction</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                        <tr onclick="window.location.href='{{ route('activities.show', $activity->id) }}'">
                            <td>{{ $activity->id }}</td>
                            <td>{{ $activity->type }}</td>
                            <td>{{ $activity->user_id }}</td>
                            <td>{{ $activity->user->email ?? 'N/A' }}</td>
                            <td>{{ $activity->datetime }}</td>
                            <td>{{ $activity->paid ? 'Yes' : 'No' }}</td>
                            <td>{{ $activity->satisfaction ?? 'Unqualified ' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </ul>
</body>
</html>