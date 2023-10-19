<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesi 4</title>
</head>
<body>
    <ul>
        @foreach ($artikel as $data)
            <li>{{ $data->judul }}</li>
            <li>{{ $data->tanggal }}</li>
        @endforeach
    </ul>
</body>
</html>