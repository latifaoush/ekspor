@extends('layout.productslayout')
@section('title', 'Coconut Shell')
@section('content')

<div class="bg-gray-200 py-5 mx-20 shadow-lg mt-10">
    <div class="my-20">
        <div class="small-container bg-yellow-400  shadow-lg rounded-lg p-4">
            <div class="row flex flex-wrap rounded-lg">
                <div class="col-2 w-full lg:w-1/2 rounded-lg px-5 ">
                    <img src="{{url('/images/kulitkelapa.jpg')}}" class="w-full rounded-lg">
                </div>
                <div class="col-2 w-full lg:w-1/2 px-3 justify-start">
                    <div class="font-sans">
                        <h1 class="text-2xl font-semibold mb-2">Coconut Shell</h1>
                        <h4 class="text-lg font-semibold mb-2">Rp.30.000 /Kg</h4>
                        <h4 class="text-base font-semibold mb-2">Quantity</h4>
                        <div class="flex text-left mb-4">
                            <input type="number" min="5"
                                class="bg-gray-50 w-1/2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="30" required />
                        </div>
                    </div>
                    <div class="flex lg:order-2 space-x-8 text-left">
                    <a href="#">
                        <button
                            class="button-custom text-white mt-2 px-5 py-3 text-sm rounded-lg w-full bg-blue-500 hover:bg-blue-600">Add
                            to Cart</button>
                    </a>
                    <a href="#">
                        <button
                            class="bg-gray-900 text-white mt-2 px-9 py-3  text-sm rounded-lg w-full hover:bg-gray-500">Order</button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection