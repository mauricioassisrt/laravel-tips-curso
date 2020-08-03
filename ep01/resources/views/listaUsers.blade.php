<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <h1>{{ $user->name }}</h1>

    <h1>{{ $user->email }}</h1>

    <h1>{{ date('d/m/y ', strtotime($user->created_at))  }}</h1>
</body>

</html>
