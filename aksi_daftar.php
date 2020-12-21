<?php
include "lib/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$hp = $_POST['no_hp'];
$status = 'Y';

    $queryCekUsername = mysqli_query($koneksi, "SELECT * FROM tbl_pembeli WHERE username = '$username'");
    $jmlUsername = mysqli_num_rows($queryCekUsername);
 
    if ($jmlUsername > 0) {
       echo "<script> alert('username sudah digunakan, silahkan gunakan username lain');window.location = '$baseUrl'+'daftar.php'</script>";
    } else {
       $queryDaftar = mysqli_query($koneksi, "INSERT INTO tbl_pembeli (username,password,nama,alamat,email,no_hp,status) VALUES ('$username','$password','$nama','$alamat','$email','$hp','$status')");
 
       if ($queryDaftar) {
          echo "<script>alert('Data Registrasi Berhasil Masuk');window.location = '$baseUrl'+'main.php'</script>";
       } else {
          echo "<script> alert('Data Registrasi Gagal Masuk');window.location = '$baseUrl'+'register.php'</script>";
       }
    }
 ?>