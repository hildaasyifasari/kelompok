<!DOCTYPE html>
<html>

<head><title></title></head>

<body>

  <header><h2>Form Pembeli Baru</h2></header>

  <form action="tambah.php" method="POST">

    <fieldset>
        <table>
            <tr>
                <td>Id Pembeli</td>
                <td>:</td>
                <td><input type="number" name="id_pembeli"></td>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-laki"> Laki-laki
                <input type="radio" name="jk" value="Perempuan"> Perempuan</td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="text" name="notelp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="textarea" name="alamat"></td>
            </tr><br><tr></tr>
            <tr><td><input type="submit" value="Simpan"></td></tr>
        </table>
    </fieldset>

  </form>
</body>

</html>