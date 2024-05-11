@extends('layout.dashboard')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')


<div class="bg-white flex items-center justify-center h-screen mt-8 w-full h-full">
  <img src="{{ asset('images/bg.png') }}" alt="Coconut" class="absolute object-cover w-full h-full opacity-50">
  <div class="z-10 text-center">
    <h1 class="text-3xl font-serif">SUPER QUALITY</h1>
    <p class="text-6xl font-serif">INDONESIA COCONUT</p> <br>
    <button class="bg-yellow-400 text-white px-4 py-2 rounded-full hover:bg-yellow-500">Go to Products</button>
  </div>
</div>

<div class=" mx-auto px-20 py-10 mx-20">
  <div class="flex flex-wrap justify-between items-center">
    <div class="w-full md:w-1/2 px-20">
      <h3 class="text-yellow-400 text-2xl text-lg font-bold font-sans">TOP QUALITY PRODUCT</h3>
      <h3 class="text-gray-400 text-2xl text-lg font-bold font-sans">INDONESIA COCONUT</h3>
    </div>
    <div class="w-full md:w-1/2 flex justify-end space-x-4 px-20 ">
  <div class="flex flex-col items-center">
    <p class="text-3xl font-bold text-yellow-400">20+</p>
    <p class="text-gray-400">Varians</p>
  </div>
  <div class="flex flex-col items-center">
    <p class="text-3xl font-bold text-yellow-400">35</p>
    <p class="text-gray-400">Clients</p>
  </div>
</div>
    </div>
  </div>

  <div class="flex  mt-6">
  <div class="w-1/4 px-2 mb-4">
    <div class="text-center  shadow-sm">
      <svg class="mx-auto mb-2 w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A2 2 0 0 1 2 15.382V8.618a2 2 0 0 1 1.553-1.894L9 4m0 16v-6m0 6l5.447 2.724A2 2 0 0 0 16 17.618V10.382a2 2 0 0 0-1.553-1.894L9 6V4m0 16l5.447-2.724A2 2 0 0 1 16 15.382V8.618a2 2 0 0 1 1.553-1.894L23 4"></path></svg>
      <p class="text-gray-700 font-bold">RESPONSIBILITY</p>
    </div>
  </div> 
  <div class="w-1/4 px-2 mb-4">
    <div class="text-center">      
      <svg class="mx-auto mb-2 w-8 h-8" fill="none" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.746 3.746 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
</svg>
      <p class="text-gray-700 font-bold">100% NATURAL</p>
    </div>
  </div>
  <div class="w-1/4 px-2 mb-4">
    <div class="text-center">      
<svg class="mx-auto mb-2 w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
</svg>
      <p class="text-gray-700 font-bold">COMMITMENT</p>
    </div>
  </div>
  <div class="w-1/4 px-2 mb-4">
    <div class="text-center">      
    <svg class="mx-auto mb-2 w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
      <p class="text-gray-700 font-bold">GROW TOGETHER</p>
    </div>
  </div>
</div>

<div class="flex flex-wrap mt-6">
  <!-- Product Card 1 -->
  <div class="w-full md:w-1/3 px-4 mb-4">
    <div class="relative rounded-lg overflow-hidden">
      <img src="{{ asset('images/product1.jpg') }}" alt="Coconut Image" class="w-full h-full object-cover" />
      <div class="absolute bottom-0 left-0 bg-opacity-50 p-4 w-full">
        <p class="text-white text-xl font-bold">Best Supplier</p>
        <p class="text-white">High-quality products to our customers</p>
        <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500">All Products</button>
      </div>
    </div>
  </div>
  <!-- Product Card 2 -->
  <div class="w-full md:w-1/3 px-4 mb-4">
    <div class="relative rounded-lg overflow-hidden">
      <img src="{{ asset('images/product2.jpg') }}" alt="Coconut Clear Bottle Image" class="w-full h-full object-cover" />
      <div class="absolute bottom-0 left-0 bg-opacity-50 p-4 w-full">
        <p class="text-white text-xl font-bold">Carefully</p>
        <p class="text-white">We carefully inspect the production process</p>
        <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500">All Products</button>
      </div>
    </div>
  </div>
  <!-- Product Card 3 -->
  <div class="w-full md:w-1/3 px-4 mb-4">
    <div class="relative rounded-lg overflow-hidden">
      <img src="{{ asset('images/product3.jpg') }}" alt="Coconut Palm Sugar Image" class="w-full h-full object-cover" />
      <div class="absolute bottom-0 left-0 bg-opacity-50 p-4 w-full">
        <p class="text-white text-xl font-bold">No Contaminants</p>
        <p class="text-white">Quality checking product to ensure that</p>
        <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500">All Products</button>
      </div>
    </div>
  </div>
</div>

<div class="flex item-center justify-center p-10">
  <div class="w-1/4 mt-10">
    <img src="{{ asset('images/coconut.png') }}" alt="Coconut Image" class=" object-cover">
  </div>
  <div class="product-custom w-1/2 p-10">
  <p class="mt-6 mb-2 text-1/16xl text-sm  font-bold">SEARCH FOR</p>
    <h1 class="text-2xl font-bold mb-4  ">Get Ready for good quality</h1>
    <p class="mb-6  ">We commit to delivering only high-quality coconut products to you. Our products are made from fresh and high-quality raw materials.</p>
    <button class="button-custom text-white mt-2 px-3 py-1.5 text-sm rounded-full ">All Products</button>
  </div>
</div>

 
<div class="testimonial font-sans bg-yellow-400 justify-center relative rounded-lg overflow-hidden px-100 mx-100 w-full md:w-3/4 px-4 mb-4">
  <div class="text-center text-white text-6xl font-bold mt-6 font-serif">Testimonial</div>
  <div class="flex justify-center items-center">
    <div class="w-1/4 ">
      <img src="{{ asset('images/kelapa.png') }}" alt="Coconuts" class="object-cover">
    </div>
    <div class="w-1/2 p-10">
    <p class="mt-2 mb-2 text-1/16xl text-sm text-white font-bold">Good products for client</p>
    <h1 class="text-2xl font-bold mb-4 text-white ">Check now happy customer</h1>
    <p class="mb-6 text-sm text-white ">Focus is on creating high-caliber Coconut, without the premium price tag, with an emphasis on all-natural ingredients and intense Coconut flavors.</p>
    <button class="button-custom  text-white  px-3 py-1.5 text-sm rounded-full ">All Products</button>
  </div>
</div>

  <div class="flex justify-between mt-2">
    <div class=" text-white p-4 ">
      <p class=" mb-3 text-center text-white dark:text-gray-400">Focus is on creating high-caliber Coconut, without the premium price tag, with an emphasis on all-natural ingredients and intense Coconut flavors.</p>
      <div class="flex items-center mt-4 mx-10 px-10">
        <img src="{{ asset('images/andiean.jpg') }}" alt="Andien" class="rounded-full w-10 h-10 mr-2">
        <div>
          <div class="font-semibold">Andien</div>
          <div class="text-sm text-white">America Company</div>
        </div>
      </div>
    </div>
    <div class=" text-white p-4 ">
      <p class=" mb-3 text-center text-white dark:text-white">Focus is on creating high-caliber Coconut, without the premium price tag, with an emphasis on all-natural ingredients and intense Coconut flavors.</p>
      <div class="flex items-center mt-4 mx-10 px-10">
        <img src="{{ asset('images/philipe.jpg') }}" alt="Phillipe" class="rounded-full w-10 h-10 mr-2">
        <div>
          <div class="font-semibold">Phillipe</div>
          <div class="text-sm text-white ">Europe Company</div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection


