// resources/views/requestpetani.blade.php
@extends('layout.petani')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')

    <div class="flex items-center justify-center px-4 py-10 w-full bg-gray-200 min-h-screen">
        <div class="relative overflow-x-auto py-6 shadow-md sm:rounded-lg bg-white p-8 w-full max-w-4xl">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">ID</th>
                        <th scope="col" class="px-4 py-3">Product</th>
                        <th scope="col" class="px-4 py-3">Quantity</th>
                        <th scope="col" class="px-4 py-3 text-center"><span class="sr-only">Request</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $request)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $request->id }}
                            </th>
                            <td class="px-4 py-4">{{ $request->product }}</td>
                            <td class="px-4 py-4">{{ $request->quantity }} pcs</td>
                            <td class="px-4 py-4 text-center">
                            <td class="px-4 py-4 text-center">
                                <form action="{{ route('farmer.requests.update', $request) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    @if ($request->status == 'accepted' && $request->farmer_id == Auth::id())
                                        <button type="submit" name="status" value="declined"
                                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Declined</button>
                                    @elseif ($request->status == 'declined' && $request->farmer_id == Auth::id())
                                        <button type="submit" name="status" value="accepted"
                                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Accept</button>
                                    @elseif ($request->status == 'pending')
                                        <button type="submit" name="status" value="accepted"
                                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Accept</button>
                                        <button type="submit" name="status" value="declined"
                                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Declined</button>
                                    @endif
                                </form>
                                
                            </td>


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
