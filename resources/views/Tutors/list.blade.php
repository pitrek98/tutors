<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - lista</title>
</head>

<body>
    <div class="container" style="border-style: double">
        <h3>Korepetytorzy</h3>
        <div class="navigation">
            <a href="/">Strona Główna</a><br>
            <a href='{{ route('tutors.create') }}'>Dodaj korepetytora</a><br><br>
        </div>
        <div class="tutors">
            <div class="filters" style='float: left;'>
                <form action="" method="GET">
                    <label for="name">Imię i nazwisko: </label>
                    <input type="text" name="name" id="name">
                    <label for="subject_id">Przedmiot:</label>
                    <select name="subject_id" id="subject_id">
                        <option value="">Wszystkie</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                    <button action="submit">Filtruj</button>
                </form>
            </div>
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Imię i nazwisko</th>
                        <th>Ocena</th>
                        <th>Przedmiot</th>
                        <th>Wyświetl szczegóły</th>
                        <th>Usuń korepetytora</th>
                        <th>Edytuj korepetytora</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tutors as $tutor)
                        <tr>
                            <td>{{ $tutor->id }}</td>
                            <td>{{ $tutor->name }}</td>
                            <td>{{ $tutor->mark }}</td>
                            <td>{{ $tutor->subject->name }}</td>
                            <td><button><a href="{{ route('tutors.show', ['id' => $tutor->id]) }}">Wyświetl
                                        korepetytora</a></button></td>
                            <form action='{{ route('tutors.destroy', ['id' => $tutor->id]) }}' method='POST'>
                                @csrf
                                <td><button action='submit'>Usuń korepetytora</button></td>
                            </form>
                            <td><button><a href="{{ route('tutors.edit', ['id' => $tutor->id]) }}">Edytuj
                                        korepetytora</a></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
