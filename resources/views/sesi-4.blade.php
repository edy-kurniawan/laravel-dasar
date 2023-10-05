<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesi 4</title>
</head>
<body>
    <h1>Ini adalah halaman Sesi 4</h1>
    <p>Ini judul data artikel</p>
    <ul>
        @foreach ($artikel as $item)
            <li>{{ $item->judul }}</li>
        @endforeach
    </ul>
</body>
</html>