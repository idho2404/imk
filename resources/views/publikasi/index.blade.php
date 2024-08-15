@extends('layout.main')

@section('styles')
    <style>
        .about .icon-box {
            padding: 20px;
            height: 15rem;
        }

        .about .icon-box i {
            margin-bottom: 0;
        }

        .about .icon-box h3 {
            font-size: 20px;
        }

        .accordion-button:not(.collapsed) {
            background-color: #e84545;
            color: #ffffff;
        }

        .accordion-button:focus {
            outline: none;
        }

        .accordion-button {
            outline: none;
        }

        .button:focus:not(:focus-visible) {
            outline: none;
        }

        .accordion {
            --bs-accordion-btn-focus-box-shadow: 0;
        }

        [id^="headingOne"].accordion-header {
            margin-top: 0;
        }

        button.accordion-button {
            border-top: 1px solid #dee2e6;
        }

        table {
            width: 100%;
        }

        td.list {
            width: 90%;
        }

        td button {
            border: none;
            /* Menghilangkan border */
            background-color: #e84545;
            /* Warna latar belakang merah, sesuaikan dengan kebutuhan Anda */
            color: #fff;
            /* Warna teks putih, sesuaikan dengan kebutuhan Anda */
            padding: 10px 20px;
            /* Padding dalam tombol */
            text-align: center;
            /* Perataan teks di tengah */
            text-decoration: none;
            /* Menghilangkan garis bawah pada teks */
            display: inline-block;
            /* Tampilan inline block */
            font-size: 16px;
            /* Ukuran font */
            cursor: pointer;
            /* Ganti kursor saat di hover */
            border-radius: 5px;
            /* Sudut melengkung, sesuaikan dengan kebutuhan Anda */
        }

        .section-title {
            padding-bottom: 1rem;
        }

        .searchbar {
            margin-top: -2rem;
            margin-bottom: 2rem;
        }

        input[type="text"] {
            border: px solid #e84545;
        }

        input[type="text"]:focus {
            border-color: #e84545;
            box-shadow: 0 0 5px #e84545;
            outline: none;
        }

        mark {
            background: yellow;
            color: black;
        }

        /* modal  */
        /* Style untuk modal pop-up */
        .modal {
            display: none;
            position: fixed;
            z-index: 1500;
            padding-top: 2em;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 90%;
            /* Adjusted to be larger */
            max-width: 1000px;
            /* Adjusted to allow larger images */
        }

        @media screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
                /* Full width for smaller screens */
            }
        }

        .modal-content,
        .close {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        .modal-content.zoom {
            cursor: zoom-out;
            transition: transform 0.5s ease;
        }

        .modal-content.zoom:hover {
            transform: scale(2);
            /* Adjust the scale factor as needed */
        }


        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        .close {
            position: absolute;
            top: 0;
            right: 50px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
@endsection

@section('container')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="">Publikasi/Unduhan</h1>
                            <p class="mb-0">Dokumen-dokumen terkait pelaksanaan layanan Dukcapil Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Publikasi</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8 searchbar">
                        <input type="text" id="search-input" placeholder="Cari dokumen..." class="form-control mt-3">
                    </div>
                </div>
            </div>
            </div>
            <div class="container">
                <div class="isotope-layout" data-default-filter=".filter-dasarhukum" data-layout="masonry"
                    data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter=".filter-dasarhukum" class="filter-active">Dasar Hukum</li>
                        <li data-filter=".filter-renja">Rencana Kerja</li>
                        <li data-filter=".filter-lakip">LAKIP</li>
                        <li data-filter=".filter-renstra">Rencana Strategis</li>
                        <li data-filter=".filter-kinerja">Perjanjian Kinerja</li>
                        <li data-filter=".filter-konsultasi">Laporan Forum Konsultasi Publik</li>
                        <li data-filter=".filter-ikm">Laporan Survei IKM</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-dasarhukum">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Dasar Hukum</h2>
                            </div>
                            <div class="accordion" id="accordionExampleDasarHukum">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOneDasarHukum">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOneDasarHukum" aria-expanded="true"
                                            aria-controls="collapseOneDasarHukum">
                                            Undang-undang
                                        </button>
                                    </h2>
                                    <div id="collapseOneDasarHukum" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOneDasarHukum" data-bs-parent="#accordionExampleDasarHukum">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Undang-Undang Republik Indonesia Nomor 23 Tahun 2006 Tentang
                                                                Administrasi Kependudukan</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Undang-Undang Republik Indonesia Nomor 24 Tahun 2013 Tentang
                                                                Perubahan Atas Undang-Undang Nomor 23 Tahun 2006 Tentang
                                                                Administrasi Kependudukan</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoDasarHukum">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwoDasarHukum" aria-expanded="false"
                                            aria-controls="collapseTwoDasarHukum">
                                            Peraturan Pemerintah
                                        </button>
                                    </h2>
                                    <div id="collapseTwoDasarHukum" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoDasarHukum" data-bs-parent="#accordionExampleDasarHukum">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Pemerintah Republik Indonesia Nomor 40 Tahun 2019
                                                                Tentang Pelaksanaan Undang-Undang Nomor 23 Tahun 2006
                                                                Tentang Administrasi Kependudukan Sebagaimana Telah Diubah
                                                                Dengan Undang-Undang Nomor 24 Tahun 2013 Tentang Perubahan
                                                                Atas Undang-Undang Nomor 23 Tahun 2006 Tentang Administrasi
                                                                Kependudukan</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTreeDasarHukum">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTreeDasarHukum" aria-expanded="false"
                                            aria-controls="collapseTreeDasarHukum">
                                            Peraturan Presiden
                                        </button>
                                    </h2>
                                    <div id="collapseTreeDasarHukum" class="accordion-collapse collapse"
                                        aria-labelledby="headingTreeDasarHukum"
                                        data-bs-parent="#accordionExampleDasarHukum">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Presiden Republik Indonesia Nomor 96 Tahun 2018
                                                                Tentang Persyaratan Dan Tata Cara Pendaftaran Penduduk Dan
                                                                Pencatatan Sipil</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingFourDasarHukum">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourDasarHukum" aria-expanded="false" aria-controls="collapseFourDasarHukum">
                                              Keputusan Presiden
                                            </button>
                                          </h2>
                                          <div id="collapseFourDasarHukum" class="accordion-collapse collapse" aria-labelledby="headingFourDasarHukum" data-bs-parent="#accordionExampleDasarHukum">
                                            <div class="accordion-body">
                                              Konten dari Accordion Item #2.
                                            </div>
                                          </div>
                                        </div> --}}
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFiveDasarHukum">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFiveDasarHukum" aria-expanded="false"
                                            aria-controls="collapseFiveDasarHukum">
                                            Peraturan Menteri Dalam Negeri
                                        </button>
                                    </h2>
                                    <div id="collapseFiveDasarHukum" class="accordion-collapse collapse"
                                        aria-labelledby="headingFiveDasarHukum"
                                        data-bs-parent="#accordionExampleDasarHukum">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 19
                                                                Tahun 2018 Tentang Peningkatan Kualitas Layanan Administrasi
                                                                Kependudukan</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 2
                                                                Tahun 2016 Tentang Kartu Identitas Anak</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 14
                                                                Tahun 2015 Tentang Pedoman Pendataan Penduduk Nonpermanen
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 102
                                                                Tahun 2019 Tentang Pemberian Hak Akses Dan Pemanfaatan Data
                                                                Kependudukan</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 108
                                                                Tahun 2019 Tentang Peraturan Pelaksanaan Peraturan Presiden
                                                                Nomor 96 Tahun 2018 Tentang Persyaratan Dan Tata Cara
                                                                Pendaftaran Penduduk Dan Pencatatan Sipil</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 104
                                                                Tahun 2019 Tentang Pendokumentasian Administrasi
                                                                Kependudukan</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSixDasarHukum">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSixDasarHukum"
                                            aria-expanded="false" aria-controls="collapseSixDasarHukum">
                                            Peraturan Daerah
                                        </button>
                                    </h2>
                                    <div id="collapseSixDasarHukum" class="accordion-collapse collapse"
                                        aria-labelledby="headingSixDasarHukum"
                                        data-bs-parent="#accordionExampleDasarHukum">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Daerah Kabupaten Trenggalek Nomor 4 Tahun 2009
                                                                tentang Administrasi Kependudukan di Kabupaten Trenggalek
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Peraturan Daerah Kabupaten Trenggalek Nomor 14 tahun 2016
                                                                tentang Perubahan Kedua Atas Perda Kabupaten Trenggalek
                                                                Nomor 4 Tahun 2009 tentang Administrasi Kependudukan di
                                                                Kabupaten Trenggalek</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-renja">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Rencana Kerja</h2>
                            </div>
                            <div class="accordion" id="accordionExampleRenja">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOneRenja">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOneRenja" aria-expanded="true"
                                            aria-controls="collapseOneRenja">
                                            Rencana Kerja 2018
                                        </button>
                                    </h2>
                                    <div id="collapseOneRenja" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOneRenja" data-bs-parent="#accordionExampleRenja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Rencana Kerja Tahun 2018</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoRenja">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwoRenja"
                                            aria-expanded="false" aria-controls="collapseTwoRenja">
                                            Rencana Kerja 2019
                                        </button>
                                    </h2>
                                    <div id="collapseTwoRenja" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoRenja" data-bs-parent="#accordionExampleRenja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Rencana Kerja Tahun 2019</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTreeRenja">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTreeRenja"
                                            aria-expanded="false" aria-controls="collapseTreeRenja">
                                            Rencana Kerja 2020
                                        </button>
                                    </h2>
                                    <div id="collapseTreeRenja" class="accordion-collapse collapse"
                                        aria-labelledby="headingTreeRenja" data-bs-parent="#accordionExampleRenja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Rencana Kerja Tahun 2020</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFourRenja">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFourRenja"
                                            aria-expanded="false" aria-controls="collapseFourRenja">
                                            Rencana Kerja 2021
                                        </button>
                                    </h2>
                                    <div id="collapseFourRenja" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourRenja" data-bs-parent="#accordionExampleRenja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Rencana Kerja Tahun 2021</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFiveRenja">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFiveRenja"
                                            aria-expanded="false" aria-controls="collapseFiveRenja">
                                            Rencana Kerja 2022
                                        </button>
                                    </h2>
                                    <div id="collapseFiveRenja" class="accordion-collapse collapse"
                                        aria-labelledby="headingFiveRenja" data-bs-parent="#accordionExampleRenja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Rencana Kerja Tahun 2022</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Rencana Kerja Tahun 2022 Perubahan</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSixRenja">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSixRenja"
                                            aria-expanded="false" aria-controls="collapseSixRenja">
                                            Rencana Kerja 2023
                                        </button>
                                    </h2>
                                    <div id="collapseSixRenja" class="accordion-collapse collapse"
                                        aria-labelledby="headingSixRenja" data-bs-parent="#accordionExampleRenja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Rencana Kerja Tahun 2023</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-lakip">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Laporan Akuntabilitas Kinerja Instansi Pemerintah</h2>
                            </div>
                            <div class="accordion" id="accordionExampleLakip">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOneLakip">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOneLakip" aria-expanded="true"
                                            aria-controls="collapseOneLakip">
                                            Laporan Akuntabilitas Kinerja Instansi Pemerintah 2017
                                        </button>
                                    </h2>
                                    <div id="collapseOneLakip" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOneLakip" data-bs-parent="#accordionExampleLakip">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>LAKIP 2017</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoLakip">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwoLakip"
                                            aria-expanded="true" aria-controls="collapseTwoLakip">
                                            Laporan Akuntabilitas Kinerja Instansi Pemerintah 2018
                                        </button>
                                    </h2>
                                    <div id="collapseTwoLakip" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoLakip" data-bs-parent="#accordionExampleLakip">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>LAKIP 2018</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThreeLakip">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThreeLakip"
                                            aria-expanded="true" aria-controls="collapseThreeLakip">
                                            Laporan Akuntabilitas Kinerja Instansi Pemerintah 2019
                                        </button>
                                    </h2>
                                    <div id="collapseThreeLakip" class="accordion-collapse collapse"
                                        aria-labelledby="headingThreeLakip" data-bs-parent="#accordionExampleLakip">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>LAKIP 2019</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFourLakip">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFourLakip"
                                            aria-expanded="true" aria-controls="collapseFourLakip">
                                            Laporan Akuntabilitas Kinerja Instansi Pemerintah 2020
                                        </button>
                                    </h2>
                                    <div id="collapseFourLakip" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourLakip" data-bs-parent="#accordionExampleLakip">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>LAKIP 2020</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFiveLakip">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFiveLakip"
                                            aria-expanded="true" aria-controls="collapseFiveLakip">
                                            Laporan Akuntabilitas Kinerja Instansi Pemerintah 2021
                                        </button>
                                    </h2>
                                    <div id="collapseFiveLakip" class="accordion-collapse collapse"
                                        aria-labelledby="headingFiveLakip" data-bs-parent="#accordionExampleLakip">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>LAKIP 2021</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSixLakip">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSixLakip"
                                            aria-expanded="true" aria-controls="collapseSixLakip">
                                            Laporan Akuntabilitas Kinerja Instansi Pemerintah 2022
                                        </button>
                                    </h2>
                                    <div id="collapseSixLakip" class="accordion-collapse collapse"
                                        aria-labelledby="headingSixLakip" data-bs-parent="#accordionExampleLakip">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>LAKIP 2022</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSevenLakip">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSevenLakip"
                                            aria-expanded="true" aria-controls="collapseSevenLakip">
                                            Laporan Akuntabilitas Kinerja Instansi Pemerintah 2023
                                        </button>
                                    </h2>
                                    <div id="collapseSevenLakip" class="accordion-collapse collapse"
                                        aria-labelledby="headingSevenLakip" data-bs-parent="#accordionExampleLakip">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>LAKIP 2023</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-renstra">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Rencana Strategis</h2>
                            </div>
                            <div class="accordion" id="accordionExampleRenstra">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOneRenstra">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOneRenstra" aria-expanded="true"
                                            aria-controls="collapseOneRenstra">
                                            Rencana Strategis 2016-2021
                                        </button>
                                    </h2>
                                    <div id="collapseOneRenstra" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOneRenstra" data-bs-parent="#accordionExampleRenstra">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Renstra 2016-2021</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoRenstra">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwoRenstra"
                                            aria-expanded="true" aria-controls="collapseTwoRenstra">
                                            Rencana Strategis 2021-2026
                                        </button>
                                    </h2>
                                    <div id="collapseTwoRenstra" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoRenstra" data-bs-parent="#accordionExampleRenstra">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Renstra 2021-2026</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-kinerja">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Perjanjian Kinerja</h2>
                            </div>
                            <div class="accordion" id="accordionExampleKinerja">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOneKinerja">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOneKinerja" aria-expanded="true"
                                            aria-controls="collapseOneKinerja">
                                            Perjanjian Kinerja 2020
                                        </button>
                                    </h2>
                                    <div id="collapseOneKinerja" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOneKinerja" data-bs-parent="#accordionExampleKinerja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Perjanjian Kinerja 2020</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoKinerja">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwoKinerja"
                                            aria-expanded="true" aria-controls="collapseTwoKinerja">
                                            Perjanjian Kinerja 2021
                                        </button>
                                    </h2>
                                    <div id="collapseTwoKinerja" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoKinerja" data-bs-parent="#accordionExampleKinerja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Perjanjian Kinerja 2021</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThreeKinerja">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThreeKinerja"
                                            aria-expanded="true" aria-controls="collapseThreeKinerja">
                                            Perjanjian Kinerja 2022
                                        </button>
                                    </h2>
                                    <div id="collapseThreeKinerja" class="accordion-collapse collapse"
                                        aria-labelledby="headingThreeKinerja" data-bs-parent="#accordionExampleKinerja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Perjanjian Kinerja 2022</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFourKinerja">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFourKinerja"
                                            aria-expanded="true" aria-controls="collapseFourKinerja">
                                            Perjanjian Kinerja 2023
                                        </button>
                                    </h2>
                                    <div id="collapseFourKinerja" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourKinerja" data-bs-parent="#accordionExampleKinerja">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Perjanjian Kinerja 2023</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-konsultasi">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Laporan Forum Konsultasi Publik</h2>
                            </div>
                            <div class="accordion" id="accordionExampleKonsultasi">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOneKonsultasi">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOneKonsultasi" aria-expanded="true"
                                            aria-controls="collapseOneKonsultasi">
                                            Laporan Forum Konsultasi Publik 2019
                                        </button>
                                    </h2>
                                    <div id="collapseOneKonsultasi" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOneKonsultasi"
                                        data-bs-parent="#accordionExampleKonsultasi">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>LFKP 2019</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-ikm">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Laporan Hasil Survei Indeks Kepuasan Masyarakat</h2>
                            </div>
                            <div class="accordion" id="accordionExampleIKM">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOneIKM">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOneIKM" aria-expanded="true"
                                            aria-controls="collapseOneIKM">
                                            Laporan Hasil Survei Indeks Kepuasan Masyarakat 2017
                                        </button>
                                    </h2>
                                    <div id="collapseOneIKM" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOneIKM" data-bs-parent="#accordionExampleIKM">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Laporan Hasil Survei IKM 2017</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol">
                                                        <button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoIKM">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwoIKM"
                                            aria-expanded="true" aria-controls="collapseTwoIKM">
                                            Laporan Hasil Survei Indeks Kepuasan Masyarakat 2018
                                        </button>
                                    </h2>
                                    <div id="collapseTwoIKM" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoIKM" data-bs-parent="#accordionExampleIKM">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Laporan Hasil Survei IKM 2018</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThreeIKM">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThreeIKM"
                                            aria-expanded="true" aria-controls="collapseThreeIKM">
                                            Laporan Hasil Survei Indeks Kepuasan Masyarakat 2019
                                        </button>
                                    </h2>
                                    <div id="collapseThreeIKM" class="accordion-collapse collapse"
                                        aria-labelledby="headingThreeIKM" data-bs-parent="#accordionExampleIKM">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Laporan Hasil Survei IKM 2019</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFourIKM">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFourIKM"
                                            aria-expanded="true" aria-controls="collapseFourIKM">
                                            Laporan Hasil Survei Indeks Kepuasan Masyarakat 2020
                                        </button>
                                    </h2>
                                    <div id="collapseFourIKM" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourIKM" data-bs-parent="#accordionExampleIKM">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Laporan Hasil Survei IKM 2020</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFiveIKM">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFiveIKM"
                                            aria-expanded="true" aria-controls="collapseFiveIKM">
                                            Laporan Hasil Survei Indeks Kepuasan Masyarakat 2021
                                        </button>
                                    </h2>
                                    <div id="collapseFiveIKM" class="accordion-collapse collapse"
                                        aria-labelledby="headingFiveIKM" data-bs-parent="#accordionExampleIKM">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Laporan Hasil Survei IKM 2021</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol">
                                                        <button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSixIKM">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSixIKM"
                                            aria-expanded="true" aria-controls="collapseSixIKM">
                                            Laporan Hasil Survei Indeks Kepuasan Masyarakat 2023
                                        </button>
                                    </h2>
                                    <div id="collapseSixIKM" class="accordion-collapse collapse"
                                        aria-labelledby="headingSixIKM" data-bs-parent="#accordionExampleIKM">
                                        <div class="accordion-body">
                                            <table>
                                                <tr>
                                                    <td class="list">
                                                        <ul>
                                                            <li>Laporan Hasil Survei IKM 2023</li>
                                                        </ul>
                                                    </td>
                                                    <td class="tombol"><button class="myBtn" data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview"><a><span>Lihat</span></a></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->


                    </div><!-- End Portfolio Container -->

                </div>

            </div>
            <!-- Pop-up modal -->
            <div id="imageModal" class="modal">
                <span class="close">&times;</span>
                <embed src="" class="modal-content" id="pdfContent" type="application/pdf" width="100%" height="600px"/>
            </div>

        </section><!-- /Portfolio Section -->
    </main>
    <script>
        function adjustContainerHeight() {
            const container = document.querySelector('.isotope-container');
            const activeFilter = document.querySelector('.portfolio-filters .filter-active').dataset.filter;

            // Filter visible .isotope-item elements
            const visibleItems = Array.from(document.querySelectorAll('.isotope-item')).filter(item => item.classList
                .contains(activeFilter.substring(1)));

            let totalHeight = 0;

            // Calculate height of each visible item
            visibleItems.forEach(item => {
                const h2Height = item.querySelector('h2').offsetHeight;
                const accordionButtons = item.querySelectorAll('.accordion-button');
                const activeAccordionButtons = item.querySelectorAll('.accordion-button.collapsed');
                const activeAccordionContents = item.querySelectorAll('.accordion-collapse.show');

                let accordionButtonsHeight = 53;
                accordionButtons.forEach(button => {
                    accordionButtonsHeight += button.offsetHeight;
                });

                let activeContentsHeight = 0;
                activeAccordionContents.forEach(content => {
                    activeContentsHeight += content.scrollHeight;
                });

                totalHeight += h2Height + accordionButtonsHeight + activeContentsHeight;
            });

            container.style.height = `${totalHeight}px`;
        }

        // Call the function initially
        adjustContainerHeight();

        // Optionally, call the function whenever the filter changes or an accordion is toggled
        document.querySelectorAll('.portfolio-filters li').forEach(filterButton => {
            filterButton.addEventListener('click', () => {
                // Update the active filter class
                document.querySelectorAll('.portfolio-filters li').forEach(btn => btn.classList.remove(
                    'filter-active'));
                filterButton.classList.add('filter-active');

                // Adjust the container height after the filter change
                adjustContainerHeight();
            });
        });

        document.querySelectorAll('.accordion-button').forEach(button => {
            button.addEventListener('click', () => {
                // Adjust the container height after an accordion is toggled
                setTimeout(() => {
                    adjustContainerHeight();
                }, 400); // Adjust timing as needed for animation
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/mark.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search-input');
            const accordionItems = document.querySelectorAll('.accordion-item');
            const portfolioFilters = document.querySelectorAll('.portfolio-filters li');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                let found = false;

                if (searchTerm === "") {
                    // Jika kotak pencarian kosong, sembunyikan semua accordion dan hapus highlight
                    accordionItems.forEach(item => {
                        const button = item.querySelector('.accordion-button');
                        const content = item.querySelector('.accordion-collapse');

                        button.classList.add('collapsed');
                        content.classList.remove('show');

                        const instance = new Mark(content);
                        instance.unmark();
                    });
                    // Reset semua kategori
                    portfolioFilters.forEach(filter => {
                        filter.classList.remove('search-active');
                    });
                    return;
                }

                let categoryFound = new Set();

                accordionItems.forEach(item => {
                    const button = item.querySelector('.accordion-button');
                    const content = item.querySelector('.accordion-collapse');

                    const instance = new Mark(content);
                    instance.unmark();

                    if (content.innerText.toLowerCase().includes(searchTerm)) {
                        button.classList.remove('collapsed');
                        content.classList.add('show');
                        found = true;

                        // Highlight the search term
                        instance.mark(searchTerm);

                        // Tambahkan kategori ke set categoryFound
                        const parentCategory = item.closest('.portfolio-item').getAttribute(
                            'data-filter');
                        categoryFound.add(parentCategory);
                    } else {
                        button.classList.add('collapsed');
                        content.classList.remove('show');
                    }
                });

                if (!found) {
                    // If no matches found, unmark all highlights
                    accordionItems.forEach(item => {
                        const content = item.querySelector('.accordion-collapse');
                        const instance = new Mark(content);
                        instance.unmark();
                    });
                }

                adjustContainerHeight();
            });
        });
    </script>
    <script>
        // Dapatkan modal
        var modal = document.getElementById("imageModal");

        // Dapatkan elemen <embed> dalam modal
        var pdfContent = document.getElementById("pdfContent");

        // Dapatkan elemen <span> yang menutup modal
        var span = document.getElementsByClassName("close")[0];

        // Dapatkan semua tombol dengan kelas myBtn
        var btns = document.getElementsByClassName("myBtn");

        function initModal() {

            // Tambahkan event listener untuk setiap tombol
            for (var i = 0; i < btns.length; i++) {
                btns[i].onclick = function() {
                    var pdfLink = this.getAttribute("data-pdf");
                    pdfContent.setAttribute("src", pdfLink);
                    modal.style.display = "block";
                }
            }
        }

        // Inisialisasi pertama kali
        document.addEventListener("DOMContentLoaded", initModal);

        // Ketika user mengklik <span> (x), tutup modal
        span.onclick = function() {
            modal.style.display = "none";
            pdfContent.setAttribute("src", "");
        }

        // Ketika user mengklik di luar modal, tutup modal
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            pdfContent.setAttribute("src", "");
        }
    }
    </script>
@endsection
