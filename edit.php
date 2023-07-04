<!DOCTYPE html>
<html>
<head><title></title></head>

<body>

  <?php
  include 'koneksi.php';
  $id_pembeli = $_GET['id_pembeli'];

  $query = "SELECT * FROM pembeli WHERE id_pembeli = '$id_pembeli'";
  $result = mysqli_query($db, $query);
  if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
  }

  ?>
  <header>
    <h3>Form Edit Data Pembeli</h3>
  </header>

  <form action="proses_edit.php" method="POST">

    <fieldset>
      <table>
        <tr><td><input type="hidden" name="id_pembeli" value="<?php echo $data['id_pembeli'] ?>"></td></tr>
        <tr>
          <td>Nama Pembeli</td>
          <td>:</td>
          <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <?php $jenis_kelamin = $data['jk']; ?>
          <td><input type="radio" name="jk" value="Laki-laki" <?php echo ($jenis_kelamin == 'Laki-laki') ? "checked" : "" ?>> Laki-laki
          <input type="radio" name="jk" value="Perempuan" <?php echo ($jenis_kelamin == 'Perempuan') ? "checked" : "" ?>> Perempuan</td>
        </tr>
        <tr>
          <td>No. Telepon</td>
          <td>:</td>
          <td><input type="text" name="notelp" value="<?php echo $data['notelp'] ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><input type="textarea" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
        </tr><br><tr></tr>
        <tr><td><input type="submit" value="Update"></td></tr>
      </table>
    </fieldset>
  </form>
</body>

</html>