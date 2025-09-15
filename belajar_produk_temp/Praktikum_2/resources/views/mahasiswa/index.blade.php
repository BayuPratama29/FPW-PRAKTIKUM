<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        @foreach ($mahasiswa as $mhs)
            <li>{{ $mhs['nim'] }} - {{ $mhs['nama'] }} ({{ $mhs['jurusan'] }})</li>
        @endforeach
    </ul>
</body>
</html>
