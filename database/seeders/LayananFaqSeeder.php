<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LayananFaq;

class LayananFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LayananFaq::insert([
            ['layanan' => 'Akta Kelahiran'],
            ['layanan' => 'Akta Kematian'],
            ['layanan' => 'Akta Perkawinan'],
            ['layanan' => 'Akta Perceraian'],
            ['layanan' => 'Kartu Keluarga'],
            ['layanan' => 'Kartu Tanda Penduduk (KTP)'],
            ['layanan' => 'Kartu Identitas Anak (KIA)'],
            ['layanan' => 'Permasalahan NIK'],
            ['layanan' => 'Pindah Datang Penduduk dari Luar Kota'],
            ['layanan' => 'Pindah Keluar Kota'],
            ['layanan' => 'Pindah Dalam Kota'],
            ['layanan' => 'Pendataan Penduduk Non Permanen'],
            ['layanan' => 'Pelayanan Orang Asing'],
            ['layanan' => 'SKPTI'],
            ['layanan' => 'Pelayanan Pecah KK'],
        ]);


        // Tambahkan data lainnya sesuai kebutuhan
    }
}
