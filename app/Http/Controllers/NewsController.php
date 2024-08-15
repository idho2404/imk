<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    private function formatTanggalBerita($berita)
    {
        return $berita->map(function ($item) {
            $item->tanggal_berita = Carbon::parse($item->tanggal_berita)->translatedFormat('d F Y');
            $item->narasi_berita = Str::limit($item->narasi_berita, 150, '...');
            return $item;
        });
    }

    public function index()
    {
        $berita = Berita::with('kategoriBerita')->get();
        $semuaBerita = Berita::orderBy('tanggal_berita', 'desc')->get();
        $artikel = Berita::where('kategori_berita_id', 'BR01')->orderBy('tanggal_berita', 'desc')->get();
        $beritaDaerah = Berita::where('kategori_berita_id', 'BR02')->orderBy('tanggal_berita', 'desc')->get();
        $beritaNasional = Berita::where('kategori_berita_id', 'BR03')->orderBy('tanggal_berita', 'desc')->get();
        $dokumenPerencanaan = Berita::where('kategori_berita_id', 'BR04')->orderBy('tanggal_berita', 'desc')->get();
        $infoPenting = Berita::where('kategori_berita_id', 'BR05')->orderBy('tanggal_berita', 'desc')->get();
        $pengumumanPerkawinan = Berita::where('kategori_berita_id', 'BR06')->orderBy('tanggal_berita', 'desc')->get();
        $renstra = Berita::where('kategori_berita_id', 'BR07')->orderBy('tanggal_berita', 'desc')->get();

        // Memformat tanggal berita untuk setiap koleksi berita
        $berita = $this->formatTanggalBerita($berita);
        $semuaBerita = $this->formatTanggalBerita($semuaBerita);
        $artikel = $this->formatTanggalBerita($artikel);
        $beritaDaerah = $this->formatTanggalBerita($beritaDaerah);
        $beritaNasional = $this->formatTanggalBerita($beritaNasional);
        $dokumenPerencanaan = $this->formatTanggalBerita($dokumenPerencanaan);
        $infoPenting = $this->formatTanggalBerita($infoPenting);
        $pengumumanPerkawinan = $this->formatTanggalBerita($pengumumanPerkawinan);
        $renstra = $this->formatTanggalBerita($renstra);

        return view('berita.berita', [
            'berita' => $berita,
            'semuaBerita' => $semuaBerita,
            'artikel' => $artikel,
            'beritaDaerah' => $beritaDaerah,
            'beritaNasional' => $beritaNasional,
            'dokumenPerencanaan' => $dokumenPerencanaan,
            'infoPenting' => $infoPenting,
            'pengumumanPerkawinan' => $pengumumanPerkawinan,
            'renstra' => $renstra,
            'populer' => $this->getPopulerBerita(),
            'terbaru' => $this->getTerbaruBerita(),
        ]);
    }

    public function detail($id)
    {
        try {
            $berita = Berita::find($id);
            $populer = Berita::orderBy('klik', 'desc')
                ->take(8)
                ->get(['id', 'tumbnail_berita', 'judul', 'tanggal_berita', 'author', 'klik']);

            if ($berita) {
                $berita->increment('klik');
            }

            $semuaBerita = Berita::orderBy('tanggal_berita', 'desc')->get();
            $artikel = Berita::where('kategori_berita_id', 'BR01')->orderBy('tanggal_berita', 'desc')->get();
            $beritaDaerah = Berita::where('kategori_berita_id', 'BR02')->orderBy('tanggal_berita', 'desc')->get();
            $beritaNasional = Berita::where('kategori_berita_id', 'BR03')->orderBy('tanggal_berita', 'desc')->get();
            $dokumenPerencanaan = Berita::where('kategori_berita_id', 'BR04')->orderBy('tanggal_berita', 'desc')->get();
            $infoPenting = Berita::where('kategori_berita_id', 'BR05')->orderBy('tanggal_berita', 'desc')->get();
            $pengumumanPerkawinan = Berita::where('kategori_berita_id', 'BR06')->orderBy('tanggal_berita', 'desc')->get();
            $renstra = Berita::where('kategori_berita_id', 'BR07')->orderBy('tanggal_berita', 'desc')->get();


            Log::info($populer);

            return view('berita.detail-berita', [
                'berita' => $berita,
                'populer' => $populer,
                'semua_berita' => $semuaBerita,
                'artikel' => $artikel,
                'berita_daerah' => $beritaDaerah,
                'berita_nasional' => $beritaNasional,
                'dokumen_perencanaan' => $dokumenPerencanaan,
                'info_penting' => $infoPenting,
                'pengumuman_perkawinan' => $pengumumanPerkawinan,
                'renstra' => $renstra,
                'popular' => $this->getPopulerBerita(),
                'terbaru' => $this->getTerbaruBerita(),

            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case when berita is not found
            return redirect()->back()->with('status.error', 'Berita not found.');
        }
    }

    private function getPopulerBerita()
    {
        return Berita::orderBy('klik', 'desc')->take(3)->get();
    }

    private function getTerbaruBerita()
    {
        return Berita::orderBy('tanggal_berita', 'desc')->take(3)->get();
    }

    public function search(Request $request)
    {
        Log::info('Search initiated', ['request' => $request->all()]);

        $keyword = $request->input('keyword');
        $category = $request->input('category');

        Log::info('Search parameters', ['keyword' => $keyword, 'category' => $category]);

        $query = Berita::query();

        if ($category) {
            Log::info('Searching with category');
            $query->where('kategori_berita_id', $category);
        }

        if ($keyword) {
            Log::info('Searching with keyword');
            $query->where(function ($q) use ($keyword) {
                $q->where('judul', 'like', '%' . $keyword . '%')
                    ->orWhere('narasi_berita', 'like', '%' . $keyword . '%');
            });
        }

        $results = $this->formatTanggalBerita($query->orderBy('tanggal_berita', 'desc')->get());

        Log::info('Search results', ['results' => $results]);

        return response()->view('layout.partials.berita.search-results', compact('results'));
    }
}
