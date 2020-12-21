<?php
include "../../lib/koneksi.php";

$idPemateri = $_POST['id_pemateri'];
$nama=$_POST['nama'];
$email=$_POST['email'];  
$no_hp=$_POST['no_hp'];

$queryEdit = mysqli_query($koneksi,"UPDATE tbl_pembeli SET nama='$nama' , email='$email' , 
no_hp='$no_hp' WHERE id_pemateri='$idPemateri'");

if ($queryEdit) {
    echo "<script> alert('Data Pemateri Berhasil Diubah'); window.location='$baseUrl'+'admin/pages/pemateri/main.php';</script>";
} else {
    header("location:form_edit.php");
}