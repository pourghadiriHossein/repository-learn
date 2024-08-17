<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>

<body>
    <nav>
        <a href="{{ route('all') }}">Home</a>
        <a href="{{ route('create') }}">Create</a>
    </nav>
    <form action="{{ route('postCreate') }}" method="post">
        @if ($errors->all())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @csrf
        <input type="text" name="name" placeholder="Enter name" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Enter password" value="{{ old('password') }}">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
