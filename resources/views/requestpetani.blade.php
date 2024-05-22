@extends('layout.petani')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-20 p-10">
    <table class="table-request w-3/4 items-center justify-center text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs bg-gray-300 text-gray-800 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-3 py-3 ">
                    ID
                </th>
                <th scope="col" class="px-4 py-3">
                    Product
                </th>
                <th scope="col" class="px-4 py-3">
                Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Request</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-4 py-4">
                    Coconut
                </td>
                <td class="px-3 py-4">
                    100 pcs
</td>

                <td class="px-6 py-4 text-center">
                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Accept</button>
                <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Decline</button>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   2
                </th>
                <td class="px-4 py-4">
                Coconut
                </td>
                <td class="px-4 py-4">
                200 pcs
                </td>
                <td class="px-6 py-4 text-center">
                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Accept</button>
                <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Decline</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

 @endsection