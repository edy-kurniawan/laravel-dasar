<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesi 2</title>
</head>
<body>
    <h1>Ini Halaman Sesi 2</h1>

    {{-- deklarasi variable --}}

    <h4>Mata Pelajaran</h4>
    <ul>
        @foreach ($mata_pelajaran as $mp)
            <li>{{ $mp }}</li>
        @endforeach
    </ul>

    <h2>Nama Saya Adalah {{ $nama_siswa }}</h2>
    <h2>Umur Saya Adalah <?php echo $umur; ?></h2>

    @if ($umur > 18)
        <h2>Umur Saya Lebih Dari 18 Tahun</h2>
    @else
        <h2>Umur Saya Kurang Dari 18 Tahun</h2>
    @endif

    <?php if ($umur > 18): ?>
        <h2>Umur Saya Lebih Dari 18 Tahun</h2>
    <?php else: ?>
        <h2>Umur Saya Kurang Dari 18 Tahun</h2>
    <?php endif; ?>

</body>
</html>