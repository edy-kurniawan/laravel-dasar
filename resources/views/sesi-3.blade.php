<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesi 3</title>
</head>
<body>
    <h3>Nama : {{ $nama }}</h3>
    <h3>Nim : {{ $nim }}</h3>
    <h3>Mata Kuliah</h3>
    <ul>
        @foreach ($matkul as $m)
            <li>{{ $m }}</li>
        @endforeach
    </ul>
    <h3>Artikel : </h3>
    <ul>
        @foreach ($artikel as $item)
            <li>Judul : {{ $item->judul }}</li>
            <li>Slug : {{ $item->slug }}</li>
            <li>Tanggal : {{ $item->tanggal }}</li>
            <li>Isi : {{ $item->isi }}</li>
        @endforeach
    </ul>
</body>
</html>