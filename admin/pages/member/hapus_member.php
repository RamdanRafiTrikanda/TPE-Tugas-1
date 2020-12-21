<?php 
include '../../lib/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tbl_pembeli WHERE id_pembeli='$id'");
header("location:main.php");
?>