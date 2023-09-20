<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Sesi 2</h1>

    {{-- menampilkan suatu variable --}}
    <h2>Nama : {{ $nama }}</h2>
    <h2>Nama : <?php echo $nama ?></h2>

    {{-- menuliskan kondisi menggunakan blade --}}
    @if ($umur >= 17)
        <h2>Anda sudah dewasa</h2>
    @else
        <h2>Anda belum dewasa</h2>
    @endif

    <?php if ($umur >= 17): ?>
        <h2>Anda sudah dewasa</h2>
    <?php else: ?>
        <h2>Anda belum dewasa</h2>
    <?php endif; ?>

    {{-- menampilkan data array --}}
    <ul>
        @foreach ($mataKuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>

</body>
</html>