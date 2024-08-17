<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All User</title>
</head>

<body>
    <nav>
        <a href="{{ route('all') }}">Home</a>
        <a href="{{ route('create') }}">Create</a>
    </nav>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Tools</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <th>{{ $user->name }}</th>
                <th>{{ $user->email }}</th>
                <th>
                    <a href="{{ route('update', $user) }}">Update</a>
                    <a href="{{ route('delete', $user) }}">Delete</a>
                </th>
            </tr>
        @endforeach
    </table>
</body>

</html>
