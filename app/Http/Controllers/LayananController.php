<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all(); // Ambil semua data layanan dari database
        return view('layanan.cardview', compact('layanan'));
    }
    public function show($slug)
    {
        $layanans = Layanan::all();
        $layanan = Layanan::where('slug', $slug)->firstOrFail();
        return view('layanan.detail', compact('layanan', 'layanans'));
    }
}
