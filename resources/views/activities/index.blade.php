<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activities</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <ul>
        @extends('layouts.app')

        @section('content')
            <div class="container">
                <h1>Lista de Actividades</h1>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Paid</th>
                            <th>Satisfaction</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <td>{{ $activity->id }}</td>
                                <td>{{ $activity->type }}</td>
                                <td>{{ $activity->user->name ?? 'N/A' }}</td>
                                <td>{{ $activity->datetime }}</td>
                                <td>{{ $activity->paid ? 'Sí' : 'No' }}</td>
                                <td>{{ $activity->satisfaction ?? 'Unqualified ' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endsection
    </ul>
</body>
</html>