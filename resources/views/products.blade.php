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
@foreach ($products as $product)
    <div
        class="product mx-10 my-8 text-center border border-gray-300 rounded-full overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
        <a  href="{{ route('detail_product', $product->id) }}">
            <img src="/images/{{ $product->image }}" alt="{{ $product->product }}">
            <h4>{{ $product->product }}</h4>
            <h6 class="text-color font-semibold">Stok : {{ $product->stock }} Pcs</h6>
            <h5>PRODUCT DETAILS</h5>
        </a>
    </div>
@endforeach
@endsection