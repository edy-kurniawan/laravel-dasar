<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesi 2</title>
</head>
<body>
    <h1>Ini adalah halaman Sesi 2</h1>

    {{-- menampilkan data array --}}
    <h2>Mata Kuliah</h2>
    <ul>
        @foreach ($mata_kuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>

    {{-- menampilkan variable dengan blade --}}
    <h2>Nama Mahasiswa : {{ $nama_mahasiwa }}</h2>
    <h2>Nama Mahasiswa : <?php echo $nama_mahasiwa; ?></h2>

    {{-- menuliskan kondisi dengan blade --}}
    @if ($jurusan == 'Teknik Informatika')
        <h2>BENAR</h2>
    @else
        <h2>SALAH</h2>
    @endif

    <?php if ($jurusan == 'Teknik Informatika'): ?>
        <h2>BENAR</h2>
    <?php else: ?>
        <h2>SALAH</h2>
    <?php endif; ?>

</body>
</html>