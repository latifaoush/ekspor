@extends('products.layout')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

<div class="flex items-center justify-center dashboard-custom px-4 py-10 w-full bg-gray-200 min-h-screen">
    <div class="relative overflow-x-auto py-6 shadow-md sm:rounded-lg bg-white p-8 w-full max-w-4xl">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3 w-1/12">ID</th>
                    <th scope="col" class="px-4 py-3 w-5/12">Product</th>
                    <th scope="col" class="px-4 py-3 w-3/12">Quantity</th>
                    <th scope="col" class="px-4 py-3 w-3/12">
                        <span>Status</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-1/12">
                        {{ $request->id }}
                    </th>
                    <td class="px-4 py-4 w-5/12">
                        {{ $request->product }}
                    </td>
                    <td class="px-4 py-4 w-3/12">
                        {{ $request->quantity }}
                    </td>
                    <td class="px-4 py-4 text-right w-3/12 ">
                        <span>{{ $request->status }}</span>
                        @if ($request->status == 'accepted' || $request->status == 'declined' || $request->status == 'pending')
                        <form action="{{ route('marketing.requests.destroy', $request) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white mx-4 bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-3.5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-1/12"></td>
                    <td class="px-4 py-2 w-5/12">
                        <form action="{{ route('marketing.requests.store') }}" method="POST">
                            @csrf
                            <select name="product" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="0" disabled selected>Select product</option>
                                <option value="Green Coconut">Green Coconut</option>
                                <option value="Brown Coconut">Brown Coconut</option>
                            </select>
                    </td>
                    <td class="px-4 py-2 w-3/12">
                        <input type="number" name="quantity" placeholder="Quantity" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </td>
                    <td class="px-4 py-2 text-right w-3/12">
                        <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xs px-3.5 py-2.5 me-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Request</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
