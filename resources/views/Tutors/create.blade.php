<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - dodawanie</title>
</head>

<body>
    <div class="container">
        <div class="navigation"></div>
        <form action="{{ route('tutors.create') }}" method="post">
            @csrf
            <div>
                <label for="name">Imię i nazwisko</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="mark">Ocena</label>
                <input type="number" name="mark" id="mark">
            </div>
            <div>
                <label for="description">Opis</label>
                <input type="text" name="description" id="description">
            </div>
            <div>
                <label for="subject_id">Przedmiot:</label>
                <select name="subject_id" id="subject_id">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Dodaj</button>
        </form>
    </div>
</body>

</html>
