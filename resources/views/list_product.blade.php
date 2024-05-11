@extends('layout.manageproduct')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

    <h1 class="text-black text-3xl font-serif pt-20 text-center p-20">List Produk</h1>
    <div class="text-black justify-center flex pb-60">
        <table class=" text-black size-11/12 border-collapse border border-slate-500 text-center ">
            <thead id="table-header">
                <tr>
                    <th class="bg-yellow-400 border-2 border-black">ID</th>
                    <th class="bg-yellow-400 border-2 border-black">Nama produk</th>
                    <th class="bg-yellow-400 border-2 border-black">stok</th>
                    <th class="bg-yellow-400 border-2 border-black">Foto Produk</th>
                    <th class="bg-yellow-400 border-2 border-black">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bg-gray-200 border-2 border-black">1</td>
                    <td class="bg-gray-200 border-2 border-black">Kelapa</td>
                    <td class="bg-gray-200 border-2 border-black">1545 buah</td>
                    <td class="bg-gray-200 border-2 border-black justify-center"><div class="flex justify-center"><img src="{{ url('/images/kelapa.jpg') }}" class="size-20"></div></td>
                    <td class="bg-gray-200 border-2 border-black">
                        <!-- Tombol CRUD -->
                        <button class="bg-sky-700 text-center rounded-md size-1/3 hover:bg-sky-500">Edit</button>
                        <button class="bg-red-700 text-center rounded-md size-1/3 hover:bg-red-500">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="bg-gray-200 border-2 border-black">2</td>
                    <td class="bg-gray-200 border-2 border-black">Minyak kelapa</td>
                    <td class="bg-gray-200 border-2 border-black">1000 L</td>
                    <td class="bg-gray-200 border-2 border-black"><div class="flex justify-center"><img src="{{ url('/images/minyak kelapa.jpg') }}" class="size-20"></div></td>
                    <td class="bg-gray-200 border-2 border-black">
                        <!-- Tombol CRUD -->
                        <button class="bg-sky-700 text-center rounded-md size-1/3 hover:bg-sky-500">Edit</button>
                        <button class="bg-red-700 text-center rounded-md size-1/3 hover:bg-red-500">Delete</button>
                    </td>
                </tr>
                <!-- Anda dapat menambahkan baris-baris tambahan sesuai dengan kebutuhan -->
            </tbody>
        </table>
        

    
</div>


