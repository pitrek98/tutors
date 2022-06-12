<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - lista</title>
</head>

<body>
    <div class="container">
        <h3>Korepetytorzy</h3>
        <div class="navigation"></div>
        <div class="tutors">
            <div class="filters"></div>
            <form action="" method="GET">
                <label for="subject">Przedmiot: </label>
                <input type="text" name="subject" id="subject">
                <button action="submit">Filtruj</button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Imię i nazwisko</th>
                        <th>Ocena</th>
                        <th>Szczegóły</th>
                        <th>Przedmiot</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tutors as $tutor)
                        <tr>
                            <td>{{ $tutor->id }}</td>
                            <td>{{ $tutor->name }}</td>
                            <td>{{ $tutor->mark }}</td>
                            <td>{{ $tutor->description }}</td>
                            <td>{{ $tutor->subject->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
