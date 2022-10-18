<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    </style>
</head>

<body>
    <h2>Form Tambah Data</h2>
    <form action="proses.php" method="POST">
        <table>
            <tr>
                <td><label for="nama_apinn">Nama</label></td>
                <td> : </td>
                <td><input type="text" name="nama_apinn" id="nama_apinn" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td><label for="alamat_apinn">Alamat</label></td>
                <td>:</td>
                <td><textarea id="alamat_apinn" name="alamat_apinn" placeholder="Masukkan Alamat" rows="3"></textarea></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Simpan" name="tambah">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>