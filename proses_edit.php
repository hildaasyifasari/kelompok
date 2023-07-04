<?php
include 'koneksi.php';

$id_pembeli = $_POST['id_pembeli'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$no_telp = $_POST['notelp'];
$alamat = $_POST['alamat'];

$sql = "UPDATE pembeli SET nama='$nama',jk='$jenis_kelamin',notelp='$no_telp',alamat='$alamat' WHERE id_pembeli ='$id_pembeli'";
if (mysqli_query($db, $sql)) {
  header('Location: datapembeli.php?status=sukses');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
