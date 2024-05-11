@extends('layout.marketing')

@section('title', 'Aplikasi Web Ekspor Kelapa')
@section('content')


<section class="bg-white dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full dark:hidden" src="{{ asset('images/bg-admin.jpg') }}" alt="dashboard image">
        <div class="flex flex-col items-start justify-between mt-4 md:mt-0">
            <h2 class="mb-4 text-3xl tracking-tight font-extrabold  dark:text-white">Coconut of Indonesia: Exporting the Best Coconut Products.</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Here you can manage your coconut products.</p>
            <button class="button-custom text-white mt-2 px-3 py-1.5 text-sm rounded-full ">Manage Products</button>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h2 class="mb-4 text-3xl  font-extrabold tracking-tight leading-none   dark:text-white">Supply Fresh and Quality Coconuts for Global Market.</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Here you can requests coconut stok.</p>
            <button class="button-custom text-white mt-2 px-3 py-1.5 text-sm rounded-full ">Request Coconut</button>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-4 lg:flex ">
            <img src="{{ asset('images/bgadm3.jpg') }} " class="rounded-lg " alt="mockup">
        </div>                
    </div>
</section>



@endsection
