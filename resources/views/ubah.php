<?php
include base_path('resources/views/koneksi.php');
$id = $_GET['id'];
$result =mysqli_query($koneksi,"SELECT * FROM produk WHERE id='$id'");
while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $nama_produk = $user_data['nama_produk'];
    $stok = $user_data['stok'];
    $foto_produk = $user_data['foto_produk'];
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My App')</title>
    <link rel=”stylesheet” href=”https://cdn.tailwindcss.com/3.4.1”>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="tailwindcss3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/ea41a3ae8b.js" crossorigin="anonymous"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap');
</style>
    
</head>
<body class="">
<header  class="fixed top-0 w-screen bg-white dark:bg-gray-900 z-50">
    <nav class="bg-white border-teal-900 px-4 lg:px-6 py-2.5 dark:bg-teal-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="http://127.0.0.1:8000/" class="flex items-center">
                <img src="images/logo.png" class="mr-3 h-6 sm:h-9" alt=" Logo" >
                <span class="self-center text-xl whitespace-nowrap dark:text-white font-serif ">Ekspor Kelapa</span>
            </a>
            <div class="flex items-center lg:order-2">
            <a href="/cart">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">

            
  <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
</svg></a><br>
                <a href="/login" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 font-serif border-b-0">Log in</a>
            </div>
            <div class="navbar hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">About Us</a>
                    </li>
                    <li>
                        <a href="/products" class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Products</a>
                    </li>
                    <li>
                        <a href="/contact" class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="small-container cart-page">
<div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-user-graduate mr-2"></i> Ubah Data Produk</h3>
            <hr>
            <form action="update.php" method="post">
            <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>ID</label>
                        <input type="text" name="id" class="form-control" id="id" value=<?php echo $id;?> readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>NAMA BARANG</label>
                        <input type="text" name="nama_produk" class="form-control" id="nama_produk" value=<?php echo $nama_produk;?>>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>STOK</label>
                        <input type="number" name="stok" class="form-control" id="stok" value=<?php echo $stok;?>>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label>GAMBAR</label>
                        <input type="file" name="foto_produk" class="form-control" id="foto_produk" value=<?php echo $foto_produk;?>>
                        <img src="images/<?php echo $foto_produk;?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="simpan_produk">SIMPAN</button>
            </form>
        </div>
</div>


<div class=" rounded-t-3xl mt-7 p-10 bg-gray-800 text-white">
    <div class="flex gap-32">
        <div class="w-1/4">
         <img src="images/coconut peng.png" class="size-20">
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <div class="w-1/3"> 
            <p>Tujuan Kami Adalah Menjadikan Kesenangan dan Manfaat Website Ekspor Kelapa Dapat Diakses
            Secara Berkelanjutan Oleh Banyak Orang.</p>
        </div>
        <div class="footer-col-3">
            <h3>Ikuti Kami</h3>
            <ul>
                <li><a href="#" class="hover:text-yellow-500 h-fit"><i class="fa-brands fa-facebook pr-3"></i>facebook</a></li>
                <li><a href="#" class="hover:text-yellow-500 h-fit"><i class="fa-brands fa-twitter pr-3"></i>Twitter</a></li>
                <li><a href="#" class="hover:text-yellow-500 h-fit"><i class="fa-brands fa-instagram pr-4"></i>Instagram</a></li>
                <li><a href="#" class="hover:text-yellow-500 h-fit"><i class="fa-brands fa-youtube pr-3"></i>Youtube</a></li>
            </ul>
        </div>
    </div>
    <hr class="m-4 border-black">
    <div>
        <p class="text-center">&copy; 2024 - ExCon</p>
    </div>
</div>



</body>
</html>
