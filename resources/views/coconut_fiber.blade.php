@extends('layout.productslayout')
@section('title', 'Coconut Fiber')
@section('content')

<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

    <div>

        <div class="containerrawcoconut w-full max-w-7xl mx-auto mt-10 ml-48">
            <div>
                <p class="bigword text-4xl font-bold text-blue-900 mt-12">COCONUT FIBER</p>
                <div class="boxes flex flex-wrap mt-8">
                    <div class="minimum w-80 h-48 bg-blue-900 rounded-full mr-8 7 justify-center items-center">
                        <p>Minimum Order</p>
                        <p>30/PCS</p>
                    </div>
                    <div class="production w-80 h-48 bg-blue-900 rounded-full mr-8 justify-center items-center">
                        <p>Production Time</p>
                        <p>12 Days</p>
                    </div>
                    <div class="certificate w-80 h-48 bg-blue-900 rounded-full justify-center items-center">
                        <p>International Certificate</p>
                    </div>
                </div>
                <p class="detail text-base font-sans text-gray-500 mt-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis reprehenderit enim iste, incidunt minima saepe libero voluptatibus eaque, omnis adipisci ex quasi, accusantium rerum nam sequi neque repellat ut aut!</p>
            </div>
        </div>
        <div class="specifications w-full max-w-screen-xl mx-auto mt-10 ml-48">
            <p class="bigword text-4xl font-bold text-blue-900 mt-12">Specifications Product</p>
            <i class="fa-solid fa-cart-shopping"></i>
            <table class="table-custom w-full text-gray-500 border border-gray-500 border-collapse-separate text-base font-sans">
                <tr>
                    <td>Information</td>
                    <td>Description</td>
                </tr>
                <tr>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                </tr>
                <tr>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                </tr>
            </table>
        </div>
        <div class="shipping w-full max-w-screen-xl mx-auto mt-10 ml-48">
            <p class="bigword text-4xl font-bold text-blue-900 mt-12">Shipping Information</p>
            <table class=" table-custom w-full text-gray-500 border border-gray-500 border-collapse-separate text-base font-sans">
                <tr>
                    <td>Information</td>
                    <td>checklist Shipping</td>
                </tr>
                <tr>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>No</td>
                </tr>
            </table>
        </div>
        <button class="my-button bg-blue-900 text-white py-2 px-4 rounded-lg text-center text-base inline-block mt-4">Order Now</button>
    </div>

@endsection