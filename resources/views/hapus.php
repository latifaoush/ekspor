<?php
// include database connection file
include base_path('resources/views/koneksi.php');
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id'");
header("Location:marketing.blade.php");
?>