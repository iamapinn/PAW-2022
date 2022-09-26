<?php
$conn = mysqli_connect("localhost", "root", "", "campus");

$sql = "SELECT id_mhs, nrp, nama_mhs, nama_prodi, alamat_mhs FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi = p.id_prodi";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Data Mahasiswa</h2>
        <p>Data ini dari MySQL : <?= $count; ?> data</p>
        <button type="button" class="btn btn-outline-primary btn-sm">Tambah</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?= $row["id_mhs"]; ?></td>
                        <td><?= $row["nrp"] ?></td>
                        <td><?= $row["nama_mhs"]; ?></td>
                        <td><?= $row["nama_prodi"]; ?></td>
                        <td><?= $row["alamat_mhs"]; ?></td>
                        <td>
                            <button type="button" class="btn btn-outline-info btn-sm">Edit</button>
                            <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>