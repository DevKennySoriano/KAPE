<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>

   
    <h1>List of All Users</h1>

    <ul>
        @foreach($users as $user)
        <li>
            <p>{{$user['name']}}</p>
            <a href="/viewusers/{{ $user['id'] }}">View Details</a>
        </li>
        @endforeach
    </ul>
</body>
</html>