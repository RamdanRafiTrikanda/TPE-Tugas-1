<?php
include "lib/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$queryLogin = mysqli_query($koneksi, "SELECT * FROM tbl_pembeli WHERE username='$username' AND password='$password'");
$resultQuery = mysqli_num_rows($queryLogin);
$result = mysqli_fetch_array($queryLogin);
$status = $result['status'];
if ($resultQuery > 0) {
	if ($status == "Y") {
		// membuat session
		session_start();
		$_SESSION['idPembeli'] = $result['id_pembeli'];
		$_SESSION['username'] = $result['username'];
		echo "<script> alert ('Anda Berhasil masuk');window.location='$baseUrl'+'main.php'</script>";
	} else {
		//kembali ke form login
		echo "<script> alert ('akun sudah dinonaktifkan');window.location='$baseUrl'+'login.php'</script>";
	}
} else {
	//kembali ke form login
	echo "<script> alert ('Username atau Password tidak ditemukan');window.location='$baseUrl'+'login.php'</script>";
}
?>