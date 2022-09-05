<?php
$profile_desc = "Informatics student at Trunojoyo University, Madura";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Card</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #28223F;
            font-family: Montserrat, sans-serif;

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

            min-height: 100vh;
            margin: 0;
        }

        table {
            display: flex;
            justify-content: center;

        }

        input {
            padding: 12px 20px;
            border: 1px solid #ccc;

        }

        h3 {
            margin: 10px 0;
            text-align: left;
        }

        p {
            font-size: 14px;
            line-height: 21px;
        }

        .card-container {
            background-color: #231E39;
            border-radius: 5px;
            box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.75);
            color: #B3B8CD;
            padding-top: 30px;
            position: relative;
            width: 350px;
            max-width: 100%;
            text-align: center;
        }

        .primary {
            background-color: #03BFCB;
            border: 1px solid #03BFCB;
            border-radius: 3px;
            color: #231E39;
            font-family: Montserrat, sans-serif;
            font-weight: 500;
            padding: 7px 22px;
            margin: 2px 2px 0 2px;
        }

        .skills {
            background-color: #1F1A36;
            text-align: left;
            padding: 15px;
            margin-top: 30px;
        }

        .skills ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .skills ul li {
            border: 1px solid #2D2747;
            border-radius: 2px;
            display: inline-block;
            font-size: 12px;
            margin: 0 7px 7px 0;
            padding: 7px;
        }
    </style>
</head>

<body>
    <div class="card-container">
        <form action="file2.php" method="post">
            <h3 style="text-align: center;">FORM Mahasiswa</h3>
            <table>
                <tr>
                    <td>
                        <h3>Nama</h3>
                    </td>
                    <td>
                        <h3>:</h3>
                    </td>
                    <td><input type="text" name="nama" placeholder="Nama"></td>
                </tr>
                <tr>
                    <td>
                        <h3>NIM</h3>
                    </td>
                    <td>
                        <h3>:</h3>
                    </td>
                    <td><input type="text" name="nim" placeholder="NIM"></td>
                </tr>
                <tr>
                    <td>
                        <h3>Prodi</h3>
                    </td>
                    <td>
                        <h3>:</h3>
                    </td>
                    <td><input type="text" name="prodi" placeholder="Prodi"></td>
                </tr>
                <tr>
                    <td>
                        <h3>Alamat</h3>
                    </td>
                    <td>
                        <h3>:</h3>
                    </td>
                    <td><textarea name="alamat" cols="26" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td colspan="3"><input class="primary" type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
        <p><?= $profile_desc; ?></p>
    </div>
</body>

</html>