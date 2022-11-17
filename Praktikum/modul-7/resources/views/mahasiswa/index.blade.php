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
        <h2>Data Mahasiswa</h2>
        <p>Data ini dari MySQL : {{ $count }} data</p>
        {{-- add data --}}
        <a href="{{ url('mahasiswa/create') }}" class="btn btn-outline-primary btn-sm">Tambah Data</a>
        {{-- table --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NRP</th>
                    <th>Nama Mahasiswa</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tbl_mhs as $mhs)
                    <tr>
                        <td>{{ $mhs->nrp }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->alamat }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>
                            <a href="{{ url('mahasiswa/' . $mhs->nrp . '/update') }}"
                                class="btn btn-outline-success btn-sm">Edit</a>
                            <form action="{{ url('mahasiswa/' . $mhs->nrp) }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <input type="submit" name="delete" value="Delete"
                                    class="btn btn-outline-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>
