<!doctype html>

<html>

<head>
    
    <title></title>

</head>

<body>

	@foreach ($users as $user)

        <li><h1>Hello, {{ $user->name }}</h1></li>

    @endforeach

</body>

</html>
