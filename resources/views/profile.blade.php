<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h2>Profil Pengguna</h2>
    <ul>
        <li>Nama: {{ $data['nama'] }}</li>
        <li>Jenis Kelamin: {{ $data['kelamin'] }}</li>
        <li>Alamat: {{ $data['alamat'] }}</li>
        <li>Hobi:
            <ul>
                @foreach ($data['hobi'] as $hobi)
                    <li>{{ $hobi }}</li>
                @endforeach
            </ul>
        </li>
    </ul>
</body>
</html>
