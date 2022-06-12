<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - szczegóły</title>
</head>

<body>
    <h3>Szczegóły korepetytora</h3>
    <ul>
        <li>Id: {{ $tutor->id }}</li>
        <li>Imię i nazwisko: {{ $tutor->name }}</li>
        <li>Ocena: {{ $tutor->mark }}</li>
        <li>Opis: {{ $tutor->description }}</li>
        <li>Przedmiot: {{ $tutor->subject->name }}</li>
    </ul>
</body>

</html>
