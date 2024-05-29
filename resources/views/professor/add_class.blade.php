<!DOCTYPE html>
<html>
<head>
    <title>Dodavanje novog časa</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<h2>Dodavanje novog časa</h2>
<form method="POST" action="{{ route('professor.storeClass') }}">
    @csrf
    <label for="name">Ime časa:</label><br>
    <input type="text" id="class_name" name="class_name"><br><br>

    <label for="section">Odjeljenje:</label><br>
    <select id="section" name="section">
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
        <option value="IV">IV</option>
        \
    </select><br><br>

    <button type="submit">Dodaj čas</button>
</form>
</body>
</html>
