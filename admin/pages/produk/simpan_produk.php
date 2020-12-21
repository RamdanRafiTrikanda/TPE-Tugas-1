<?php
include "../../lib/koneksi.php";

$nama_produk = $_POST['nama_produk'];
$id_kategori = $_POST['id_kategori'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$harga = $_POST['harga'];
$path = 'foto/'.$gambar;

$querySimpan = mysqli_query($koneksi,"INSERT INTO tbl_produk (nama_produk, id_kategori, harga, deskripsi, gambar) 
VALUES ('$nama_produk', '$id_kategori' , '$harga', '$deskripsi', '$gambar')");

if ($querySimpan) {
    echo "<script> alert('Data Psroduk Berhasil Diubah'); window.location='$baseUrl'+'admin/pages/produk/main.php';</script>";
} else {
    header("location:form_tambah.php");
}