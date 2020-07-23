<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysql_query("INSERT INTO produk VALUES('','$nama','$keterangan','$harga','$jumlah')");

header("location:index.php?pesan=input");
?>