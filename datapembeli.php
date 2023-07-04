<!DOCTYPE html>
<html>
<head><title></title></head>

<body>
  <header><h3>Daftar Pembeli</h3></header>
  <nav>
    <a href="formpembeli.php">[+] Tambah Baru</a>
  </nav>

  <br><br>
  <table border="1" cellspacing="3">
    <thead>
      <tr>
        <th>Id Pembeli</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No Telepon</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php

      include 'koneksi.php';

      $query = "SELECT * FROM pembeli";
      $result = mysqli_query($db, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) { ?>

          <tr>
            <td><?php echo $data['id_pembeli'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['jk'] ?></td>
            <td><?php echo $data['notelp'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td>
              <a href="edit.php?id_pembeli=<?php echo $data['id_pembeli'] ?>">Edit</a>
              <a href="hapus.php?id_pembeli=<?php echo $data['id_pembeli'] ?>">Delete</a>
            </td>
          </tr>
      <?php }
      } else ?>
      <tr>

      </tr>
    </tbody>
  </table>
</body>

</html>