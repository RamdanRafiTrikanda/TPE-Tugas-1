<?php
include "../../lib/koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$no_hp = $_POST['no_hp'];
$path = 'foto/'.$gambar;

$querySimpan = mysqli_query($koneksi,"INSERT INTO tbl_pemateri (nama, email, no_hp, gambar) 
VALUES ('$nama', '$email, '$no_hp', '$gambar')");

if ($querySimpan) {
    echo "<script> alert('Data Produk Berhasil Masuk'); window.location='$baseUrl'+'admin/pages/pemateri/main.php';</script>";
} else {
    header("location:form_tambah.php");
}