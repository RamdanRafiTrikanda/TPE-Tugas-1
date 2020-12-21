<?php
include "../../lib/koneksi.php";
$nama_kategori = $_POST['nama_kategori'];

$sql = "INSERT INTO tbl_kategori (nama_kategori) VALUES ('$nama_kategori')";
$query = mysqli_query($koneksi, $sql);

if($query){
    echo "<script> alert('Data Kategori Berhasil Masuk'); window.location='$baseUrl'+'admin/pages/kategori/main.php';</script>";
} else {
    header("location:form_tambah.php");
}