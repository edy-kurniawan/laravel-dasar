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

    {{-- menampilkan variable dengan syntak blade --}}
    <p>Nama Saya : {{ $nama_siswa }}</p>
    <p>Umur Saya : <?php echo $umur; ?></p>

    {{-- menampilkan array / looping dengan syntak blade --}}
    <ul>
        @foreach ($mata_pelajaran as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    {{-- menuliskan pengkondisian dengan blade --}}
    @if ($umur > 18)
        <p>Umur saya lebih dari 18 tahun</p>
    @else
        <p>Umur saya kurang dari 18 tahun</p>
    @endif

    <?php
        if ($umur > 18) {
            echo '<p>Umur saya lebih dari 18 tahun</p>';
        } else {
            echo '<p>Umur saya kurang dari 18 tahun</p>';
        }
    ?>

</body>
</html>