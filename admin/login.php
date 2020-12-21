
<?php 
include "lib/koneksi.php";
$username = $_POST['username'];
$pass = $_POST['password'];
// pastikakn username dan password adalahh berupa huruf atau angka.
if (empty($username)) {
    echo "<center><script> alert('username kosong!')</script>";
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<b>uername anda kosong!</b><br>";
            echo "silahkan klik dibawah ini untuk login kembali<br>";
            echo "<br>";echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
} else if (empty($pass)){
    echo "<center><script> alert('password kosong!')</script>";
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<b>password anda kosong!</b><br>";
            echo "silahkan klik dibawah ini untuk login kembali<br>";
            echo "<br>";echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}else{
    if (!ctype_alnum($username) OR !ctype_alnum($pass)) {
    echo "<center><script> alert('LOGIN GAGAL!')</script>";
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<b>LOGIN GAGAL!</b><br>";
            echo "tampaknya data yang anda isikan tidak berupa huruf dann angka<br>";
            echo "silahkan klik dibawah ini untuk login kembali<br>";
            echo "<br>";echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
    }else{
    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password = '$pass'";
    $q = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($q);
    $ketemu = mysqli_num_rows($q);
    // apabila username dan password ditemukan 
         if ($ketemu >0) {
            session_start();
            $_SESSION['username'] = $r['username'];
            $_SESSION['password'] = $r['password'];
            $_SESSION['id_admin'] = $r['id_admin']; 
            header('location:dashboard.php');
        }else{
            echo "<center><script> alert('LOGIN GAGAL!')</script>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<b>LOGIN GAGAL!</b><br>";
            echo "username dan password anda tidak ditemukan atau salah / akun anda telah dihapus / akun anda telah diblokir<br>";
            echo "silahkan klik dibawah ini untuk login kembali<br>";
            echo "<br>";echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";

        }
    }
}


?>
