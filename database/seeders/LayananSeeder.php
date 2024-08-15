<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::insert([
            [
                'id' => '1', 
                'icon' => 'fas fa-baby', 
                'judul_layanan' => 'Akta Pengesahan Anak', 
                'slug' => 'akta-pengesahan-anak', 
                'deskripsi' => 'Pengesahan anak merupakan pengesahan status seorang anak yang lahir dari perkawinan yang telah sah menurut hukum agama, pada saat pencatatan perkawinan dari kedua orang tua anak tersebut telah sah menurut hukum negara.',
                'persyaratan' => '<ul><li>Daftar antrian online, pendaftaran melalui petugas registrasi desa atau pendaftaran pribadi mendesak tanpa daftar antrian (dengan rekom dari Instansi)</li>...</ul>',
                'mekanisme_prosedur' => '<ol><li>Daftar antrian online, pendaftaran melalui petugas registrasi desa atau pendaftaran pribadi mendesak tanpa daftar antrian (dengan rekom dari Instansi)</li>...</ol>',
                'waktu_penyelesaian' => '<p>Selambat – lambatnya dalam waktu 14 (empat belas) hari sejak diterimanya berkas dan dinyatakan lengkap, pemohon dapat menerima Pencatatan Akta Pengesahan Anak.</p>',
                'biaya_tarif' => '<p>Tidak dipungut biaya</p>',
                'produk_pelayanan' => '<p>Produk layanannya adalah kutipan Akta Pengesahan Anak</p>',
            ],
            [
                'id' => '2',
                'icon' => 'fas fa-hands-holding-child',
                'judul_layanan' => 'Akta Pengakuan Anak',
                'slug' => 'akta-pengakuan-anak',
                'deskripsi' => 'Pengakuan anak merupakan pengakuan seorang ayah terhadap anaknya yang lahir dari perkawinan yang telah sah menurut hukum agama dan disetujui oleh ibu kandung anak tersebut.',
                'persyaratan' => 'Persyaratan untuk layanan Akta Pengakuan Anak',
                'mekanisme_prosedur' => 'Mekanisme untuk layanan Akta Pengakuan Anak',
                'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Akta Pengakuan Anak',
                'biaya_tarif' => 'Biaya tarif untuk layanan Akta Pengakuan Anak',
                'produk_pelayanan' => 'Produk layanannya adalah Akta Pengakuan Anak'
            ],
                [
                    'id' => '3',
                    'icon' => 'fa-solid fa-heart-crack',
                    'judul_layanan' => 'Akta Perceraian',
                    'slug' => 'akta-perceraian',
                    'deskripsi' => 'Akta perceraian adalah suatu akta yang dibuat dan diterbitkan oleh Dinas Kependudukan yang membuktikan secara pasti dan sah tentang Pencatatan Perceraian seseorang setelah adanya Penetapan Pengadilan Negeri',
                    'persyaratan' => 'Persyaratan untuk layanan Akta Perceraian',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Akta Perceraian',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Akta Perceraian',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Akta Perceraian',
                    'produk_pelayanan' => 'Produk layanannya adalah Akta Perceraian'
                ],
                [
                    'id' => '4',
                    'icon' => 'bi bi-arrow-through-heart',
                    'judul_layanan' => 'Akta Perkawinan',
                    'slug' => 'akta-perkawinan',
                    'deskripsi' => 'Akta Perkawinan adalah dokumen resmi yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil atau Kantor Urusan Agama setelah seorang pria dan seorang wanita melangsungkan perkawinan secara sah',
                    'persyaratan' => 'Persyaratan untuk layanan Akta Perkawinan',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Akta Perkawinan',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Akta Perkawinan',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Akta Perkawinan',
                    'produk_pelayanan' => 'Produk layanannya adalah Akta Perkawinan'
                ],
                [
                    'id' => '5',
                    'icon' => 'fa-solid fa-skull',
                    'judul_layanan' => 'Akta Kematian',
                    'slug' => 'akta-kematian',
                    'deskripsi' => 'Akta kematian adalah suatu akta yang dibuat dan diterbitkan oleh Dinas Kependudukan yang membuktikan secara pasti tentang kematian seseorang.',
                    'persyaratan' => 'Persyaratan untuk layanan Akta Kematian',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Akta Kematian',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Akta Kematian',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Akta Kematian',
                    'produk_pelayanan' => 'Produk layanannya adalah Akta Kematian'
                ],
                [
                    'id' => '6',
                    'icon' => 'fa-solid fa-cake-candles',
                    'judul_layanan' => 'Akta Kelahiran',
                    'slug' => 'akta-kelahiran',
                    'deskripsi' => 'Akta Kelahiran adalah suatu dokumen identitas autentik yang wajib dimiliki setiap warga negara Indonesia.',
                    'persyaratan' => 'Persyaratan untuk layanan Akta Kelahiran',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Akta Kelahiran',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Akta Kelahiran',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Akta Kelahiran',
                    'produk_pelayanan' => 'Produk layanannya adalah Akta Kelahiran'
                ],
                [
                    'id' => '7',
                    'icon' => 'fa-solid fa-child-reaching',
                    'judul_layanan' => 'Surat Keterangan Pengangkatan Anak',
                    'slug' => 'surat-keterangan-pengangkatan-anak',
                    'deskripsi' => 'Pengangkatan anak adalah suatu perbuatan hukum yang mengalihkan seorang anak dari lingkungan kekuasaan orang tua, wali yang sah, atau orang lain yang bertanggung jawab atas perawatan, pendidikan dan membesarkan anak tersebut, ke dalam lingkungan keluarga orang tua angkat.',
                    'persyaratan' => 'Persyaratan untuk layanan Surat Keterangan Pengangkatan Anak',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Surat Keterangan Pengangkatan Anak',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Surat Keterangan Pengangkatan Anak',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Surat Keterangan Pengangkatan Anak',
                    'produk_pelayanan' => 'Produk layanannya adalah Surat Keterangan Pengangkatan Anak'
                ],
                [
                    'id' => '8',
                    'icon' => 'fa-solid fa-hand-holding-heart',
                    'judul_layanan' => 'Surat Keterangan Pembatalan Perceraian',
                    'slug' => 'surat-keterangan-pembatalan-perceraian',
                    'deskripsi' => 'Salinan putusan pengadilan yang telah mempunyai kekuatan hukum tetap, pencatatan pembatalan perceraian yang melampaui batas waktu 60 ( enam puluh ) hari sejak tanggal putusan pengadilan wajib dilegalisir',
                    'persyaratan' => 'Persyaratan untuk layanan Surat Keterangan Pembatalan Perceraian',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Surat Keterangan Pembatalan Perceraian',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Surat Keterangan Pembatalan Perceraian',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Surat Keterangan Pembatalan Perceraian',
                    'produk_pelayanan' => 'Produk layanannya adalah Surat Keterangan Pembatalan Perceraian'
                ],
                [
                    'id' => '9',
                    'icon' => 'fa-solid fa-ring',
                    'judul_layanan' => 'Surat Keterangan Pembatalan Perkawinan',
                    'slug' => 'surat-keterangan-pembatalan-perkawinan',
                    'deskripsi' => 'Pembatalan perkawinan ialah tindakan Pengadilan yang berupa putusan yang menyatakan perkawinan yang dilakukan itu dinyatakan tidak sah, sehingga perkawinan tersebut dianggap tidak pernah ada.',
                    'persyaratan' => 'Persyaratan untuk layanan Surat Keterangan Pembatalan Perkawinan',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Surat Keterangan Pembatalan Perkawinan',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Surat Keterangan Pembatalan Perkawinan',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Surat Keterangan Pembatalan Perkawinan',
                    'produk_pelayanan' => 'Produk layanannya adalah Surat Keterangan Pembatalan Perkawinan'
                ],
                [
                    'id' => '10',
                    'icon' => 'fa-solid fa-skull',
                    'judul_layanan' => 'Surat Keterangan Kematian Untuk Orang Asing',
                    'slug' => 'surat-keterangan-kematian-untuk-orang-asing',
                    'deskripsi' => 'Akta kematian merupakan dokumen yang diterbitkan Disdukcapil guna mencatat kematian seseorang.',
                    'persyaratan' => 'Persyaratan untuk layanan Surat Keterangan Kematian Untuk Orang Asing',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Surat Keterangan Kematian Untuk Orang Asing',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Surat Keterangan Kematian Untuk Orang Asing',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Surat Keterangan Kematian Untuk Orang Asing',
                    'produk_pelayanan' => 'Produk layanannya adalah Surat Keterangan Kematian Untuk Orang Asing'
                ],
                [
                    'id' => '11',
                    'icon' => 'fa-solid fa-skull-crossbones',
                    'judul_layanan' => 'Surat Keterangan Lahir Mati Untuk Orang Asing',
                    'slug' => 'surat-keterangan-lahir-mati-untuk-orang-asing',
                    'deskripsi' => 'Lahir mati adalah kelahiran seorang bayi dari kandungan yg berumur paling sedikit 28 minggu, pada saat dilahirkan tidak menunjukkan tanda-tanda kehidupan',
                    'persyaratan' => 'Persyaratan untuk layanan Surat Keterangan Lahir Mati Untuk Orang Asing',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Surat Keterangan Lahir Mati Untuk Orang Asing',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Surat Keterangan Lahir Mati Untuk Orang Asing',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Surat Keterangan Lahir Mati Untuk Orang Asing',
                    'produk_pelayanan' => 'Produk layanannya adalah Surat Keterangan Lahir Mati Untuk Orang Asing'
                ],
                [
                    'id' => '12',
                    'icon' => 'fa-solid fa-cake-candles',
                    'judul_layanan' => 'Surat Keterangan Kelahiran Untuk Orang Asing',
                    'slug' => 'surat-keterangan-kelahiran-untuk-orang-asing',
                    'deskripsi' => 'Surat keterangan lahir diperuntukkan bagi warga yang tidak memiliki Akte Kelahiran dan ingin membuat akte kelahiran (untuk selanjutnya diteruskan ke Dinas Kependudukan dan Catatan Sipil).',
                    'persyaratan' => 'Persyaratan untuk layanan Surat Keterangan Kelahiran Untuk Orang Asing',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Surat Keterangan Kelahiran Untuk Orang Asing',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Surat Keterangan Kelahiran Untuk Orang Asing',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Surat Keterangan Kelahiran Untuk Orang Asing',
                    'produk_pelayanan' => 'Produk layanannya adalah Surat Keterangan Kelahiran Untuk Orang Asing'
                ],
                [
                    'id' => '13',
                    'icon' => 'fa-solid fa-house-chimney',
                    'judul_layanan' => 'Surat Keterangan Tempat Tinggal Untuk Orang Asing',
                    'slug' => 'surat-keterangan-tempat-tinggal-untuk-orang-asing',
                    'deskripsi' => 'SKTT merupakan identitas yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil yang diberikan kepada orang asing yang memiliki Kartu Izin Tinggal Terbatas (KITAS).',
                    'persyaratan' => 'Persyaratan untuk layanan Surat Keterangan Tempat Tinggal Untuk Orang Asing',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Surat Keterangan Tempat Tinggal Untuk Orang Asing',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Surat Keterangan Tempat Tinggal Untuk Orang Asing',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Surat Keterangan Tempat Tinggal Untuk Orang Asing',
                    'produk_pelayanan' => 'Produk layanannya adalah Surat Keterangan Tempat Tinggal Untuk Orang Asing'
                ],
                [
                    'id' => '14',
                    'icon' => 'fa-solid fa-truck-moving',
                    'judul_layanan' => 'Surat Keterangan Pindah Datang Penduduk WNI Dalam Wilayah NKRI',
                    'slug' => 'surat-keterangan-pindah-datang-penduduk-wni-dalam-wilayah-nkri',
                    'deskripsi' => 'Surat keterangan pindah datang digunakan sebagai dasar proses perekaman dalam database kependudukan, perubahan KK bagi kepala/anggota keluarga yang tidak pindah.',
                    'persyaratan' => 'Persyaratan untuk layanan Surat Keterangan Pindah Datang Penduduk WNI Dalam Wilayah NKRI',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Surat Keterangan Pindah Datang Penduduk WNI Dalam Wilayah NKRI',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Surat Keterangan Pindah Datang Penduduk WNI Dalam Wilayah NKRI',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Surat Keterangan Pindah Datang Penduduk WNI Dalam Wilayah NKRI',
                    'produk_pelayanan' => 'Produk layanannya adalah Surat Keterangan Pindah Datang Penduduk WNI Dalam Wilayah NKRI'
                ],
                [
                    'id' => '15',
                    'icon' => 'fa-solid fa-truck-ramp-box',
                    'judul_layanan' => 'Surat Keterangan Pindah Penduduk WNI Dalam Wilayah NKRI',
                    'slug' => 'surat-keterangan-pindah-penduduk-wni-dalam-wilayah-nkri',
                    'deskripsi' => 'Surat Keterangan Pindah Penduduk adalah dokumen yang diterbitkan Dinas Dukcapil sebagai informasi bahwa seseorang telah pindah domisili atau tempat tinggal ke suatu tempat yang baru.',
                    'persyaratan' => 'Persyaratan untuk layanan Surat Keterangan Pindah Penduduk WNI Dalam Wilayah NKRI',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Surat Keterangan Pindah Penduduk WNI Dalam Wilayah NKRI',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Surat Keterangan Pindah Penduduk WNI Dalam Wilayah NKRI',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Surat Keterangan Pindah Penduduk WNI Dalam Wilayah NKRI',
                    'produk_pelayanan' => 'Produk layanannya adalah Surat Keterangan Pindah Penduduk WNI Dalam Wilayah NKRI'
                ],
                [
                    'id' => '16',
                    'icon' => 'fa-solid fa-address-card',
                    'judul_layanan' => 'Kartu Identitas Anak',
                    'slug' => 'kartu-identitas-anak',
                    'deskripsi' => 'Kartu identitas anak digunakan sebagai identitas resmi anak sebagai bukti bahwa pemilik kartu adalah anak berusia di bawah 17 tahun dan belum menikah.',
                    'persyaratan' => 'Persyaratan untuk layanan Kartu Identitas Anak',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Kartu Identitas Anak',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Kartu Identitas Anak',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Kartu Identitas Anak',
                    'produk_pelayanan' => 'Produk layanannya adalah Kartu Identitas Anak'
                ],
                [
                    'id' => '17',
                    'icon' => 'fa-solid fa-id-card',
                    'judul_layanan' => 'Kartu Tanda Penduduk Elektronik',
                    'slug' => 'kartu-tanda-penduduk-elektronik',
                    'deskripsi' => 'Kartu Tanda Penduduk Elektronik (KTP-el) adalah identitas resmi seseorang sebagai bukti diri yang diterbitkan oleh Dinas Dukcapil Kabupaten/Kota dan berlaku di seluruh wilayah NKRI.',
                    'persyaratan' => 'Persyaratan untuk layanan Kartu Tanda Penduduk Elektronik',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Kartu Tanda Penduduk Elektronik',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Kartu Tanda Penduduk Elektronik',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Kartu Tanda Penduduk Elektronik',
                    'produk_pelayanan' => 'Produk layanannya adalah Kartu Tanda Penduduk Elektronik'
                ],
                [
                    'id' => '18',
                    'icon' => 'bi bi-card-heading',
                    'judul_layanan' => 'Kartu Keluarga (KK)',
                    'slug' => 'kartu-keluarga',
                    'deskripsi' => 'Kartu keluarga adalah kartu identitas keluarga yang memuat data tentang susunan, hubungan dan jumlah anggota keluarga',
                    'persyaratan' => 'Persyaratan untuk layanan Kartu Keluarga',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Kartu Keluarga',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Kartu Keluarga',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Kartu Keluarga',
                    'produk_pelayanan' => 'Produk layanannya adalah Kartu Keluarga'
                ],
                [
                    'id' => '19',
                    'icon' => 'fa-solid fa-users-line',
                    'judul_layanan' => 'Biodata Penduduk',
                    'slug' => 'biodata-penduduk',
                    'deskripsi' => 'Biodata penduduk diterbitkan bagi warga yang berusia dibawah 17 (tujuh belas) tahun yang akan melaksanakan pernikahan.',
                    'persyaratan' => 'Persyaratan untuk layanan Biodata Penduduk',
                    'mekanisme_prosedur' => 'Mekanisme untuk layanan Biodata Penduduk',
                    'waktu_penyelesaian' => 'Waktu penyelesaian untuk layanan Biodata Penduduk',
                    'biaya_tarif' => 'Biaya tarif untuk layanan Biodata Penduduk',
                    'produk_pelayanan' => 'Produk layanannya adalah Biodata Penduduk'
                ]
        ]);
    }
}
