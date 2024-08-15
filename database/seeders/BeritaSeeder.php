<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pastikan untuk menyesuaikan path Model jika menggunakan namespace yang berbeda
        Berita::insert([
            [
                'id' => 'B0001',
                'judul' => 'PROSEDUR PENYAMPAIAN ASPIRASI DAN PENGADUAN TERKAIT PELAYANAN DISDUKCAPIL TRENGGALEK',
                'kategori_berita_id' => 'BR01',
                'tanggal_berita' => '2022-03-01',
                'tumbnail_berita' => 'img/berita/berita1.png',
                'narasi_berita' => 'Dinas Kependudukan dan Catatan Sipil (Disdukcapil) Kabupaten Trenggalek mengumumkan jadwal libur pelayanan kepada masyarakat. Berdasarkan Surat Edaran Bupati Nomor: 065/180/406.003.2/2024 tentang Hari Libur Nasional dan Cuti Bersama Tahun 2024, Disdukcapil Trenggalek dan Unit Pelaksana Teknis (UPT) akan diliburkan mulai tanggal 6 April hingga 15 April 2024. Pelayanan akan kembali dibuka pada tanggal 16 April 2024. Pengumuman ini penting untuk disampaikan agar masyarakat dapat menyesuaikan waktu kedatangan mereka untuk keperluan administrasi kependudukan. <br> <br> Selain itu, Disdukcapil Trenggalek juga mengajak seluruh masyarakat untuk segera mengaktivasi Identitas Kependudukan Digital (IKD). IKD merupakan program digitalisasi identitas yang mempermudah akses dan penggunaan data kependudukan secara online. Dengan adanya IKD, proses administrasi dapat dilakukan dengan lebih cepat dan efisien tanpa harus bergantung pada dokumen fisik. Masyarakat dapat mengaktifkan IKD dengan mengikuti langkah-langkah yang telah ditentukan oleh Disdukcapil Trenggalek. <br><br> Bagi warga yang membutuhkan informasi lebih lanjut atau memiliki pertanyaan terkait layanan Disdukcapil selama masa libur, dapat menghubungi Help Desk Disdukcapil Trenggalek melalui nomor telepon 081559595758. Dengan adanya layanan ini, diharapkan warga tetap mendapatkan informasi yang mereka butuhkan meskipun pelayanan tatap muka sedang diliburkan. Dukungan ini menunjukkan komitmen Disdukcapil Trenggalek dalam memberikan pelayanan terbaik kepada masyarakat, meskipun sedang dalam masa libur nasional dan cuti bersama.',
                'author' => 'Wahyu W.',
                'klik' => 10
            ],
            [
                'id' => 'B0002',
                'judul' => 'JUMLAH KEPALA KELUARGA KABUPATEN TRENGGALEK',
                'kategori_berita_id' => 'BR03',
                'tanggal_berita' => '2024-01-31',
                'tumbnail_berita' => 'img/berita/berita2.svg',
                'narasi_berita' => 'Berdasarkan data yang disajikan oleh Dinas Kependudukan dan Pencatatan Sipil Kabupaten Trenggalek, terdapat peningkatan jumlah kepala keluarga di setiap kecamatan selama periode 2019 hingga 2023. Kecamatan Panggul menunjukkan peningkatan signifikan, dari 27.435 kepala keluarga pada tahun 2019 menjadi 29.435 kepala keluarga pada tahun 2023. Tren serupa juga terlihat di Kecamatan Watulimo yang mengalami kenaikan dari 25.356 kepala keluarga pada tahun 2019 menjadi 27.103 pada tahun 2023, mencerminkan pertumbuhan penduduk yang stabil di wilayah tersebut. <br><br>Selain itu, beberapa kecamatan lainnya seperti Pule, Dongko, dan Karangan juga menunjukkan tren peningkatan jumlah kepala keluarga. Kecamatan Pule meningkat dari 20.802 kepala keluarga pada tahun 2019 menjadi 21.806 pada tahun 2023, sementara Kecamatan Dongko naik dari 23.920 menjadi 25.415 dalam periode yang sama. Kecamatan Karangan juga mengalami kenaikan yang konsisten dari 18.144 pada tahun 2019 menjadi 18.738 pada tahun 2023. Data ini mengindikasikan adanya dinamika populasi yang aktif di berbagai wilayah di Kabupaten Trenggalek.<br><br>Secara keseluruhan, jumlah total kepala keluarga di Kabupaten Trenggalek meningkat dari 266.849 pada tahun 2019 menjadi 280.350 pada tahun 2023. Peningkatan ini mencerminkan pertumbuhan populasi yang stabil dan berkelanjutan di kabupaten tersebut. Faktor-faktor yang mungkin berkontribusi terhadap peningkatan ini termasuk perkembangan ekonomi lokal, peningkatan fasilitas umum, serta program-program pemerintah yang mendorong kesejahteraan masyarakat. Data agregat ini penting untuk perencanaan dan pengambilan kebijakan yang tepat guna untuk memastikan kesejahteraan penduduk di seluruh Kabupaten Trenggalek.<br><br>Baca Selengkapnya di <a href="https://dukcapil.trenggalekkab.go.id/2024/01/31/jumlah-kepala-keluarga-kabupaten-trenggalek/">sini</a>',
                'author' => 'Ikhwan Z.',
                'klik' => 20
            ],
            // Tambahkan lebih banyak data berita di sini
            [
                'id' => 'B0003',
                'judul' => 'JEMPOL KEREN ( JEMPUT BOLA LAYANAN KELOMPOK RENTAN )',
                'kategori_berita_id' => 'BR02',
                'tanggal_berita' => '2022-08-31',
                'tumbnail_berita' => 'img/berita/berita3.png',
                'narasi_berita' => 'Jempol Bola Layanan Kelompok Rentan (Jempol Keren) merupakan inovasi pelayanan administrasi kependudukan yang dikembangkan oleh Dinas Kependudukan dan Pencatatan Sipil Kabupaten Trenggalek. Inovasi ini dilaksanakan melalui kolaborasi dengan Dinas Sosial dan Pemerintah Desa yang melibatkan Petugas Registrasi Desa untuk mendatangi langsung tempat tinggal penduduk, seperti panti asuhan, panti jompo, rumah sakit, lembaga kemasyarakatan, jalanan, serta tempat penampungan. Tujuan utama dari program ini adalah membantu penduduk yang mengalami kesulitan dalam memperoleh dokumen kependudukan akibat bencana alam, kerusuhan sosial, atau sebab lainnya. Dengan demikian, Jempol Keren memastikan bahwa penduduk rentan Administrasi Kependudukan yang berdomisili di Kabupaten Trenggalek mendapatkan layanan yang mereka butuhkan.<br><br>Dampak dari inovasi Jempol Keren ini sangat signifikan bagi penduduk rentan administrasi kependudukan. Pada tahun 2020, jumlah penduduk Kabupaten Trenggalek tercatat sebanyak 759.810 jiwa, di mana 2.028 di antaranya merupakan penduduk rentan administrasi kependudukan. Melalui program Jempol Keren, dilakukan pendataan dan penerbitan dokumen kependudukan bagi kelompok ini dengan cara pengecekan biometrik dan pengisian formulir biodata. Hasilnya, pada tahun 2021 terjadi penurunan jumlah penduduk rentan administrasi kependudukan sebesar 60%, dari 1.200-1.300 penduduk rentan yang belum terdata sebelumnya.<br><br>Melalui Jempol Keren, pelayanan administrasi menjadi lebih mudah dijangkau, gratis, dan memberikan kepastian identitas penduduk. Program ini tidak hanya membantu meningkatkan inklusi sosial bagi penduduk rentan tetapi juga memperluas cakupan kepemilikan dokumen kependudukan di Kabupaten Trenggalek. Inisiatif ini merupakan langkah nyata dalam memastikan setiap warga negara memiliki akses yang sama terhadap layanan kependudukan, sehingga hak-hak mereka sebagai warga negara dapat terpenuhi dengan baik.',
                'author' => 'Jempolmin',
                'klik' => 30
            ],
            [
                'id' => 'B0004',
                'judul' => 'PENGUMUMAN PENCATATAN PERKAWINAN ANTARA JEREMIA KRISTANTO REYNALDI DAN AGE THEA BERTA DESTYA SABATTINA',
                'kategori_berita_id' => 'BR06',
                'tanggal_berita' => '2023-10-13',
                'tumbnail_berita' => 'img/berita/berita4.jpg',
                'narasi_berita' => 'Dengan sukacita yang mendalam, kami mengumumkan pencatatan perkawinan antara Jeremia Kristanto Reynaldi dan Age Thea Berta Destya Sabattina pada tanggal 13 Oktober 2023. Setelah melalui perjalanan penuh cinta dan pengertian, mereka telah memutuskan untuk mengikat janji suci dalam ikatan pernikahan. Momen yang istimewa ini menandai awal baru dalam kehidupan mereka sebagai pasangan yang resmi, dan kami berharap agar kebahagiaan, kedamaian, dan berkat melimpah senantiasa menyertai langkah mereka ke depan.<br><br>Kami mengundang keluarga, sahabat, dan kerabat untuk turut merayakan kebahagiaan ini dan memberikan doa serta restu kepada pasangan pengantin baru. Semoga cinta yang mereka jalin terus berkembang dan menginspirasi, serta membawa kebahagiaan yang abadi. Terima kasih atas dukungan dan doa yang telah diberikan kepada Jeremia dan Age Thea dalam memulai babak baru yang penuh makna ini.',
                'author' => 'Setya J.',
                'klik' => 40
            ],
            [
                'id' => 'B0005',
                'judul' => 'PERUBAHAN RENSTRA DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL 2021-2026',
                'kategori_berita_id' => 'BR07',
                'tanggal_berita' => '2023-02-17',
                'tumbnail_berita' => 'img/berita/berita5.png',
                'narasi_berita' => 'Dinas Kependudukan dan Pencatatan Sipil Kabupaten Trenggalek dengan bangga mengumumkan perubahan Rencana Strategis (Renstra) untuk periode 2021 – 2026. Pembaruan ini dilakukan untuk menyesuaikan dengan dinamika dan kebutuhan masyarakat yang terus berkembang, serta untuk meningkatkan kualitas layanan kependudukan dan pencatatan sipil. Perubahan Renstra ini mencakup berbagai inisiatif strategis yang bertujuan untuk memperkuat sistem administrasi kependudukan, meningkatkan pelayanan publik, dan memastikan akurasi data kependudukan yang lebih baik. Dengan demikian, Dinas Kependudukan dan Pencatatan Sipil berkomitmen untuk memberikan layanan yang lebih cepat, tepat, dan efisien kepada seluruh warga Trenggalek.<br><br>Kami mengajak seluruh masyarakat untuk mempelajari perubahan Renstra ini agar dapat lebih memahami arah kebijakan dan strategi yang akan dijalankan oleh Dinas Kependudukan dan Pencatatan Sipil. Dengan partisipasi aktif dari masyarakat, kami yakin dapat mewujudkan tujuan bersama dalam meningkatkan kualitas layanan dan administrasi kependudukan di Kabupaten Trenggalek. Untuk informasi lebih lengkap mengenai perubahan Renstra Dinas Kependudukan dan Pencatatan Sipil 2021 – 2026, silakan kunjungi tautan berikut <br><a href="https://dukcapil.trenggalekkab.go.id/wp-content/uploads/2023/02/P-RENSTRA-2021-2026.pdf">link renstra</a>',
                'author' => 'Wawan S.',
                'klik' => 50
            ],
            [
                'id' => 'B0006',
                'judul' => 'LAKIP DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL 2021',
                'kategori_berita_id' => 'BR04',
                'tanggal_berita' => '2022-06-27',
                'tumbnail_berita' => 'img/berita/berita6.png',
                'narasi_berita' => 'Laporan Akuntabilitas Kinerja Instansi Pemerintah (LAKIP) Dinas Kependudukan dan Pencatatan Sipil tahun 2021 menyoroti berbagai pencapaian serta upaya peningkatan kualitas pelayanan administrasi kependudukan. Laporan ini memberikan gambaran komprehensif mengenai kinerja dinas dalam menyelenggarakan pelayanan publik yang efisien dan transparan. Melalui berbagai inovasi, seperti Jempol Keren yang ditujukan untuk penduduk rentan, dinas berhasil meningkatkan aksesibilitas dan inklusivitas layanan kependudukan. Upaya tersebut mencerminkan komitmen dinas dalam memenuhi kebutuhan masyarakat akan dokumen kependudukan dengan lebih cepat dan mudah.<br><br>Selain pencapaian, LAKIP 2021 juga mengidentifikasi tantangan yang dihadapi serta strategi yang diterapkan untuk mengatasinya. Dinas Kependudukan dan Pencatatan Sipil terus melakukan evaluasi dan perbaikan berkelanjutan untuk meningkatkan kualitas layanan. Program-program pelatihan bagi petugas registrasi dan pengembangan sistem informasi kependudukan menjadi fokus utama dalam meningkatkan efisiensi operasional. Dengan demikian, LAKIP 2021 tidak hanya berfungsi sebagai alat ukur kinerja, tetapi juga sebagai peta jalan untuk peningkatan layanan publik di masa mendatang.<br><br> Baca Selengkapnya di <a href="https://dukcapil.trenggalekkab.go.id/wp-content/uploads/2022/06/lakip-2021-1.pdf">sini</a>',
                'author' => 'Sudraya M.',
                'klik' => 60
            ],
            [
                'id' => 'B0007',
                'judul' => 'PARIWISATA TRENGGALEK SEMAKIN RAMAI',
                'kategori_berita_id' => 'BR05',
                'tanggal_berita' => '2024-01-07',
                'tumbnail_berita' => 'img/berita/berita7.png',
                'narasi_berita' => 'Pada tahun 2024, sektor pariwisata di Trenggalek menunjukkan peningkatan yang signifikan. Berdasarkan data yang diperoleh hingga tanggal 14 Juni 2024, jumlah pengunjung kategori destinasi wisata mencapai angka 168.146, meningkat 100% dibandingkan periode yang sama tahun sebelumnya. Seluruh pengunjung ini berasal dari nusantara, sementara jumlah pengunjung mancanegara masih nihil. Hal ini menunjukkan minat yang besar dari wisatawan domestik untuk menjelajahi keindahan dan keunikan destinasi wisata di Trenggalek, yang mungkin dipicu oleh promosi yang lebih gencar serta peningkatan fasilitas dan infrastruktur pariwisata.<br><br>Tidak hanya sektor destinasi wisata, kategori destinasi hotel dan hunian di Trenggalek juga mengalami lonjakan pengunjung. Tercatat ada 312 pengunjung nusantara yang menginap di hotel dan hunian lokal, juga meningkat 100% dibandingkan periode sebelumnya, dengan tidak adanya pengunjung mancanegara. Angka ini mencerminkan tren positif dalam industri perhotelan dan hunian di Trenggalek, sejalan dengan meningkatnya jumlah wisatawan domestik. Keberhasilan ini diharapkan terus berlanjut dan menjadi dasar untuk menarik lebih banyak wisatawan mancanegara di masa mendatang.<br><br>Baca Selengkapnya di <a href="https://datawisata.trenggalekkab.go.id/front/main?v=rekap_pengunjung">sini</a>',
                'author' => 'Wistawa K.',
                'klik' => 70
            ],
        ]);
    }
}
