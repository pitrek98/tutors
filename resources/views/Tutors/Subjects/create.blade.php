<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - dodawanie przedmiotu</title>
</head>

<body>
    <div class="container">
        <div class="navigation"></div>
        <form action="{{ route('tutors.subjects.create') }}" method="post">
            @csrf
            <div>
                <label for="name">Nazwa</label>
                <input type="text" name="name" id="name">
            </div>
            <button type="submit">Dodaj</button>
        </form>
    </div>
</body>

</html>
