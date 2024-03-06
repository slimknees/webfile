{{-- resources/views/files/index.blade.php --}}

<!DOCTYPE html>
<html>
<head>
    <title>File Management</title>
</head>
<body>
    <h1>File List</h1>
    <ul>
        @foreach ($files as $file)
            <li><a href="{{ Storage::url($file) }}">{{ basename($file) }}</a></li>
        @endforeach
    </ul>
</body>
</html>
