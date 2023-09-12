<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini adalah halaman sesi 2</h1>

    {{-- menampilkan suatu variable dengan blade --}}
    {{-- syntak blade --}}
    <h2>Nama : {{ $nama_siswa }}</h2>
    {{-- syntak php --}}
    <h2>Umur : <?php echo $umur; ?></h2>

    {{-- menuliskan pengkondisian dengan blade --}}
    {{-- syntak blade --}}
    @if ($umur > 18)
        <h2>Anda sudah dewasa</h2>
    @else
        <h2>Anda masih dibawah umur</h2>
    @endif

    {{-- syntak php --}}
    <?php if($umur > 18): ?>
        <h2>Anda sudah dewasa</h2>
    <?php else: ?>
        <h2>Anda masih dibawah umur</h2>
    <?php endif; ?>

    {{-- menampilkan data array dengan blade --}}
    {{-- syntak blade --}}
    <ul>
        @foreach ($mataKuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>

    {{-- syntak php --}}
    <ul>
        <?php foreach($mataKuliah as $mk): ?>
            <li><?php echo $mk; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>