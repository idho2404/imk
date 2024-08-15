<?php

namespace Database\Seeders;

use App\Models\KategoriBerita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriBerita::insert([
            ['id' => 'BR01', 'nama_kategori_berita' => 'Artikel'],
            ['id' => 'BR02', 'nama_kategori_berita' => 'Berita Daerah'],
            ['id' => 'BR03', 'nama_kategori_berita' => 'Berita Nasional'],
            ['id' => 'BR04', 'nama_kategori_berita' => 'Dokumen Perencanaan'],
            ['id' => 'BR05', 'nama_kategori_berita' => 'Info Penting'],
            ['id' => 'BR06', 'nama_kategori_berita' => 'Pencatatan Perkawinan'],
            ['id' => 'BR07', 'nama_kategori_berita' => 'Renstra'],
        ]);
    }
}
