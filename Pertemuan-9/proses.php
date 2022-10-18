<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_218");

// Menampilkan data pada file tampil.php
$sql_tampil = "SELECT * FROM tbl_apinn";
$query_tampil = mysqli_query($koneksi, $sql_tampil);

// Menampilkan data pada file form_edit.php
if (isset($_GET["id_apinn"])) {
    $id_apinn = $_GET["id_apinn"];
    $sql_edit = "SELECT * FROM tbl_apinn WHERE id_apinn = '$id_apinn'";
    $query_edit = mysqli_query($koneksi, $sql_edit);
}

// Menambah data pada file form_tambah.php
if (isset($_POST["tambah"])) {
    $nama_apinn = $_POST["nama_apinn"];
    $alamat_apinn = $_POST["alamat_apinn"];

    $query_tambah = mysqli_query($koneksi, "INSERT INTO tbl_apinn (nama_apinn, alamat_apinn) VALUES ('$nama_apinn', '$alamat_apinn')");

    if ($query_tambah) {
        header("Location: tampil.php");
    } else {
        echo "Gagal";
    }
}

// Mengedit data pada file form_edit.php
if (isset($_POST["edit"])) {
    $id_apinn = $_POST["id_apinn"];
    $nama_apinn = $_POST["nama_apinn"];
    $alamat_apinn = $_POST["alamat_apinn"];

    $query_edit = mysqli_query($koneksi, "UPDATE tbl_apinn SET nama_apinn = '$nama_apinn', alamat_apinn = '$alamat_apinn' WHERE id_apinn = '$id_apinn'");

    if ($query_edit) {
        header("Location: tampil.php");
    } else {
        echo "Gagal";
    }
}
