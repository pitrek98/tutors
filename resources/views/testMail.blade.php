<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Uczeń {{ $details['username'] }} wysyła ci wiadomość!</h3>
    <h3>{{ $details['title'] }}</h3>
    <p>{{ $details['body'] }}</p>
</body>

</html>
