<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - pisanie maila</title>
</head>

<body>
    <h3>Mail do: {{ $name }}</h3>
    <form action="{{ route('email.send') }}" method="POST">
        @csrf
        <input type="text" name="email" id="email" value="{{ $email }}" hidden>
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" name="username" id="username">
        <label for="title">Tytuł:</label>
        <input type="text" name="title" id="title">
        <label for="message">Treść maila:</label>
        <input type="text" name="message" id="message" style="width:300px; height:100px">
        <br>
        <button action="submit">Wyślij</button>
    </form>
</body>

</html>
