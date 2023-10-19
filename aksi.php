<?php
include "koneksi.php";
if (isset($_POST['kirim'])) {
    $Nama = $_POST['Nama'];
    $NIM = $_POST['NIM'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hasil Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h2>Data Hasil Pendaftaran</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $Nama  ?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?= $NIM  ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir </td>
                    <td>:</td>
                    <td><?= $tanggal_lahir  ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $jk  ?></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td><?= $no_telepon  ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $email  ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $alamat  ?></td>
                </tr>
            </table>
            </fieldset>
        </div>
</body>

</html>