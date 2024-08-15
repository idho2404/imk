@extends('layout.main')

@section('styles')
    <style>
        .about .icon-box {
            padding: 20px;
            box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.1);
        }

        .about .icon-box i {
            margin-bottom: 0;
        }

        .about .icon-box h3 {
            font-size: 20px;
            margin-top: 1rem;
        }

        #about button {
            text-decoration: none;
        }

        #about button .icon-box:hover {
            background-color: #e84545;
        }

        #about button .icon-box:hover h3 {
            color: white;
        }

        #about button .icon-box:hover p {
            color: white;
        }

        .about .icon-box:hover i {
            background-color: white;
            color: #e84545;
        }

        section,
        .section {
            background-color: white;
        }

        .container a {
            color: #e84545;
        }

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

        .chart-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            height: auto;
        }

        .filters {
            flex: 1 1 30%;
            max-width: 30%;
        }

        .chart {
            flex: 1 1 70%;
            max-width: 70%;
        }

        @media (max-width: 1200px) {
            .filters {
                max-width: 100%;
                flex: 1 1 100%;
                margin-bottom: 20px;
            }

            .chart {
                max-width: 100%;
                flex: 1 1 100%;
            }
        }

        @media (max-width: 768px) {
            .filters {
                max-width: 100%;
                flex: 1 1 100%;
            }

            .chart {
                max-width: 100%;
                flex: 1 1 100%;
            }
        }

        .form-select-sm {
            font-size: 0.875rem;
        }

        .form-label {
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .section-title h2 {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .section-title p {
            font-size: 1rem;
            color: #6c757d;
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
                            <h1 class="">Statistik</h1>
                            <p class="mb-0">Data Penduduk Kabupaten Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Statistik</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
        <section>
            <div class="container section-title text-center" data-aos="fade-up">
                <h2>Jumlah Penduduk di Kabupaten Trenggalek Berdasarkan Kecamatan</h2>
                <p class="text-muted">Filter data berdasarkan wilayah, jenis kelamin, dan tahun.</p>
            </div>
            <div class="container">
                <div class="chart-container bg-white p-4 shadow-sm rounded mx-auto d-flex flex-wrap">
                    <div class="filters col-md-4 mb-4">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <label for="wilayah" class="form-label">Wilayah:</label>
                                <select id="wilayah" class="form-select form-select-sm">
                                    <option value="semua">Semua</option>
                                    <!-- Populate options with JavaScript if needed -->
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="jenisKelamin" class="form-label">Jenis Kelamin:</label>
                                <select id="jenisKelamin" class="form-select form-select-sm">
                                    <option value="semua">Semua</option>
                                    <option value="laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="tahun" class="form-label">Tahun:</label>
                                <select id="tahun" class="form-select form-select-sm">
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mb-3 d-flex align-items-end rounded-2">
                            <a href="data.xlsx" download class="btn btn-primary">
                                <span style="color: white" class="bi bi-cloud-arrow-down-fill"> Unduh Data</span>
                            </a>
                        </div>
                    </div>
                    <div class="chart col-md-8">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="{{ asset('js/statistik.js') }}"></script>
        </section>

        <section id="lineChartSection" class="line-chart section py-5" style="background-color: #f4f4f4">
            <div class="container section-title text-center" data-aos="fade-up">
                <h2>Laju Pertumbuhan Penduduk Trenggalek Berdasarkan Kecamatan</h2>
                <p class="text-muted">Filter data berdasarkan wilayah, jenis kelamin</p>
            </div>
            <div class="container">
                <div class="chart-container bg-white p-4 shadow-sm rounded mx-auto d-flex flex-wrap">
                    <div class="filters col-md-4 mb-4">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <label for="lineWilayah" class="form-label">Wilayah:</label>
                                <select id="lineWilayah" class="form-select form-select-sm">
                                    <option value="semua">Semua</option>
                                    <!-- Populate options with JavaScript if needed -->
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="lineJenisKelamin" class="form-label">Jenis Kelamin:</label>
                                <select id="lineJenisKelamin" class="form-select form-select-sm">
                                    <option value="semua">Semua</option>
                                    <option value="laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mb-3 d-flex align-items-end rounded-2">
                            <a href="data.xlsx" download class="btn btn-primary">
                                <span style="color: white" class="bi bi-cloud-arrow-down-fill"> Unduh Data</span>
                            </a>
                        </div>
                    </div>
                    <div class="chart col-md-8">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        </section>

        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Jumlah Penduduk di Kabupaten Trenggalek</h2>
            </div>
            <div class="container justify-content-center text-center">
                <div class="row align-items-xl-center gy-5">
                    <div class="row gy-4 icon-boxes">
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn myBtn"
                                data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview">
                                <div class="icon-box">
                                    <i class="fa-regular fa-calendar"></i>
                                    <h3>Usia</h3>
                                    <p>Klik untuk lihat dokumen...</p>
                                </div>
                            </button>
                        </div> <!-- End Icon Box -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn myBtn"
                                data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview">
                                <div class="icon-box">
                                    <i class="fa-solid fa-venus-mars"></i>
                                    <h3>Jenis Kelamin</h3>
                                    <p>Klik untuk lihat dokumen...</p>
                                </div>
                            </button>
                        </div> <!-- End Icon Box -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn myBtn"
                                data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview">
                                <div class="icon-box">
                                    <i class="fa-solid fa-school"></i>
                                    <h3>Pendidikan</h3>
                                    <p>Klik untuk lihat dokumen...</p>
                                </div>
                            </button>
                        </div> <!-- End Icon Box -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn myBtn"
                                data-pdf="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview">
                                <div class="icon-box">
                                    <i class="fa-solid fa-address-card"></i>
                                    <h3>Kepemilikan KIA</h3>
                                    <p>Klik untuk lihat dokumen...</p>
                                </div>
                            </button>
                        </div> <!-- End Icon Box -->
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->
        <!-- Pop-up modal -->
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <embed src="" class="modal-content" id="pdfContent" type="application/pdf" width="100%"
                height="600px" />
        </div>
    </main>
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
