@extends('layout.productslayout')
@section('title', 'Products')
@section('content')

<div class="mt-20 flex items-center justify-center">
  <div class="bg-gray-300 rounded-lg p-6 flex text-left shadow-lg w-1/2">
    <div class="w-full">
      <p class="text-3xl font-bold text-white">EXCLUSIVE </p>
      <p class="text-color text-3xl font-bold">COCONUT</p>
      <p class="text-white text-sm mt-2">We’re working to build a future of shared success.</p>
    </div>
    <div class="flex justify-end ">
      <img src="{{ asset('images/gambar.png') }}" alt="Coconuts" class="w-3/4 ">
    </div>
  </div>
</div>
        <div class="container justify-center mx-auto mt-100 mb-100 ">
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-full overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/rawcoconut'}}">
                    <img src="{{url('/images/kelapamuda.jpg')}}" alt="">
                    <h4>RAW COCONUT</h4>
                    <h5>PRODUCT DETAILS</h5>
                </a>
            </div>
            
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-full overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/coconutshell'}}">
                    <img src="{{url('/images/kulitkelapa.jpg')}}" alt="">
                    <h4>COCONUT SHELL</h4>
                    <h5>PRODUCT DETAILS</h5>
                </a>
            </div>
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-full overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/coconutmilk'}}">
                    <img src="{{url('/images/coconutmilk.jpg')}}" alt="">
                    <h4>COCONUT MILK</h4>
                    <h5>PRODUCT DETAILS</h5>
                </a>
            </div>
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-full overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/coconutfiber'}}">
                    <img src="{{url('/images/coconutfiber.jpg')}}" alt="">
                    <h4>COCONUT FIBER</h4>
                    <h5>PRODUCT DETAILS</h5>
                </a>
            </div>
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-full overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/coconutsugar'}}">
                    <img src="{{url('/images/coconutsugar.jpg')}}" alt="">
                    <h4>COCONUT SUGAR</h4>
                    <h5>PRODUCT DETAILS</h5>
                </a>
            </div>
            <div class="product mx-10 my-8 text-center border border-gray-300 rounded-full overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <a href="{{'/coconutoil'}}">
                    <img src="{{url('/images/virgincoconutoil.jpg')}}" alt="">
                    <h4>VIRGIN COCONUT OIL</h4>
                    <h5>PRODUCT DETAILS</h5>
                </a>
            </div>
        </div>
    
@endsection