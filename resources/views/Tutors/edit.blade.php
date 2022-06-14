<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korepetytorzy - edytowanie</title>
</head>

<body>
    <div class="container">
        <div class="navigation"></div>
        <form action="{{ route('tutors.edit', ['id' => $tutor->id]) }}" method="post">
            @csrf
            <div>
                <label for="name">Imię i nazwisko</label>
                <input type="text" name="name" id="name" value="{{ $tutor->name }}">
            </div>
            <div>
                <label for="mark">Ocena</label>
                <input type="number" name="mark" id="mark" min="1" max="6" value="{{ $tutor->mark }}">
            </div>
            <div>
                <label for="description">Opis</label>
                <input type="text" name="description" id="description" value={{ $tutor->description }}>
            </div>
            <div>
                <label for="subject_id">Przedmiot:</label>
                <select name="subject_id" id="subject_id">
                    @foreach ($subjects as $subject)
                        @if ($subject->id == $tutor->subject->id)
                            <option value="{{ $subject->id }}" selected>{{ $subject->name }}</option>
                        @else
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit">Zapisz</button>
        </form>
    </div>
</body>

</html>
