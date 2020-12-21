<?php
session_start();
include "lib/koneksi.php";

if (!empty($_SESSION['idMember'])) {
	include "pages/header.php";
	include "checkout.php";
	include "pages/footer.php";
} else {

	header("location:login.php");
}
