<?php 
include "lib/koneksi.php";
	session_start();
	session_destroy();
	echo "<script> alert('Anda Berhasil Logout');window.location ='$baseUrl'+'main.php'</script>";
 ?>