@extends('layout.petani')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

<div class="bg-white mt-20 ">
    <div class="flex justify-center items-center h-96 cub rounded-lg w-3/4 table-request mt-20 px-20">
        <div class="relative w-3/4 h-96 rounded-lg overflow-hidden mt-20 ">
            <div class="absolute inset-0 mt-20"></div>
            <img src="{{ asset('images/coconut-tree.jpg') }}" alt="Coconut" class="absolute object-cover  w-full h-full">
            <div class="relative z-10 p-8">
                <div class="flex flex-col justify-end h-full ">
                    <div class="mb-10 text-right">
                        <h1 class="text-white text-3xl font-bold">INDONESIA COCONUT</h1>
                        <p class="text-white text-xl font-semibold mt-2">EXPORT COCONUT</p>
                        <a href="/requestpetani">
                    <button class="bg-yellow-400 text-white px-4 py-2 rounded-full hover:bg-yellow-500 mt-6">Go to Coconut Request</button>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-20 px-20">
<div class="flex flex-wrap ">
  <!-- Product Card 1 -->
  <div class="w-full md:w-1/3 px-4 mb-4">
    <div class="relative rounded-lg overflow-hidden">
      <img src="{{ asset('images/terakhir-1.jpg') }}" alt="Coconut Image" class="w-full h-full object-cover" />
      <div class="absolute bottom-0 left-0 bg-opacity-50 p-4 w-full">
        <p class="text-white text-xl font-bold">Export your coconut to various countries</p>
        <p class="text-white">Here you can see your coconut Requests</p>
        <a href="/requestpetani">
            <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500" ">Coconut Request</button>
            </a>
      </div>
    </div>
  </div>
  <!-- Product Card 2 -->
  <div class="w-full md:w-1/3 px-4 mb-4">
    <div class="relative rounded-lg overflow-hidden">
      <img src="{{ asset('images/terakhir-2.jpg') }}" alt="Coconut Clear Bottle Image" class="w-full h-full object-cover" />
      <div class="absolute bottom-0 left-0 bg-opacity-50 p-4 w-full">
        <p class="text-white text-xl font-bold">Get a higher price </p>
        <p class="text-white">Here you can see your coconut Requests</p>
        <a href="/requestpetani">
            <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500"">Coconut Request</button>
            </a>
      </div>
    </div>
  </div>
  <!-- Product Card 3 -->
  <div class="w-full md:w-1/3 px-4 mb-4">
    <div class="relative rounded-lg overflow-hidden">
      <img src="{{ asset('images/terakhir-3.jpg') }}" alt="Coconut Palm Sugar Image" class="w-full h-full object-cover" />
      <div class="absolute bottom-0 left-0 bg-opacity-50 p-4 w-full">
        <p class="text-white text-xl font-bold">Increase your coconut sales</p>
        <p class="text-white">Here you can see coconut Requests</p>
        <a href="/requestpetani">
            <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500">Coconut Request</button>
            </a>
      </div>
    </div>
  </div>
</div>
</div>

<section class=" relative bg-white dark:bg-gray-900 ">
    <div class="grid max-w-screen-xl px-20 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h2 class="mb-4 text-3xl  font-extrabold tracking-tight leading-none   dark:text-white">Easily Manage and Send Coconut Requests.</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Here you can manage your coconut Requests.</p>
            <a href="/requestpetani">
            <button class="button-custom text-white mt-2 px-3 py-1.5 text-sm rounded-full ">Coconut Request</button>
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-4 lg:flex ">
            <img src="{{ asset('images/bgadm3.jpg') }} " class="rounded-lg " alt="mockup">
        </div>                
    </div>
</section>
