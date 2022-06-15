<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - strona główna</title>
</head>

<body>
    <h1 style="color:orange; background-color:black">STRONA GDZIE MOŻESZ ZNALEŹĆ SOBIE KOREPETYTORA JAK CHCESZ</h1>
    <a href="{{ route('tutors.list') }}">Lista korepetytorów</a><br>
    <a href="{{ route('tutors.subjects.list') }}">Lista przedmiotów</a><br>
</body>

</html>
