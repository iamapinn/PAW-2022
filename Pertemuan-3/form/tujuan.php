<?php
error_reporting(0);
// $nama = $_POST['nama_kamu'];
// echo 'Nama yang dikirim ' . $nama;
if (isset($_POST('submit'))) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    echo 'Jumlah A + B = ' . ($bil1 + $bil2);
}