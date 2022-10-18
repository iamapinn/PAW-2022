<?php
include 'proses.php';

$id_apinn = $_GET["id_apinn"];

$query_delete = mysqli_query($koneksi, "DELETE FROM tbl_apinn WHERE id_apinn = '$id_apinn'");

if ($query_delete) {
    header("Location: tampil.php");
} else {
    echo "Gagal";
}
