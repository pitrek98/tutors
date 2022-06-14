<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - lista przedmiotów</title>
</head>

<body>
    <div class="container" style="border-style: double">
        <h3>Przedmioty</h3>
        <div class="navigation">
            <a href="/">Strona Główna</a><br>
            <a href='{{ route('tutors.subjects.create') }}'>Dodaj przedmiot</a><br><br>
        </div>
        <div class="subjects">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nazwa</th>
                        <th>Lista korepetytorów</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td>{{ $subject->name }}</td>
                            <td><a href="{{ route('tutors.subjects.show', ['id' => $subject->id]) }}">Wyświetl
                                    korepetytorów</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
