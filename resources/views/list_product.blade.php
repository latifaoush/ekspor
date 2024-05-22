@extends('layout.manageproduct')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

<div class="dashboard-custom  justify-center mt-10 py-10 ">
<a href="tambah_produk.php"><button
        class="bg-sky-700 text-center rounded-md size-1/7 hover:bg-sky-500 p-2 ml-20 mb-2">Tambah Produk</button></a>
<div class="relative shadow-md sm:rounded-lg  ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 bg-yellow-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="bg-yellow-200">
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">ID</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-6 py-3 pl-20 ">
                    Stocks
                </th>
                <th scope="col" class="px-6 py-3">
                    Picture
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-yellow-400 border-b dark:bg-gray-800 dark:border-gray-700  dark:hover:bg-gray-600">

                <td class="px-4 py-3 font-semibold text-gray-900 dark:text-white">
                    1
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    Raw Coconut
                </td>
                <td class="px-6 py-4 custom pl-20 ml-20 font-semibold text-gray-900 dark:text-white">
                    1545 pcs
                </td>
                <td class="p-4">
                    <img src="{{ url('/images/kelapa.jpg') }}" class="w-16 md:w-32 max-w-full max-h-full rounded-lg">
                </td>
                <td class="px-6 py-4">
                    <!-- Tombol CRUD -->
                    <button class="bg-sky-700 text-center text-gray-900 rounded-md px-3 py-1.5 hover:bg-sky-500">Edit</button>
                    <button class="bg-red-700 text-center text-gray-900 rounded-md px-3 py-1.5 hover:bg-red-500">Delete</button>
                </td>
            </tr>
            <tr class="bg-yellow-400 border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                
                <td class="px-4 py-3 font-semibold text-gray-900 dark:text-white">
                    2
                </td>
    
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    Coconut Oil
                </td>
    
                <td class="px-6 py-4 custom pl-20 ml-20 font-semibold text-gray-900 dark:text-white ">
                    1000 L
                </td>
                <td class="p-4">
                        <img src="{{ url('/images/minyakkelapa.jpg') }}" class="w-16 md:w-32 max-w-full max-h-full rounded-lg">
                </td>
                <td class="px-6 py-4">
                   <!-- Tombol CRUD -->
                   <button class="bg-sky-700 text-center text-gray-900 rounded-md px-3 py-1.5 hover:bg-sky-500">Edit</button>
                    <button class="bg-red-700 text-center text-gray-900 rounded-md px-3 py-1.5 hover:bg-red-500">Delete</button>
                </td>
            </tr>
           
        </tbody>
    </table>
    </div>
    </div>
    