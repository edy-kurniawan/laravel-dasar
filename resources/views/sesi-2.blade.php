<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini halaman sesi 2</h1>

    {{-- menampilkan data array --}}
    <ul>
        @foreach ($mataKuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>

    {{-- menampilkan variable --}}
    <p>Nama : {{ $nama }}</p>
    <p>Nama : <?php echo $nama ?></p>

    {{-- kondisi --}}
    @if ($nama == 'Rizky Khoirul Anam')
        <p>Benar</p>
    @else
        <p>Salah</p>
    @endif

    <?php if ($nama == 'Rizky Khoirul Anam'): ?>
        <p>Benar</p>
    <?php else: ?>
        <p>Salah</p>
    <?php endif ?>

    

</body>
</html>