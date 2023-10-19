<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesi 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Ini adalah halaman Sesi 2</h1>


    {{-- menampilkan data array dengan blade --}}
    <h2>Mata Kuliah</h2>
    <ul>
        @foreach ($mata_kuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>

    {{-- menampilkan variable dengan blade --}}
    <h2>Nama : {{ $nama }}</h2>
    <h2>Nama : <?php echo $nama; ?></h2>

    {{-- menuliskan pengkondisian dengan blade --}}
    @if ($nama == 'Rizky Khapidsyah')
        <h2>Halo, {{ $nama }}</h2>
    @else
        <h2>Halo, Pengunjung</h2>
    @endif

    <?php if ($nama == 'Rizky Khapidsyah'): ?>
        <h2>Halo, <?php echo $nama; ?></h2>
    <?php else: ?>
        <h2>Halo, Pengunjung</h2>
    <?php endif; ?>

    <div class="card" style="width: 18rem;">
        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>