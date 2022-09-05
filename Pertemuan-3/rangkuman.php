<form action="" method="post" name="form_user">
    <h2>FORM kirim nama</h2>
    <input type="text" name="nama_kamu">
    <br><br>
    <h2>FORM perhitungan</h2>
    Nilai A : <input type="text" name="bil1"><br>
    Nilai B : <input type="text" name="bil2"><br>
    <input type="submit" name="submit" value="Kirim">
</form>


<?php
error_reporting(0);
if (isset($_POST['submit'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $nama = $_POST['nama_kamu'];

    echo '<br><br>Nama yang dikirim ' . $nama;
    echo '<br>Jumlah A + B = ' . ($bil1 + $bil2);
}
?>