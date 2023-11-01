<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Sesi 2</h1>

    {{-- menampilkan variable dengan blade --}}
    <h2>Nama : {{ $nama }}</h2>
    <h2>Nama : <?php echo $nama; ?></h2>

    {{-- kondisi menggunakan blade --}}
    @if ($nama == 'Rizky Khapidsyah')
        <h2>Benar</h2>
    @else
        <h2>Salah</h2>
    @endif

    <?php if ($nama == 'Rizky Khapidsyah'): ?>
        <h2>Benar</h2>
    <?php else: ?>
        <h2>Salah</h2>
    <?php endif; ?>

</body>
</html>