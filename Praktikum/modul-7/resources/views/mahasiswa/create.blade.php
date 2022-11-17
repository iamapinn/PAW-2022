<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>{{ $title }}</h2>
        <form action="{{ url('mahasiswa/add_mhs') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <input type="submit" name="submit" value="Tambah Data" class="btn btn-primary mt-3">
        </form>
    </div>

</body>

</html>
