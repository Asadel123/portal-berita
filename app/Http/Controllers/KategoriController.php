<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Tampilkan semua berita berdasarkan kategori
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        $berita = $kategori->berita()->latest()->paginate(6);

        return view('kategori', compact('kategori', 'berita'));
    }
}
