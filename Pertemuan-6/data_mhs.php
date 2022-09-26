<?php
$conn = mysqli_connect("localhost", "root", "", "campus");

$sql = "SELECT id_mhs, nrp, nama_mhs, nama_prodi, alamat_mhs FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi = p.id_prodi ORDER BY id_mhs ASC";
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
        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalTambah">
            Tambah
        </button>
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

    <!-- Modal Tambah -->
    <div class="modal fade" id="ModalTambah">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" required>
                        </div>
                        <div class="mb-3">
                            <label for="id_prodi" class="form-label">Prodi</label>
                            <select class="form-select" aria-label="Default select example" id="id_prodi" name="id_prodi" required>
                                <option disabled selected>Pilih Prodi</option>
                                <?php
                                $sql = "SELECT * FROM tbl_prodi";
                                $result = mysqli_query($conn, $sql);
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <option value="<?= $row["id_prodi"]; ?>"> <?= $row["nama_prodi"]; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_mhs" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat_mhs" name="alamat_mhs" placeholder="Masukkan Alamat" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>

                        <?php
                        if (isset($_POST["tambah"])) {
                            $nim = $_POST["nim"];
                            $nama_mhs = $_POST["nama_mhs"];
                            $id_prodi = $_POST["id_prodi"];
                            $alamat_mhs = $_POST["alamat_mhs"];

                            $sql_Select = "SELECT * FROM tbl_mhs WHERE nrp = '$nim'";
                            $result_Select = mysqli_query($conn, $sql_Select);

                            if (mysqli_num_rows($result_Select) > 0) {
                                echo "<script>
                                    alert('NIM sudah ada');
                                </script>";
                            } else {
                                $sql_Insert = "INSERT INTO tbl_mhs (nrp, nama_mhs, id_prodi, alamat_mhs) VALUES ('$nim', '$nama_mhs', '$id_prodi', '$alamat_mhs')";
                                $result_Insert = mysqli_query($conn, $sql_Insert);

                                if ($result_Insert) {
                                    echo "<script>
                                        alert('Data berhasil ditambahkan');
                                        window.location.href = 'data_mhs.php';
                                    </script>";
                                } else {
                                    echo "<script>
                                        alert('Data gagal ditambahkan');
                                    </script>";
                                }
                            }
                        }
                        ?>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</body>

</html>