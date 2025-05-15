<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Halaman utama – daftar semua berita
    public function index()
    {
        $berita = Berita::latest()->paginate(6); // Tampilkan 6 berita per halaman
        return view('home', compact('berita'));
    }

    // Halaman detail berita
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('detail', compact('berita'));
    }
    
}
