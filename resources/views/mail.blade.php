<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - pisanie maila</title>
</head>

<body>
    <h3>Mail do: {{ $email }}</h3>
    <form action="{{ route('mail', ['id' => $id]) }}" method="POST">
        @csrf
        <label for="content">Treść maila:</label>
        <input type="text" name="content" id="content" style="width:300px; height:100px">
        <br>
        <button action="submit">Wyślij</button>
    </form>
</body>

</html>
