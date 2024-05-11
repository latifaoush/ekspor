@extends('layout.cart')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

<div class="justify-center flex pt-10 pb-20 mt-10"> 
    <div class="flex-col justify-center ">
        <div class="shadow-xl bg-yellow-400 flex justify-center w-fit rounded-lg m-5 p-5">
            <table class="table-fixed m-2 gap-x-4">
                <tr>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="flex justify-between gap-10 pr-7">
                            <img src="{{ url('/images/kelapa.jpg') }}" class="size-20">
                            <div class="">
                                <p>kelapa</p>
                                <small>Harga: Rp.15.000/1</small>
                                <br>
                                <a href="" class=" bg-white p-1 rounded-lg hover:bg-blue-500  ">Hapus</a>
                            </div>
                        </div>
                    </td>
                    <td class="pr-5"><input type="number" value="100"></td>
                    <td>Rp.1.500.000</td>
                </tr>
                <tr>
                    <td>
                        <div class="flex justify-between gap-10 pr-6 pt-2">
                            <img src="{{ url('/images/serabut kelapa.jpg') }}" class="size-20">
                            <div>
                                <p>Serabut kelapa</p>
                                <small>Harga: Rp.20.000/kg</small>
                                <br>
                                <a href="" class="bg-white p-1 rounded-lg hover:bg-blue-500  ">Hapus</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="250"></td>
                    <td>Rp.5.000.000</td>
                </tr>
                <tr>
                    <td>
                        <div class="flex justify-between gap-10 pr-7 pt-2">
                            <img src="{{ url('/images/minyak kelapa.jpg') }}" class="size-20">
                            <div>
                                <p>minyak kelapa</p>
                                <small>Harga: Rp.45.000/L</small>
                                <br>
                                <a href="" class="bg-white p-1 rounded-lg hover:bg-blue-500  ">Hapus</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="100"></td>
                    <td>Rp.4.500.000</td>
                </tr>
            </table>
        </div>


            <div class="shadow-xl bg-yellow-400 h-fit w-fit rounded-lg m-5 p-5">

                <table class="p-4">

                    <tr>
                        <td>Total :</td>
                        <td>Rp.11.000.000</td>
                    </tr>
                    <tr class="">
                        <td><a href="" class="bg-white p-1 rounded-lg hover:bg-blue-500  ">Bayar</a></td>
                    </tr>
                </table>

            </div>
        



    </div>
    </div>

@endsection    