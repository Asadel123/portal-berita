@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <!-- Bagian Atas: Kiri dan Kanan -->
    <div class="flex flex-col lg:flex-row lg:space-x-8">
        <!-- Kiri: Berita Utama -->
        <div class="lg:w-3/4">
            <h2 class="text-2xl font-bold mb-4">Indonesia Media</h2>

            <!-- Gambar Besar -->
        <div class="bg-blue-200 w-full h-96 mb-2 flex items-center justify-center">
            <img src="{{ asset('images/artikel1.jpeg') }}" alt="Artikel 2" class="w-full h-96 object-cover">
        </div>


            <!-- Deskripsi -->
            <p class="text-gray-700 mb-6">contohcontohcontoh gambar</p>
        </div>

        <!-- Kanan: Topik Populer -->
        <div class="lg:w-1/4">
            <h3 class="text-md font-semibold mb-4">TOPIK POPULER</h3>
            <ul class="space-y-2 text-sm text-gray-600">
                <li># populer</li>
                <li># populer</li>
                <li># populer</li>
                <li># populer</li>
                <li># populer</li>
            </ul>
        </div>
    </div>

    <!-- Garis Pembatas -->
    <div class="border-b border-gray-400 my-6"></div>

<!-- Grid Gambar Berita -->
<h2 class="text-xl font-bold mb-4">Gambar Berita</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
    @foreach ($berita->take(4) as $item)
        <a href="{{ url('/berita/' . $item->id) }}" class="block bg-white shadow rounded overflow-hidden hover:shadow-lg transition">
            <!-- Gambar -->
            @if($item->gambar)
                <img src="{{ asset('images/' . $item->gambar) }}" alt="Artikel" class="w-full h-40 object-cover rounded">
            @else
                <div class="w-full h-40 bg-blue-200 flex items-center justify-center text-sm text-white">
                    Tidak ada gambar
                </div>
            @endif

            <!-- Judul -->
            <div class="p-2 text-sm font-medium text-gray-700">
                {{ $item->judul ?? 'Judul Berita' }}
            </div>
        </a>
    @endforeach
</div>



<!-- Grid Gambar Berita -->
<h2 class="text-xl font-bold mb-4">Gambar Berita</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-8">
    <div class="bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('images/artikel2.jpg') }}" alt="Artikel 1" class="w-full h-60 object-cover">
        <div class="p-4">
            <p class="text-gray-700 font-semibold text-left">Judul Artikel Dummy 1</p>
        </div>
    </div>
    <div class="bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('images/artikel1.jpeg') }}" alt="Artikel 2" class="w-full h-60 object-cover">
        <div class="p-4">
            <p class="text-gray-700 font-semibold text-left">Judul Artikel Dummy 2</p>
        </div>
    </div>
</div>

    <!-- Bagian Olahraga -->
    <div class="bg-gray-300 py-6 px-4">
        <h2 class="text-xl font-bold mb-4">OLAHRAGA</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($berita->take(4) as $item)
                <div class="bg-white h-40 flex items-center justify-center text-center text-sm">
                    Portal berita terkini
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
