<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Edit User: {{ $user->name }}</h1>

    @if ($errors->has('role'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('role') }}
        </div>
    @endif

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

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select id="role" name="role" class="form-control">
                <option value="headmaster" {{ $user->role == 'headmaster' ? 'selected' : '' }}>Headmaster</option>
                <option value="professor" {{ $user->role == 'professor' ? 'selected' : '' }}>Professor</option>
                <option value="student" {{ $user->role == 'student' ? 'selected' : '' }}>Student</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Back to Dashboard</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
