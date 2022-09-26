<?php
$conn = mysqli_connect("localhost", "root", "", "campus");

$sql = "SELECT id_mhs, nama_mhs, nama_prodi, alamat_mhs FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi = p.id_prodi";
$result = mysqli_query($conn, $sql);

while ($row = $result->fetch_assoc()) {
    echo "Nama Mahasiswa: " . $row["nama_mhs"] . " | Alamat: " . $row["alamat_mhs"] . "<br>";
}
