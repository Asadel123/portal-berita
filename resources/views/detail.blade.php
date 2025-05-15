@extends('layouts.app')

@section('content')
    <!-- Judul Berita -->
    <h1 class="text-3xl font-bold mb-4">{{ $berita->judul }}</h1>

    <!-- Gambar Utama Berita -->
    @if($berita->gambar)
        <img src="{{ asset('images/' . $berita->gambar) }}"
            alt="{{ $berita->judul }}"
            class="w-2/3 max-h-96 object-cover rounded-lg mb-6 shadow">
    @endif


    <!-- Konten Berita -->
    <div class="prose prose-lg max-w-none mb-6 w-2/3">
        {!! $berita->isi !!}
    </div>

    <!-- Informasi Tambahan -->
    <div class="flex items-center text-sm text-gray-600 space-x-4">
        <div>
            <span class="font-medium">Kategori:</span>
            <a href="{{ url('/kategori/' . $berita->kategori->id) }}"
               class="text-blue-600 hover:underline">
                {{ $berita->kategori->nama }}
            </a>
        </div>
        <div>
            <span class="font-medium">Dipublikasikan:</span>
            {{ $berita->created_at->format('d M Y') }}
        </div>
    </div>

    <!-- Tombol Kembali ke Beranda -->
    <div class="mt-8">
        <a href="{{ url('/') }}"
           class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            ← Kembali ke Beranda
        </a>
    </div>
@endsection
