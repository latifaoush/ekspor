@extends('products.layout')
@section('content')


<div class="flex items-center justify-center dashboard-custom px-20 py-10">
<div class="container mx-auto py-10 px-20 bg-gray-400 shadow-md rounded-lg p-6 w-full">

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
            <strong class="font-bold">Whoops!</strong>
            <span class="block sm:inline">There were some problems with your input.</span>
            <ul class="mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-full ">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 gap-6 ">
                <div class="text-left">
                    <h2 class="text-3xl font-semibold flex items-center justify-center mb-4 font-serif">Add New Product</h2>
                    <a href="{{ route('products.index') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 
                    focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus
                    :ring-gray-700 dark:border-gray-700 mt-4">Back</a>
                </div>
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Image</label>
                    <input type="file" name="image" class="block w-full text-sm text-gray-900 bg-gray-200 border border-gray-300 rounded-lg cursor-pointer
                     bg-gray-50 focus:outline-none hover:bg-gray-100" placeholder="image">
                </div>
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product">Product</label>
                    <input type="text" name="product" class="block w-full bg-gray-50 text-gray-700 border border-gray-300 rounded-lg py-2 
                    px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Product">
                </div>
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product">Price</label>
                    <input type="number" name="price" class="block w-full bg-gray-50 text-gray-700 border border-gray-300 rounded-lg py-2 
                    px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Price">
                </div>
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">Stock</label>
                    <input type="number" name="stock" id="stock" class="block w-full bg-gray-50 text-gray-700 border border-gray-300 rounded-lg
                     py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Stock">
                </div>
                <div class="text-center">
                    <button type="submit" class="cub button-custom text-white text-left rounded-md py-1.5 px-3 size-1/7 p-2 mb-2">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

@endsection
