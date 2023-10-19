<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h2>Form Pendaftaran Mahasiswa Udayana
                <br>Fakultas Teknik
            </h2>
            <form action="aksi.php" method="POST">
                <table>
                    <tr>
                        <p>Nama</p>
                        <p><input type="text" name="Nama" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>NIM</p>
                        <p><input type="number" name="NIM" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Tempat Lahir</p>
                        <p><input type="text" name="tempat_lahir" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Tanggal Lahir</p>
                        <p><input type="date" name="tanggal_lahir" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Jenis Kelamin</p>
                        <p>
                            <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                            <input type="radio" name="jk" value="Perempuan">Perempuan
                        </p>
                    </tr>
                    <tr>
                        <p>No Telepon</p>
                        <p><input type="text" name="no_telepon" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Email</p>
                        <p><input type="text" name="email" style="width: 500px; height: 20px;"></p>
                    </tr>
                   <tr>
                        <p>Alamat</p>
                        <p><input type="text" name="alamat" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>
                            <button type="submit" name="kirim" style="width: 70px; height: 30px;">Kirim</button>
                            <button type="reset" name="reset" style="width: 70px; height: 30px;">Batal</button>
                        </p>
                    </tr>

                </table>
            </form>
        </div>
    </div>
</body>

</html>