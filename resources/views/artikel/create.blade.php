<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Artikel</title>
</head>
<body>
    <h1>Ini halaman untuk membuat artikel</h1>
    <form action="{{ route('artikel.store') }}" method="POST">
        @csrf
        <div>
            <label for="judul">Judul Artikel</label>
            <input type="text" name="judul" id="judul">
        </div>
        <div>
            <label for="isi">Isi Artikel</label>
            <input type="text" name="isi" id="isi">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>