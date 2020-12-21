<?php
include "../../lib/koneksi.php";

$idPembeli = $_POST['id_pembeli'];
$username=$_POST['username'];  
$password=$_POST['password'];  
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];  
$email=$_POST['email'];  
$no_hp=$_POST['no_hp'];
$status=$_POST['status'];

$queryEdit = mysqli_query($koneksi,"UPDATE tbl_pembeli SET username='$username' , password='$password' , nama='$nama' , alamat='$alamat' , email='$email' , 
no_hp='$no_hp' , status='$status' WHERE id_pembeli='$idPembeli'");

if ($queryEdit) {
    echo "<script> alert('Data Member Berhasil Diubah'); window.location='$baseUrl'+'admin/pages/member/main.php';</script>";
} else {
    header("location:form_edit.php");
}