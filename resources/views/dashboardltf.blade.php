@extends('layout.dashboard')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')


<div class="bg-white flex items-center justify-center h-screen mt-8 w-full h-full">
  <img src="{{ asset('images/bg.png') }}" alt="Coconut" class="block absolute object-cover w-full h-full opacity-50">
  <div class="z-10 text-center">
    <h1 class="text-3xl font-serif">SUPER QUALITY</h1>
    <p class="text-6xl font-serif">INDONESIA COCONUT</p><br>
    <a href="/products">
    <button class="bg-yellow-400 text-white px-4 py-2 rounded-full hover:bg-yellow-500">Go to Products</button>
    </a>
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

  <div class="flex mt-6">
  <div class="w-1/4 px-2 mb-4">
    <div class="text-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-2 w-8 h-8" fill="currentColor"  viewBox="0 0 512 512" stroke-width="1.5" stroke="currentColor" ><path d="M288 32c0 17.7 14.3 32 32 32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c53 0 96-43 96-96s-43-96-96-96H320c-17.7 0-32 14.3-32 32zm64 352c0 17.7 14.3 32 32 32h32c53 0 96-43 96-96s-43-96-96-96H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H384c-17.7 0-32 14.3-32 32zM128 512h32c53 0 96-43 96-96s-43-96-96-96H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H160c17.7 0 32 14.3 32 32s-14.3 32-32 32H128c-17.7 0-32 14.3-32 32s14.3 32 32 32z"/></svg>
      <p class="text-gray-700 font-bold">RESPONSIBILITY</p>
    </div>
  </div> 
  <div class="w-1/4 px-2 mb-4">
    <div class="text-center">      
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mx-auto mb-2 w-8 h-8">
  <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
</svg>
      <p class="text-gray-700 font-bold">100% NATURAL</p>
    </div>
  </div>
  <div class="w-1/4 px-2 mb-4">
    <div class="text-center">      
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="mx-auto mb-2 w-10 h-10"><path d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8V128h-.7l-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48V352h28.2l91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16V352c0 17.7 14.3 32 32 32H64c17.7 0 32-14.3 32-32V128H16zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128V352c0 17.7 14.3 32 32 32h32c17.7 0 32-14.3 32-32V144c0-8.8-7.2-16-16-16H544zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z"/></svg>
      <p class="text-gray-700 font-bold">COMMITMENT</p>
    </div>
  </div>
  <div class="w-1/4 px-2 mb-4">
    <div class="text-center">      
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mx-auto mb-2 w-8 h-8">
  <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
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
        <a href="/products">
        <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500">All Products</button>
        </a>
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
        <a href="/products">
        <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500">All Products</button>
        </a>
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
        <a href="/products">
        <button class="bg-yellow-400 text-white mt-2 px-3 py-1.5 text-sm rounded-full hover:bg-yellow-500">All Products</button>
        </a>
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
    <a href="/products">
    <button class="button-custom text-white mt-2 px-3 py-1.5 text-sm rounded-full ">All Products</button>
    </a>
  </div>
</div>

<div class="container mx-auto mt-24 mb-24">
        <div class="flex flex-wrap justify-center">
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/rawcoconut'}}">
                    <img src="{{url('/images/kelapamuda.jpg')}}" alt="" class="w-full h-48 object-cover">
                    <h4 class="text-xl font-bold mt-4">RAW COCONUT</h4>
                    <h5 class="text-gray-600 mt-2">PRODUCT DETAILS</h5>
                </a>
            </div>
            
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/coconutshell'}}">
                    <img src="{{url('/images/kulitkelapa.jpg')}}" alt="" class="w-full h-48 object-cover">
                    <h4 class="text-xl font-bold mt-4">COCONUT SHELL</h4>
                    <h5 class="text-gray-600 mt-2">PRODUCT DETAILS</h5>
                </a>
            </div>
            
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/coconutmilk'}}">
                    <img src="{{url('/images/coconutmilk.jpg')}}" alt="" class="w-full h-48 object-cover">
                    <h4 class="text-xl font-bold mt-4">COCONUT MILK</h4>
                    <h5 class="text-gray-600 mt-2">PRODUCT DETAILS</h5>
                </a>
            </div>
            
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/coconutfiber'}}">
                    <img src="{{url('/images/coconutfiber.jpg')}}" alt="" class="w-full h-48 object-cover">
                    <h4 class="text-xl font-bold mt-4">COCONUT FIBER</h4>
                    <h5 class="text-gray-600 mt-2">PRODUCT DETAILS</h5>
                </a>
            </div>
        </div>
        
        <div class="flex justify-center items-center mt-15 table-request">
            <a href="/products">
                <button class="button-custom text-white font-bold px-6 py-3 rounded-full mt-10">EXPLORE ALL PRODUCTS</button>
            </a>
        </div>
    </div>
           
 


@endsection


