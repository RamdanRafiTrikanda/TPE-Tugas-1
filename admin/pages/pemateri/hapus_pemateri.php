<?php 
include '../../lib/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tbl_pemateri WHERE id_pemateri='$id'");
header("location:main.php");
?>