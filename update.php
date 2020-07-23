<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysql_query("UPDATE user SET nama='$nama', keterangan='$keterangan', harga='$harga' , jumlah='$jumlah' WHERE id='$id'");

header("location:index.php?pesan=update");

?>