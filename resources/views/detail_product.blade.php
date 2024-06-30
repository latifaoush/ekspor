@extends('layout.productslayout')
@section('title', 'Coconut Oil')
@section('content')

<div id="default-carousel" class="relative w-full h-full mt-10 py-10" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-86 overflow-hidden md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/cocfiber-1.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/cocmilk-2.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/cocoil-3.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/cocshell-2.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/cocsugar-3.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>

    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div>

    <div class="containerrawcoconut table-request w-full max-w-7xl mx-auto mt-10 ml-48">
        <div>
            <p class="bigword text-4xl font-bold text-blue-900 mt-12">{{ $product->product }}</p>
            <div class="boxes flex flex-wrap mt-8">
                <div class="minimum w-80 h-48 bg-blue-900 rounded-full mr-8 7 justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                        class="w-10 h-10 text-white mb-6 mt-4 table-request" fill="currentColor">
                        <path
                            d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64H48c8.8 0 16 7.2 16 16V368c0 44.2 35.8 80 80 80h18.7c-1.8 5-2.7 10.4-2.7 16c0 26.5 21.5 48 48 48s48-21.5 48-48c0-5.6-1-11-2.7-16H450.7c-1.8 5-2.7 10.4-2.7 16c0 26.5 21.5 48 48 48s48-21.5 48-48c0-5.6-1-11-2.7-16H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H144c-8.8 0-16-7.2-16-16V80C128 35.8 92.2 0 48 0H32zM192 80V272c0 26.5 21.5 48 48 48H560c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H464V176c0 5.9-3.2 11.3-8.5 14.1s-11.5 2.5-16.4-.8L400 163.2l-39.1 26.1c-4.9 3.3-11.2 3.6-16.4 .8s-8.5-8.2-8.5-14.1V32H240c-26.5 0-48 21.5-48 48z" />
                    </svg>
                    <p>Minimum Order</p>
                    <p>30/PCS</p>
                </div>
                <div class="production w-80 h-48 bg-blue-900 rounded-full mr-8 justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-clock w-10 h-10 text-white mb-6 mt-4 table-request" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                    </svg>
                    <p>Production Time</p>
                    <p>12 Days</p>
                </div>
                <div class="certificate w-80 h-48 bg-blue-900 rounded-full justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-file-earmark-text w-10 h-10 text-white mb-6 mt-4 table-request"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                        <path
                            d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                    </svg>
                    <p>International Certificate</p>
                </div>
            </div>
            <p class="detail text-base font-sans text-gray-500 mt-8">Virgin coconut oil processed without heat to
                preserve the coconut's original nutrients and aroma. Used for culinary and cosmetic purposes.</p>
        </div>
    </div>
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="bg-gray-200 py-5 mx-20 shadow-lg mt-10">
            <div class="my-20 mt">
                <div class="small-container bg-yellow-400 shadow-lg rounded-lg p-4">
                    <div class="row flex flex-wrap rounded-lg">
                        <div class="col-2 w-full lg:w-1/2 rounded-lg px-5">
                            <img src="/images/{{ $product->image }}" alt="{{ $product->product }}" class="w-full rounded-lg">
                        </div>
                        <div class="col-2 w-full lg:w-1/2 px-3 flex flex-col justify-start">
                            <div class="font-sans product-custom mt-2">
                                <h1 class="text-2xl font-semibold mb-2">{{ $product->product }}</h1>
                                <h4 class="text-lg font-semibold mb-2">Rp.{{ number_format($product->price, 0, ',', '.') }}</h4>
                                <h4 class="text-base font-semibold mb-2">Quantity</h4>
                                <div class="flex text-left mb-4">
                                    <input type="number" name="quantity" id="second_product" min="300" value="300"
                                        class="bg-gray-50 w-1/2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="1" required />
                                </div>
                            </div>
                            <div class="flex lg:order-2 space-x-8 text-left">
                                <button type="submit" class="button-custom text-white mt-2 px-5 py-3 text-sm rounded-lg w-full bg-blue-500 hover:bg-blue-600">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="shipping table-request w-full max-w-screen-xl mx-auto mt-10 ml-48">
        <p class="bigword text-4xl font-bold text-blue-900 mt-12 mb-4">Shipping Information</p>
        <div class="container mx-auto my-8">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Information
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Checklist Shipping
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Shipping Method
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            By Sea or Air
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Delivery Time
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            2-4 weeks
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- <div class="flex justify-end">
            <a href="/pesanan_cocoil">
                <button
                    class="my-button order bg-blue-900 text-white py-1.5 px-3 rounded-full text-right text-base inline-block mt-4">Order
                    Now</button>
            </a>
        </div> -->
</div>

@endsection