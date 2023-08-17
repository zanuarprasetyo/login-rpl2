<?php
include '../koneksi.php';
//mengaktifkan session
session_start();
//cek apakah user telah login. Jika belum, alihkan ke halaman login
if($_SESSION['status']!="login"){
    header("location:../index.php");
}
//menampilkan pesan selamat datang
echo "Hai Selamat Datang".$_SESSION['username'];
?>
<br/>
<br/>
    <div>
        <a href="logout.php"><input type="submit" value= "LOGOUT" class= "tombol"/></a>
    </div>