@extends('layout.dashboard')

@section('title', 'Contact Us')

@section('content')


<div class="mt-20 flex items-center justify-center">
  <div class="bg-gray-300 rounded-lg p-6 flex text-left shadow-lg w-1/2">
    <div class="w-full">
      <p class="text-3xl font-bold text-white">Contact Us </p>
      <p class="text-color text-3xl font-bold">Company</p>
      <p class="text-white text-sm mt-2">Our Company is made up of a group of highly skilled and professionals.</p>
    </div>
    <div class="flex justify-end ">
      <img src="{{ asset('images/gambar.png') }}" alt="Coconuts" class="w-3/4 ">
    </div>
  </div>
</div>


<!-- Google Maps -->
<div class="rounded-lg">
<div class="map-container mt-8 rounded-lg overflow-hidden mx-auto w-1/2 flex justify-center">
<iframe loading="lazy" width="600" height="450" style="border:0;" allowfullscreen="" class="rounded-lg" src="https://maps.google.com/maps?q=Politeknik%20Negeri%20Batam&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" title="Politeknik Negeri Batam" aria-label="Politeknik Negeri Batam"></iframe>

</div>
</div>

<div class="flex justify-center items-center space-x-4 mt-10">
  <!-- Kartu Kiri -->
  <div class="cub text-white font-sans  rounded-lg shadow-lg p-6 w-96">
    <div class="flex">
    <img src="{{ asset('images/logoo.png') }}" alt="Support Assistant" class="w-full rounded-lg mb-4 mr-4">
    <div class="flex flex-col">
    <h2 class="text-2xl font-bold mb-2">Ekspor Kelapa</h2>
    <p class="text-white text-sm font-sans">You can reach out to Ekspor Kelapa by these contact Information</p>
    </div>
    </div>
    <hr class="mt-4">
    <p class="mt-4 text-white"><i class="fas fa-phone"></i> (+62)888 8990 988</p>
    <p class="text-white"><i class="fa-brands fa-whatsapp"></i> (+62)888 8990 988</p>
    <p class="text-white"><i class="fas fa-envelope "></i> admekspor@eksporkelapa.com</p>
  </div>

  <!-- Kartu Kanan -->
  <div class="bg-white text-gray-700 bg-gray-200 rounded-lg shadow-lg p-6 w-96 font-sans">
    <h2 class="text-3xl font-bold text-yellow-500">Contact Us</h2>
    <p class="text-color text-2xl font-sans font-bold">Feel free to get in touch.</p>
    <h3 class="text-xl text-color font-bold mt-4">Information</h3>
    <p><i class="fab fa-facebook"></i> Facebook</p>
    <p><i class="fa-brands fa-square-x-twitter"></i> Twitter</p>
    <p><i class="fa-brands fa-square-instagram"></i> Instagram</p>
    <h3 class="text-xl text-color font-bold mt-4 text-yellow-500">Visit Us</h3>
    <p>Jl. Ahmad Yani, Teluk Tering, Kec. Batam Kota, Kota Batam, Kepulauan  </p>
  </div>
</div>


@endsection
