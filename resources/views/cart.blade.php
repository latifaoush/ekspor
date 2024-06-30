@extends('layout.cart')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

<div class="relative px-20 py-20 shadow-md sm:rounded-lg mt-20 ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 bg-yellow-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="bg-yellow-200">
                <th scope="col" class="px-16 py-3">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-6 py-3 pl-5 ">
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
            @foreach ($order->items as $item)
            <tr class="bg-yellow-400 border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                <td class="p-4">
                    <img src="{{ url('/images/' . $item->image) }}" class="w-16 md:w-32 max-w-full max-h-full rounded-lg" alt="{{ $item->product_name }}">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{ $item->product_name }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->quantity }}
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    Rp.{{ number_format($item->price, 0, ',', '.') }}
                </td>
                <td class="px-6 py-4">
                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="shadow-xl bg-yellow-400 h-fit w-fit rounded-lg m-5 px-5 pl-10">
        <table class="px-6 py-4 ">
            <tr class="mt-8 text-gray-900">
                <td class="font-semibold font-sans">Total :</td>
                <td class="font-semibold">Rp.{{ number_format($total, 0, ',', '.') }}</td>
            </tr>
            <tr class="mt-4">
                <td colspan="2">
                    
                        <button type="button" class="text-white mt-4 bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Proceed to Checkout</button>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
