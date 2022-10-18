<?php
$conn = mysqli_connect("localhost", "root", "", "campus");

// $sql = "SELECT id_mhs, nrp, nama_mhs, nama_prodi, alamat_mhs FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi = p.id_prodi ORDER BY id_mhs ASC";
// menggabungkan 2 tabel
$sql_tbl = "SELECT * FROM tbl_prodi ORDER BY id_prodi ASC";
$result_tbl = mysqli_query($conn, $sql_tbl);
$result_tbl_edit = mysqli_query($conn, $sql_tbl);
$result_tbl_delete = mysqli_query($conn, $sql_tbl);

// tampilkan tbl_prodi
$sql_prodi = "SELECT * FROM tbl_prodi";
$result_prodi = mysqli_query($conn, $sql_prodi);

$count = mysqli_num_rows($result_tbl);
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
        <h2>Data Prodi</h2>
        <p>Data ini dari MySQL : <?= $count; ?> data</p>
        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalTambah">
            Tambah
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Prodi</th>
                    <th>Status Prodi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result_tbl->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?= $row["id_prodi"]; ?></td>
                        <td><?= $row["nama_prodi"] ?></td>
                        <td><?= $row["ket_prodi"]; ?></td>
                        <td>
                            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEdit<?= $row["id_prodi"]; ?>">
                                Edit
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDelete<?= $row["id_prodi"]; ?>">
                                Delete
                            </button>
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

                <form action="" method="POST">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required autofocus>
                            <label for="nim" class="form-label">NIM</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" required>
                            <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" aria-label="Floating label select example" id="id_prodi" name="id_prodi" required>
                                <option disabled selected>Pilih Fakultas</option>
                                <?php
                                while ($row_prodi = $result_prodi->fetch_assoc()) { ?>
                                    <option value="<?= $row_prodi["id_prodi"]; ?>"> <?= $row_prodi["nama_prodi"]; ?> </option>
                                <?php } ?>
                            </select>
                            <label for="id_prodi">Fakultas</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Masukkan Alamat" name="alamat_mhs" id="alamat_mhs" style="height: 100px"></textarea>
                            <label for="alamat_mhs">Alamat</label>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>

                <!-- tambah data ke database dengan button tambah -->
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

            </div>
        </div>
    </div>
    <!-- End Modal Tambah -->

    <!-- Modal Edit -->
    <?php
    while ($row_edit = $result_tbl_edit->fetch_assoc()) {
    ?>
        <div class="modal fade" id="ModalEdit<?= $row_edit["id_mhs"]; ?>">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <form action="" method="POST">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Data <?= $row_edit["nama_mhs"]; ?></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" value="<?= $row_edit["nama_mhs"]; ?>" required autofocus>
                                <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Floating label select example" id="id_prodi" name="id_prodi" required>
                                    <option disabled selected>Pilih Fakultas</option>
                                    <?php
                                    $sql_prodi_edit = "SELECT * FROM tbl_prodi";
                                    $result_prodi_edit = mysqli_query($conn, $sql_prodi_edit);
                                    while ($row_prodi_edit = $result_prodi_edit->fetch_assoc()) { ?>
                                        <option value="<?= $row_prodi_edit["id_prodi"]; ?>" <?php if ($row_prodi_edit["id_prodi"] == $row_edit["id_prodi"]) {
                                                                                                echo "selected";
                                                                                            } ?>> <?= $row_prodi_edit["nama_prodi"]; ?> </option>
                                    <?php } ?>
                                </select>
                                <label for="id_prodi">Fakultas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Masukkan Alamat" name="alamat_mhs" id="alamat_mhs" style="height: 100px"><?= $row_edit["alamat_mhs"]; ?></textarea>
                                <label for="alamat_mhs">Alamat</label>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="hidden" name="id_mhs" value="<?= $row_edit["id_mhs"]; ?>">
                            <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>

                    <!-- edit data ke database dengan button edit -->
                    <?php
                    if (isset($_POST["edit"])) {
                        $id_mhs = $_POST["id_mhs"];
                        $nama_mhs = $_POST["nama_mhs"];
                        $id_prodi = $_POST["id_prodi"];
                        $alamat_mhs = $_POST["alamat_mhs"];

                        $sql_Update = "UPDATE tbl_mhs SET nama_mhs = '$nama_mhs', id_prodi = '$id_prodi', alamat_mhs = '$alamat_mhs' WHERE id_mhs = '$id_mhs'";
                        $result_Update = mysqli_query($conn, $sql_Update);

                        if ($result_Update) {
                            // kembali ke file data_mhs.php bukan dengan javascript
                            echo "<script>
                                        alert('Data berhasil diubah');
                                        window.location.href = 'data_mhs.php';
                                    </script>";
                        } else {
                            echo "<script>
                                        alert('Data gagal diubah');
                                    </script>";
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Modal Edit -->

    <!-- Modal Delete -->
    <?php
    while ($row_delete = $result_tbl_delete->fetch_assoc()) {
    ?>
        <div class="modal fade" id="ModalDelete<?= $row_delete["id_mhs"]; ?>">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <form action="" method="POST">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Hapus Data <?= $row_delete["nama_mhs"]; ?></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus data <?= $row_delete["nama_mhs"]; ?> ?</p>
                            <div class="card mx-auto" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Nama &nbsp&nbsp&nbsp : <?= $row_delete["nama_mhs"]; ?></li>
                                    <li class="list-group-item">NIM&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <?= $row_delete["nrp"]; ?></li>
                                    <li class="list-group-item">Fakultas : <?= $row_delete["nama_prodi"]; ?></li>
                                    <li class="list-group-item">Alamat &nbsp : <?= $row_delete["alamat_mhs"]; ?></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="hidden" name="id_mhs" value="<?= $row_delete["id_mhs"]; ?>">
                            <input type="submit" class="btn btn-danger" name="delete" value="Hapus">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>

                    <!-- hapus data ke database dengan button hapus -->
                    <?php
                    if (isset($_POST["delete"])) {
                        $id_mhs = $_POST["id_mhs"];

                        $sql_Delete = "DELETE FROM tbl_mhs WHERE id_mhs = '$id_mhs'";
                        $result_Delete = mysqli_query($conn, $sql_Delete);

                        if ($result_Delete) {
                            echo "<script>
                                        alert('Data berhasil dihapus');
                                        window.location.href = 'data_mhs.php';
                                    </script>";
                        } else {
                            echo "<script>
                                        alert('Data gagal dihapus');
                                    </script>";
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Modal Delete -->

</body>

</html>