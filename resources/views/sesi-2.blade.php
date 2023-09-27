<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- css bootsrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>Ini halaman sesi 2</h1>

    {{-- perbedaan syntak blade dan php --}}
    {{-- menampilkan variable dengan blade --}}
    <h2>Nama : {{ $mahasiswa }}</h2>
    <h2>
        <?php echo 'Nama : ' . $mahasiswa ?>
    </h2>

    {{-- pengkondisian dengan blade --}}
    @if ($mahasiswa == 'Eko')
    <h2>Halo Eko</h2>
    @else
    <h2>Halo bukan Eko</h2>
    @endif
    <?php if ($mahasiswa == 'Eko'): ?>
    <h2>Halo Eko</h2>
    <?php else: ?>
    <h2>Halo bukan Eko</h2>
    <?php endif ?>

    {{-- menampilkan data array dengan looping --}}
    @foreach ($mataKuliah as $mk)
    <li>{{ $mk }}</li>
    @endforeach

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>