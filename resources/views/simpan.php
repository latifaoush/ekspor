<?php
include base_path('resources/views/koneksi.php');

$nama_produk = $_POST['nama_produk'];
$stok = $_POST['stok'];
$foto_produk = $_POST['foto_produk'];

$input = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, stok, foto_produk) VALUES ('$nama_produk', '$stok', '$foto_produk')") or die(mysqli_error($koneksi));

if ($input) {
    echo "Data Berhasil Disimpan";
    header("location:marketing.blade.php");
} else {
    echo "Gagal Disimpan";
}

mysqli_close($koneksi);
?>