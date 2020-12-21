<?php 
	session_start();
	session_destroy();
	echo "<script> alert('Anda Telah Keluar Dari Halaman');window.location = '../admin/index.php'</script>";
 ?>