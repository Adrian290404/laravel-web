<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Actividades</title>
</head>
<body>
    <h1>List of activities</h1>
    <ul>
        @foreach($activities as $activity)
            <li>
                Activity: {{ $activity->type }} <br>
                Date: {{ $activity->datetime }} <br>
                User: {{ $activity->user->name ?? 'User not found' }}
            </li>
        @endforeach
    </ul>
</body>
</html>