<?php
$conn = mysqli_connect("localhost", "root", "", "paw_apinn");

// $sql = "SELECT id_mhs, nrp, nama_mhs, nama_prodi, alamat_mhs FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi = p.id_prodi ORDER BY id_mhs ASC";
// menggabungkan 2 tabel
$sql_tbl = "SELECT * FROM Tbl_penjualan ORDER BY id_penjualan ASC";
$result_tbl = mysqli_query($conn, $sql_tbl);
$result_tbl_edit = mysqli_query($conn, $sql_tbl);
$result_tbl_delete = mysqli_query($conn, $sql_tbl);


$count = mysqli_num_rows($result_tbl);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Data Penjualan</h2>
        <p>Data ini dari MySQL : <?= $count; ?> data</p>
        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalTambah">
            Tambah
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>QTY</th>
                    <th>Harga Satuan</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result_tbl->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?= $row["id_penjualan"]; ?></td>
                        <td><?= $row["nama_barang"] ?></td>
                        <td><?= $row["qty"]; ?></td>
                        <td><?= $row["harga_satuan"]; ?></td>
                        <td>
                            <?php
                            $sub_total = $row["qty"] * $row["harga_satuan"];
                            echo $sub_total;
                            ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEdit<?= $row["id_penjualan"]; ?>">
                                Edit
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDelete<?= $row["id_penjualan"]; ?>">
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
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" required autofocus>
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="qty" name="qty" placeholder="Masukkan QTY" required>
                            <label for="qty" class="form-label">QTY</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="Masukkan Harga Satuan" required>
                            <label for="harga_satuan" class="form-label">Harga Satuan</label>
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
                    $nama_barang = $_POST["nama_barang"];
                    $qty = $_POST["qty"];
                    $harga_satuan = $_POST["harga_satuan"];

                    $sql_Select = "SELECT * FROM Tbl_penjualan WHERE nama_barang = '$nama_barang'";
                    $result_Select = mysqli_query($conn, $sql_Select);

                    if (mysqli_num_rows($result_Select) > 0) {
                        echo "<script>
                                    alert('Barang sudah ada');
                                </script>";
                    } else {
                        $sql_Insert = "INSERT INTO Tbl_penjualan (nama_barang, qty, harga_satuan) VALUES ('$nama_barang', '$qty', '$harga_satuan')";
                        $result_Insert = mysqli_query($conn, $sql_Insert);

                        if ($result_Insert) {
                            echo "<script>
                                        alert('Data berhasil ditambahkan');
                                        window.location.href = 'penjualan.php';
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
        <div class="modal fade" id="ModalEdit<?= $row_edit["id_penjualan"]; ?>">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <form action="" method="POST">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Data <?= $row_edit["nama_barang"]; ?></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" value="<?= $row_edit["nama_barang"]; ?>" required autofocus>
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="qty" name="qty" placeholder="Masukkan QTY" value="<?= $row_edit["qty"]; ?>" required>
                                <label for="qty" class="form-label">QTY</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="Masukkan Harga Satuan" value="<?= $row_edit["harga_satuan"]; ?>" required>
                                <label for="harga_satuan" class="form-label">Harga Satuan</label>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="hidden" name="id_penjualan" value="<?= $row_edit["id_penjualan"]; ?>">
                            <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>

                    <!-- edit data ke database dengan button edit -->
                    <?php
                    if (isset($_POST["edit"])) {
                        $id_penjualan = $_POST["id_penjualan"];
                        $nama_barang = $_POST["nama_barang"];
                        $qty = $_POST["qty"];
                        $harga_satuan = $_POST["harga_satuan"];

                        $sql_Update = "UPDATE Tbl_penjualan SET nama_barang = '$nama_barang', qty = '$qty', harga_satuan = '$harga_satuan' WHERE id_penjualan = '$id_penjualan'";
                        $result_Update = mysqli_query($conn, $sql_Update);

                        if ($result_Update) {
                            echo "<script>
                                        alert('Data berhasil diubah');
                                        window.location.href = 'penjualan.php';
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
        <div class="modal fade" id="ModalDelete<?= $row_delete["id_penjualan"]; ?>">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <form action="" method="POST">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Hapus Data <?= $row_delete["nama_barang"]; ?></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus data <?= $row_delete["nama_barang"]; ?> ?</p>
                            <div class="card mx-auto" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Nama Barang &nbsp&nbsp&nbsp : <?= $row_delete["nama_barang"]; ?></li>
                                    <li class="list-group-item">QTY&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <?= $row_delete["qty"]; ?></li>
                                    <li class="list-group-item">Harga Satuan : <?= $row_delete["harga_satuan"]; ?></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="hidden" name="id_penjualan" value="<?= $row_delete["id_penjualan"]; ?>">
                            <input type="submit" class="btn btn-danger" name="delete" value="Hapus">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>

                    <!-- hapus data ke database dengan button hapus -->
                    <?php
                    if (isset($_POST["delete"])) {
                        $id_penjualan = $_POST["id_penjualan"];

                        $sql_Delete = "DELETE FROM Tbl_penjualan WHERE id_penjualan = '$id_penjualan'";
                        $result_Delete = mysqli_query($conn, $sql_Delete);

                        if ($result_Delete) {
                            echo "<script>
                                        alert('Data berhasil dihapus');
                                        window.location.href = 'penjualan.php';
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