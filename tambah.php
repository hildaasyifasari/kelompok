<?php
include 'koneksi.php';

$id_pembeli = $_POST['id_pembeli'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$no_telp = $_POST['notelp'];
$alamat = $_POST['alamat'];



$sql = "INSERT INTO pembeli VALUES('$id_pembeli', '$nama', '$jenis_kelamin', '$no_telp','$alamat')";
if (mysqli_query($db, $sql)) {
  header('Location: datapembeli.php?status=sukses');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
