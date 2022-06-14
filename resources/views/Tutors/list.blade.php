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
        <div class="navigation"></div>
        <div class="tutors">
            <div class="filters"></div>
            <form action="" method="GET">
                <label for="name">Imię i nazwisko: </label>
                <input type="text" name="name" id="name">
                <button action="submit">Filtruj</button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Imię i nazwisko</th>
                        <th>Ocena</th>
                        <th>Przedmiot</th>
                        <th>Wyświetl szczegóły</th>
                        <th>Usuń korepetytora</th>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
