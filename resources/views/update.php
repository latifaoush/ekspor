<?php
// include database connection file
include base_path('resources/views/koneksi.php');

$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$stok = $_POST['stok'];
$foto_produk = $_POST['foto_produk'];

$result = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', stok='$stok', foto_produk='$foto_produk' WHERE id = '$id'");

// Redirect to homepage to display updated user in list
if ($result) {
    header("Location: marketing.blade.php");
} else {
    // Handle the case when the form is not submitted
    echo "Form not submitted.";
}
?>