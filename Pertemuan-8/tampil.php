<?php
include "proses.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pre {
            margin-top: 30px;
        }

        .tabel_data {
            margin: auto;
            width: 70%;
            border: 3px solid grey;
            text-align: center;
        }

        .button_tambah {
            text-decoration: none;
            color: white;
            background-color: green;
            padding: 10px;
            border-radius: 5px;
            display: block;
            width: 100px;
            text-align: center;
            margin: auto;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <caption>
        <pre class="pre">
            Nama : Muhammad Muqtafin Nuha <br>
            NIM : 210411100218 <br>
            Kelas : Pengembangan Aplikasi Web C
            </pre>
        <hr>
    </caption>
    <a href="form_tambah.php" class="button_tambah">Tambah</a>
    <table border="1" cellspacing="5" cellpadding="5" class="tabel_data">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>

        <?php
        while ($row = $query_tampil->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $row["id_apinn"]; ?></td>
                <td><?= $row["nama_apinn"]; ?></td>
                <td><?= $row["alamat_apinn"]; ?></td>
                <td><a href="form_edit.php?id_apinn=<?= $row["id_apinn"]; ?>">Edit</a> | <a href="delete.php?id_apinn=<?= $row["id_apinn"]; ?>">Delete</a></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>