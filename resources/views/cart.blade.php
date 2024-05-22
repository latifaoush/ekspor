@extends('layout.cart')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

<div class="relative shadow-md sm:rounded-lg mt-20 ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 bg-yellow-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="bg-yellow-200">
                <th scope="col" class="px-16 py-3">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-6 py-3 pl-20 ">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-yellow-400 border-b dark:bg-gray-800 dark:border-gray-700  dark:hover:bg-gray-600">
                <td class="p-4">
                    <img src="{{url('/images/kelapamuda.jpg')}}" class="w-16 md:w-32 max-w-full max-h-full rounded-lg" alt="raw coconut">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    Raw Coconut
                </td>
                <td class="px-6 py-4" >
                    <div class="flex items-center justify-center ">
                        <input type="number" id="first_product" class="bg-gray-50 w-20 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required />
                    </div>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    Rp.15.000/Pcs
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
            <tr class="bg-yellow-400 border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                <td class="p-4">
                    <img src="{{url('/images/coconutfiber.jpg')}}" class="w-16 md:w-32 max-w-full max-h-full rounded-lg" alt="coconut fiber">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    Coconut Fiber
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-center ">
                        <input type="number" id="second_product" class="bg-gray-50 w-20 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required />
                    </div>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    Rp.20.000/kg
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
            <tr class="bg-yellow-400 border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                <td class="p-4">
                    <img src="{{url('/images/virgincoconutoil.jpg')}}" class="w-16 md:w-32 max-w-full max-h-full rounded-lg" alt="virgin coconut oil">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    Virgin Coconut Oil
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-center ">
                        <input type="number" id="third_product" class="bg-gray-50 w-20 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required />
                    </div>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    Rp.45.000/L
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="shadow-xl bg-yellow-400 h-fit w-fit rounded-lg m-5 px-5 pl-10">
    <table class="px-6 py-4 ">
        <tr class="mt-8 text-gray-900">
            <td class="font-semibold font-sans">Total :</td>
            <td class="font-semibold">Rp.11.000.000</td>
        </tr>
        <tr class="mt-4">
            <td colspan="2">
            <a href="#">
            <button type="button" class="text-white mt-4 bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Pay</button>
            </a>
            </td>
        </tr>
    </table>
</div>

@endsection
