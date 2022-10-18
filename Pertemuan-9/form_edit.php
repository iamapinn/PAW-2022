<?php
include "proses.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    </style>
</head>

<body>
    <h2>Form Edit Data</h2>
    <form action="proses.php" method="POST">
        <table>
            <?php
            while ($row = $query_edit->fetch_assoc()) {
            ?>
                <tr>
                    <td><label for="nama_apinn">Nama</label></td>
                    <td> : </td>
                    <td><input type="text" name="nama_apinn" id="nama_apinn" placeholder="Masukkan Nama" value="<?= $row['nama_apinn']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="alamat_apinn">Alamat</label></td>
                    <td>:</td>
                    <td><textarea id="alamat_apinn" name="alamat_apinn" placeholder="Masukkan Alamat" rows="3"><?= $row['alamat_apinn']; ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="hidden" name="id_apinn" value="<?= $row["id_apinn"]; ?>">
                        <input type="submit" value="Update" name="edit">
                    </td>
                </tr>
            <?php } ?>
        </table>
    </form>
</body>

</html>