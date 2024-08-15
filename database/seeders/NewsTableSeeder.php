<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsData = [
            [
                'thumbnail' => 'img/trenggalek-foto/trenggalek1.jpg',
                'judul' => 'Ayo Perekaman Biometrik',
                'keterangan' => 'Bagi yang berumur 15 tahun atau namanya ada dalam daftar terlampir, segera daftarkan biometrik pada halaman berikut bit,ly/laporan-biometric',
                'link' => '/layanan',
                'filter' => 'filter-foto'
            ],
            [
                'thumbnail' => 'img/trenggalek-foto/trenggalek2.jpg',
                'judul' => 'Formulir Administrasi',
                'keterangan' => 'Formulir untuk persyaratan pengurusan dokumen administrasi kependudukan bisa diunduh pada siminaksopal.trenggalekkab.go.di',
                'link' => '/layanan',
                'filter' => 'filter-foto'
            ],
            [
                'thumbnail' => 'img/trenggalek-foto/trenggalek3.jpg',
                'judul' => 'Pengurusan Adminduk',
                'keterangan' => 'Tatacara melakukan administrasi kependudukan dinas dukcapil Trenggalek',
                'link' => '/layanan',
                'filter' => 'filter-foto'
            ],
            [
                'thumbnail' => 'img/trenggalek-foto/trenggalek7.jpg',
                'judul' => 'Ulang Tahun Trenggalek ke-829',
                'keterangan' => 'Trenggalek ke-829, Trenggalek Ngayomi, Ngayemi, Ngayani',
                'link' => '/layanan',
                'filter' => 'filter-foto'
            ],
            [
                'thumbnail' => 'img/trenggalek-foto/trenggalek4.png',
                'judul' => 'Aktivasi IKD',
                'keterangan' => 'Pengumuman Persyaratan dan tanggal aktivasi IKD',
                'link' => '/layanan',
                'filter' => 'filter-foto'
            ],
            [
                'thumbnail' => 'img/trenggalek-foto/trenggalek5.png',
                'judul' => 'Trenggalek Bebas Korupsi',
                'keterangan' => 'DISDUKCAPIL TRENGGALEK akan membangun zona integritas menuju wilayah bebas korupsi (WBK)',
                'link' => '/layanan',
                'filter' => 'filter-foto'
            ],
            [
                'thumbnail' => 'img/trenggalek-foto/trenggalek6.png',
                'judul' => 'DUKCAPIL tanpa Gratifikasi ',
                'keterangan' => 'Kami tidak menerima gratifikasi dalam bentuk apapaun, Trenggalek tanpa korupsi',
                'link' => '/layanan',
                'filter' => 'filter-foto'
            ],
            [
                'filter' => 'filter-vidio',
                'vidio' => 'https://www.youtube.com/embed/YabD0nQSE6g?si=FDAjK0AxKD5bkurf'
            ],
            [
                'filter' => 'filter-vidio',
                'vidio' => 'https://www.youtube.com/embed/XRpyX2CnSGQ?si=D84Eiw3XGgknbmex'
            ],
            [
                'filter' => 'filter-vidio',
                'vidio' => 'https://www.youtube.com/embed/3QesG3859Sw?si=gCNEPcrB_5eh6CTv'
            ],
        ];

        foreach ($newsData as $news) {
            News::create($news);
        }
    }
}
