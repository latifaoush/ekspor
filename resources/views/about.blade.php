@extends('layout.dashboard')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

<div class="flex items-center justify-center lg:order-2 px-20 px-20 mt-20 space-x-8">
  <div class="bg-white font-sans dark:bg-gray-900 pl-10 mr-5 w-1/2">    
    <p class="mb-5 text-4xl text-color dark:text-teal-400 font-sans font-bold"><span class="text-yellow-500">20 YEARS</span> IN THE <br>COCONUT BUSINESS</p>
    <p class="mb-3 text-sm text-emerald-700 dark:text-teal-400">We are the Best Coconut Supplier From Indonesia with generations of experience in developing coconut-based products. Creating a sustainable synergy that integrates business with the environment, we value social stability within our communities. Embolden with the spirit of innovation, we dedicate research to the creation of products that are essential to our partners and consumers.</p>
  </div>
  <div class="flex flex-wrap mt-15 w-1/2">
    <!-- Product Card 1 -->
    <div class="w-3/4 px-4 mb-4">
      <div class="relative rounded-lg overflow-hidden">
        <img src="{{ asset('images/coconutproduct.jpg') }}" alt="Coconut Image" class="w-full h-full object-cover" />
        <div class="absolute bottom-0 left-0 bg-opacity-50 p-4 w-full text-right">
          <p class="text-white text-xl font-bold">Coconut Products</p>
          <p class="text-white">Explore all coconut products</p>
          <a href="/products">
          <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500">All Products</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="flex justify-around items-center justify-center bg-yellow-200 p-10 mt-6 w-full w-screen">
  <div class="flex flex-col w-1/4 px-2 mb-4 items-center justify-center">
    <p class="text-5xl font-bold font-icon mb-2">25+</p>
    <p class="text-base text-gray-500">Trusted Client</p>
  </div>
  <div class="flex flex-col w-1/4 px-2 mb-4 items-center justify-center">
    <p class="text-5xl font-bold font-icon mb-2">15</p>
    <p class="text-base text-gray-500">Completed Project</p>
  </div>
  <div class="flex flex-col w-1/4 px-2 mb-4 items-center justify-center">
    <p class="text-5xl font-bold font-icon mb-2">17</p>
    <p class="text-base text-gray-500">Professionals</p>
  </div>
  <div class="flex flex-col w-1/4 px-2 mb-4 items-center justify-center">
    <p class="text-5xl font-bold font-icon mb-2">11</p>
    <p class="text-base text-gray-500">Years Experience</p>
  </div>
</div>


<div class="flex mt-10 justify-center px-20  space-x-4 items-start"> 
  <!-- kolom 1 -->
  <div class="kotak w-1/2 p-4 flex flex-col rounded-lg bg-blue-500">
    <div class="flex flex-col items-center mb-4 ">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-8 h-8 text-white mb-6 mt-4"><path d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.4-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z"/></svg>
      <p class="text-white text-center text-base font-serif mb-2">Verified professionals <br> Filtered several times to <br> make it cleaner with professionals</p>
    </div>
    <div class="kotak flex flex-col items-center justify-center mb-2">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-8 h-8 text-white mb-6 mt-4"><path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"/></svg>
      <p class="text-white text-center text-base font-serif">Grow together <br> 100% natural ingredients <br> with natural composition</p>
    </div>
  </div>
  <!-- kolom 2 -->
  <div class="w-1/2 bg-gray-200 p-4 rounded-lg ">
    <p class="font-bold text-5xl text-color mb-6 h-auto"><span class="font-bold text-5xl text-yellow-500">Introduce</span> Coconut <br> Industries</p>
    <p class="mb-4 text-left">We are well-known and high credibility coconut suppliers from <br>Indonesia that provides a wide range of coconut product types at an <br> affordable price and the best quality.</p>
    <p class="mb-8 text-left ">We will be happy to be your business partner and supplier, providing <br> the best coconut products you can get. We are fully committed to <br> our customers.</p>
    <hr class="w-auto h-1 mx-auto my-4 bg-gray-300 border-0 rounded md:my-10 dark:bg-gray-700 ">
</div>
</div>


  



@endsection    
