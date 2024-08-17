<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>

<body>
    <nav>
        <a href="{{ route('all') }}">Home</a>
        <a href="{{ route('create') }}">Create</a>
    </nav>
    <div>
        <b>ID: </b> <span>{{ $user->id }}</span><br>
        <b>Name: </b> <span>{{ $user->name }}</span><br>
        <b>Email: </b> <span>{{ $user->email }}</span><br>
        <b>Created_at: </b> <span>{{ $user->created_at }}</span><br>
        <b>Updated_at: </b> <span>{{ $user->updated_at }}</span><br>
    </div>
</body>

</html>
