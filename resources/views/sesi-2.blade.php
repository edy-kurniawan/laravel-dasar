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

    {{-- menampilkan variable dengan blade --}}
    <h2>Nama : {{ $nama }}</h2>
    <h2>Nama : <?php echo $nama; ?></h2>

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