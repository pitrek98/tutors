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
                    </tr>
                </thead>

                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td>{{ $subject->name }}</td>
                            {{-- <td><button><a href="{{ route('tutors.show', ['id' => $tutor->id]) }}">Wyświetl
                                        korepetytora</a></button></td>
                            <form action='{{ route('tutors.destroy', ['id' => $tutor->id]) }}' method='POST'>
                                @csrf
                                <td><button action='submit'>Usuń korepetytora</button></td>
                            </form> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
