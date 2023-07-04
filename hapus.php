<?php
include 'koneksi.php';

$id_pembeli = $_GET['id_pembeli'];


$sql = "DELETE FROM pembeli WHERE id_pembeli ='$id_pembeli'";
if (mysqli_query($db, $sql)) {
  header('Location: datapembeli.php?status=sukses');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
