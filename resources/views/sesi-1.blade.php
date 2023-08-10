<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesi 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Kelas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>{{ $nama }}</td>
                        <td><?php echo $nim ?></td>
                        <td>{{ $kelas }}</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>
                            @if ($nama != "")
                                {{ $nama }}
                            @else
                                Nama Kosong
                            @endif
                        </td>
                        <td>
                            <?php 
                                if ($nim != "") {
                                    echo $nim;
                                } else {
                                    echo "NIM Kosong";
                                }
                            ?>
                        </td>
                        <td>{{ $kelas }}</td>
                    </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>