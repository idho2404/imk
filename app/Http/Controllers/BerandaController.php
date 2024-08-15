<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\News;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    private function formatTanggalBerita($berita)
    {
        return $berita->map(function ($item) {
            $item->tanggal_berita = Carbon::parse($item->tanggal_berita)->translatedFormat('d F Y');
            $item->narasi_berita = Str::limit($item->narasi_berita, 100, '...');
            return $item;
        });
    }

    public function index()
    {
        $berita = Berita::with('kategoriBerita')
            ->orderBy('tanggal_berita', 'desc')
            ->take(3)
            ->get();
        // Memformat tanggal berita untuk setiap koleksi berita
        $berita = $this->formatTanggalBerita($berita);
        $foto = News::all();
        $faqs = collect();

        // Loop through id_layanan from 1 to 5
        for ($i = 1; $i <= 5; $i++) {
            // Fetch one FAQ for the current id_layanan
            $faq = Faq::where('id_layanan', $i)->first();
            if ($faq) {
                $faqs->push($faq);
            }
        }

        return view('home.index', [
            'berita' => $berita,
            'foto' => $foto,
            'faqs' => $faqs,
        ]);
    }
}
