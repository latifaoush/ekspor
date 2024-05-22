<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "eksporkelapa";  //nama database
//melakukan koneksi ke db
$koneksi = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
    echo "Gagal koneksi: " . die(mysqli_error($koneksi));
}

?>