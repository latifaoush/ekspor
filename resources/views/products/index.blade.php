@extends('products.layout')
@section('content')


<div class="px-20 mt-20 flex items-center justify-center cocon"> 
    <div class="flex items-center justify-center px-20">
        <div
            class="flex flex-col items-center bg-gray-300 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-lg px-3"
                src="{{ asset('images/bgadm3.jpg') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-sans text-xl">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Coconut Stock</h5>
                <div>
                    <p class="mb-3 font-sans text-xl text-gray-700 dark:text-gray-400">200+ Pcs</p>
                </div>
                <div>
                    <p class="mb-3 font-sans text-base text-gray-700 dark:text-gray-400">Here you can requests coconut
                        stock.</p>
                </div>
                <a href="/marketing/requests">
                    <button class="button-custom text-white mt-2 px-3 py-2 text-sm rounded-full">Request
                        Coconut</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="flex items-center justify-center dashboard-custom">
<div class="py-10 dashboard-custom table-request px-20 text-white font-sans relative overflow-x-auto">
    <div class="flex justify-between items-center mt-10">
        <a href="{{ route('products.create') }}">
            <button class="cub button-custom text-white text-left rounded-md size-1/7 p-2 mb-2">Add New
                Product</button>
        </a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered w-full font-sans relative overflow-x-auto shadow-md sm:rounded-lg p-10 ">
        <thead class="bg-gray-700 text-white ">
            <tr scope="row">
                <th class="px-2 py-2">ID</th>
                <th class="px-5 py-3">Image</th>
                <th class="px-4 py-2">Product</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Stock</th>
                <th class="px-4 py-2" width="260px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr scope="row">
                    <td class="px-2 py-2">{{ ++$i }}</td>
                    <td class="px-5 py-3">
                        <img src="/images/{{ $product->image }}" alt="{{ $product->product }}" class="w-20 h-20">
                    </td>
                    <td class="px-4 py-2">{{ $product->product }}</td>
                    <td class="px-4 py-2">{{ $product->price }}</td>
                    <td class="px-4 py-2">{{ $product->stock }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                            <a class="text-white text-center bg-yellow-800 hover:bg-yellow-400  mt-4 focus:outline-none focus:ring-4 
                                focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-yellow-800 dark:hover:bg-yellow-700 
                                dark:focus:ring-yellow-700 dark:border-yellow-700"
                                href="{{ route('products.edit', $product->id) }}"> <i class="fas fa-edit px-2"></i>Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete {{ $product->product }}?')" class="text-white text-center bg-red-800 hover:bg-red-400  mt-4  focus:outline-none focus:ring-4
                                     focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 dark:bg-red-800 dark:hover:bg-red-700 
                                     dark:focus:ring-gray-700 dark:border-red-700">
                                <i class="fa-solid fa-trash px-2"></i>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $products->links() !!}
</div>
</div>


@endsection