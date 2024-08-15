@extends('layout.main')

@section('container')
    <!-- Custom CSS -->
    <style>
        .portfolio-info {
            position: relative;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.5s;
        }

        .portfolio-item:hover .portfolio-info {
            opacity: 1;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000;
            border-radius: 50%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            /* Adjust the width to provide some padding around the icon */
            height: 40px;
            /* Adjust the height to provide some padding around the icon */
            top: 50%;
            /* Center vertically */
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            /* Optional: add a semi-transparent background */
            border-radius: 50%;
            /* Optional: make the button round */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.7);
            /* Optional: darken on hover */
        }

        .carousel-item {
            padding: 15px;
        }

        .carousel-item img {
            border-radius: 10px;
        }

        table td {
            font-size: small;
        }

        table td:nth-child(2) {
            padding-left: 20px;
            /* Menambahkan jarak pada kolom kedua */
        }

        /* CSS untuk fade-in efek */
        .fade-in {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .fade-in.show {
            opacity: 1;
        }
    </style>
    <main class="main">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize AOS
                AOS.init();

                // Fade-in effect for the image
                const img = document.querySelector('#hero img');
                img.classList.add('show');
            });
        </script>
        <!-- Hero Section -->
        <section id="hero" class="hero section" style="background-color: #f4f4f4;">
            <img src="img/trenggalek-bg.jpg" alt="foto-trenggalek" data-aos="fade-in">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Selamat Datang di Dukcapil Trenggalek</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Membahagiakan Masyarakat</p>
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section" style="background-color: #f4f4f4;">
            <div class="container" data-aos="fade-up">
            </div>
            </div>
        </section><!-- /Clients Section -->

        <section id="about" class="about section" style="background-color: #f4f4f4;">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">
                    <div class="col-xl-5 content">
                        <h3>Tentang Dukcapil</h3>
                        <h2>Dukcapil Trenggalek</h2>
                        <p>Lembaga pemerintah yang bertanggung jawab atas administrasi kependudukan di Kabupaten Trenggalek,
                            Jawa Timur. Melalui layanannya, Dukcapil memfasilitasi pendaftaran dan penerbitan dokumen
                            kependudukan bagi penduduk setempat.</p>
                        <a href="/profil/motto-visi-misi" class="read-more"><span>Baca Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-calendar-event"></i>
                                    <h3>Jam Kerja</h3>
                                    <p>
                                    <table>
                                        <tr>
                                            <td>Senin - Kamis</td>
                                            <td>07.00 - 12.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>12.00 - 15.15 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Jum'at</td>
                                            <td>07.00 - 11.30 WIB</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>11.30 - 15.30 WIB</td>
                                        </tr>
                                    </table>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-map"></i>
                                    <h3>Lokasi</h3>
                                    <p style="font-size: small">Jl. Brigjen Sutran No. 17, Sumbergedong, Kec. Trenggalek,
                                        Kab. Trenggalek, Jawa Timur 66315. <br>Telepon / Fax : 0355-791160 </p>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-phone"></i>
                                    <h3>Kontak</h3>
                                    <p style="font-size: small">
                                        Telepon: 0355-791160 <br>
                                        Email: <a
                                            href="mailto:disdukcapil.trenggalek@gmail.com">disdukcapil.trenggalek</a><br>
                                        Facebook: <a href="https://www.facebook.com/disdukcapil.trenggalek/"
                                            target="_blank">disdukcapil.trenggalek</a><br>
                                        Instagram: <a href="https://www.instagram.com/disdukcapil.trenggalek/"
                                            target="_blank">disdukcapil.trenggalek</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-card-list"></i>
                                    <h3>Layanan</h3>
                                    <p style="font-size: small">
                                        - Pendaftaran Kartu Tanda Penduduk (KTP) <br>
                                        - Pendaftaran Akta Kelahiran <br>
                                        - Pendaftaran Akta Pernikahan <br>
                                        - dan Masih Banyak Lagi >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Stats Section -->
        <div class="section-title-stats">
            <h2>Statistik Kependudukan</h2>
        </div>
        <section id="stats" class="stats section">
            <img src="img/statistik.png" alt="background_statistik">
            <div class="container position-relative" data-aos-delay="100">
                <div class="row gy-1">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-75">
                            <i class="bi bi-people-fill"></i>
                            <span data-purecounter-start="0" data-purecounter-end="756109" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Jumlah Penduduk</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="stats-item text-center w-100 h-50">
                            <i class="bi bi-person-standing"></i>
                            <span data-purecounter-start="0" data-purecounter-end="379864" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Laki-Laki</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-50">
                            <i class="bi bi-person-standing-dress"></i>
                            <span data-purecounter-start="0" data-purecounter-end="376245" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Perempuan</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-50">
                            <i class="bi bi-person-lines-fill"></i>
                            <span data-purecounter-start="0" data-purecounter-end="280350" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Jumlah KK</p>
                        </div>
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </section><!-- /Stats Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan</h2>
                <p>Informasi Layanan Dinas Kependudukan dan Catatan Sipil Trenggalek</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="fas fa-baby"></i></div>
                            <div>
                                <h4 class="title"><a href="/layanan/akta-pengesahan-anak" class="stretched-link">Akta
                                        Pengesahan
                                        Anak</a>
                                </h4>
                                <p class="description">Pengesahan anak merupakan pengesahan status seorang anak yang lahir
                                    dari perkawinan yang telah sah menurut hukum agama, pada saat pencatatan perkawinan dari
                                    kedua orang tua anak tersebut telah sah menurut hukum negara.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="fas fa-hands-holding-child"></i></div>
                            <div>
                                <h4 class="title"><a href="/layanan/akta-pengakuan-anak" class="stretched-link">Akta
                                        Pengakuan
                                        Anak</a></h4>
                                <p class="description">Pengakuan anak merupakan pengakuan seorang ayah terhadap anaknya
                                    yang lahir dari perkawinan yang telah sah menurut hukum agama dan disetujui oleh ibu
                                    kandung anak tersebut.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-arrow-through-heart"></i></div>
                            <div>
                                <h4 class="title"><a href="/layanan/akta-perkawinan" class="stretched-link">Akta
                                        Perkawinan</a></h4>
                                <p class="description">Akta Perkawinan adalah dokumen resmi yang diterbitkan oleh Dinas
                                    Kependudukan dan Pencatatan Sipil atau Kantor Urusan Agama setelah seorang pria dan
                                    seorang wanita melangsungkan perkawinan secara sah</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-heart-crack"></i></div>
                            <div>
                                <h4 class="title"><a href="/layanan/akta-perceraian" class="stretched-link">Akta
                                        Perceraian</a></h4>
                                <p class="description">Akta perceraian adalah suatu akta yang dibuat dan diterbitkan oleh
                                    Dinas Kependudukan yang membuktikan secara pasti dan sah tentang Pencatatan Perceraian
                                    seseorang setelah adanya Penetapan Pengadilan Negeri</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-cake-candles"></i></div>
                            <div>
                                <h4 class="title"><a href="/layanan/akta-kelahiran" class="stretched-link">Akta
                                        Kelahiran</a>
                                </h4>
                                <p class="description">Akta Kelahiran adalah suatu dokumen identitas autentik yang wajib
                                    dimiliki setiap warga negara Indonesia.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-ring"></i></div>
                            <div>
                                <h4 class="title"><a href="/layanan/surat-keterangan-pembatalan-perkawinan"
                                        class="stretched-link">Surat
                                        Keterangan Pembatalan Perkawinan</a></h4>
                                <p class="description">Pembatalan perkawinan ialah tindakan Pengadilan yang berupa putusan
                                    yang menyatakan perkawinan yang dilakukan itu dinyatakan tidak sah, sehingga perkawinan
                                    tersebut dianggap tidak pernah ada.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="content about" style="text-align: center">
                        <div class="content">
                            <a href="/layanan" class="read-more" style="font-size: small"><span>Baca
                                    Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Galeri</h2>
                <p>Poster dan Vidio terbaru di Dukcapil Trenggalek</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="isotope-layout" data-default-filter=".filter-foto" data-layout="masonry"
                    data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter=".filter-foto" class="filter-active">Poster</li>
                        <li data-filter=".filter-vidio">Video</li>
                        {{-- <li data-filter=".filter-branding">Web</li> --}}
                    </ul><!-- End Portfolio Filters -->

                    <div class="filter-foto portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div id="fotoCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($foto->filter(fn($item) => str_contains($item['filter'], 'filter-foto'))->chunk(4) as $chunk)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <div class="row gy-4">
                                            @foreach ($chunk as $item)
                                                <div
                                                    class="col-lg-3 col-md-6 portfolio-item isotope-item {{ $item['filter'] }}">
                                                    <img src="{{ asset($item['thumbnail']) }}" class="img-fluid"
                                                        alt="">
                                                    <div class="portfolio-info">
                                                        <h4>{{ $item['judul'] }}</h4>
                                                        <p>{{ $item['keterangan'] }}</p>
                                                        <a href="{{ asset($item['thumbnail']) }}"
                                                            title="{{ $item['judul'] }}"
                                                            data-gallery="portfolio-gallery-{{ $item['filter'] }}"
                                                            class="glightbox preview-link"><i
                                                                class="bi bi-zoom-in"></i></a>
                                                        <a href="{{ $item['link'] }}" title="More Details"
                                                            class="details-link"><i class="bi bi-link-45deg"></i></a>
                                                    </div>
                                                </div><!-- End Portfolio Item -->
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#fotoCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#fotoCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><!-- End Foto Filter -->

                    <div class="filter-vidio portfolio-container" data-aos="fade-up" data-aos-delay="200"
                        style="display: none;">
                        <div id="vidioCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($foto->filter(fn($item) => str_contains($item['filter'], 'filter-vidio'))->chunk(3) as $chunk)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <div class="row gy-4">
                                            @foreach ($chunk as $item)
                                                <div
                                                    class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $item['filter'] }}">
                                                    <iframe width="100%" height="315" src="{{ $item->vidio }}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen></iframe>
                                                </div><!-- End Portfolio Item -->
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#vidioCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#vidioCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><!-- End Vidio Filter -->
                </div>
            </div>
        </section><!-- /Portfolio Section -->

        <!-- Custom CSS -->
        <style>
            .portfolio-info {
                position: relative;
                bottom: 0;
                left: 0;
                background: rgba(0, 0, 0, 0.7);
                color: #fff;
                padding: 10px;
                text-align: center;
                opacity: 0;
                transition: opacity 0.5s;
            }

            .portfolio-item:hover .portfolio-info {
                opacity: 1;
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                background-color: #000;
                border-radius: 50%;
            }

            .carousel-item {
                padding: 15px;
            }

            .carousel-item img,
            .carousel-item iframe {
                border-radius: 10px;
            }
        </style>

        <!-- Custom JS for Filter Handling -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filters = document.querySelectorAll('.portfolio-filters li');
                const portfolioContainers = document.querySelectorAll('.portfolio-container');

                filters.forEach(filter => {
                    filter.addEventListener('click', () => {
                        filters.forEach(f => f.classList.remove('filter-active'));
                        filter.classList.add('filter-active');

                        const filterValue = filter.getAttribute('data-filter');
                        portfolioContainers.forEach(container => {
                            if (container.classList.contains(filterValue.substring(1))) {
                                container.style.display = 'block';
                            } else {
                                container.style.display = 'none';
                            }
                        });
                    });
                });
            });
        </script>

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pegawai</h2>
                <p>Badan Pengurus Harian Dinas Kependudukan dan Pencatatan Sipil</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('img/team/iqbal.svg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/iqqqbaallll/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Muhamad Iqbal P. P.</h4>
                            <span>Ketua</span>
                            <p>Melayani dengan Integritas, Membangun Kepercayaan, Trenggalek Semakin Didepan</p>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('img/team/adinda.svg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/adindaspm88/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Adinda Shakilla P. M.</h4>
                            <span>Wakil Ketua</span>
                            <p>Bersama Menuju Pelayanan Prima Trenggalek Jaya</p>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('img/team/meischa.svg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/mschzhr/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Meischa Zahra N. A.</h4>
                            <span>Sekretaris</span>
                            <p>Administrasi Tertib, Pelayanan Efektif, Trenggalek Meroket</p>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('img/team/pandu.svg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/panduwahyuaji_/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Pandu Wahyu A.</h4>
                            <span>Bendahara</span>
                            <p>Transparansi dalam Keuangan, Trenggalek Maju dalam Pembangunan</p>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                        <div class="member-img">
                            <img src="{{ asset('img/team/idho.svg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/gholidho_herda/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Gholidho Herda P.</h4>
                            <span>Humas</span>
                            <p>Menghubungkan dengan Hati, Menyampaikan dengan Empati, Trenggalek Bersinergi</p>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                            <p>
                                Daftar Pertanyaan yang paling sering ditanyakan oleh masyarakat Trenggalek berkaitan dengan
                                Dukcapil Trenggalek.
                            </p>
                            <div class="col-lg-5 content about">
                                <div class="content" style="width: 10rem">
                                    <a href="/faq" class="read-more" style="font-size: small"><span>Semua FAQ</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-container">
                            @foreach ($faqs as $index => $faq)
                                <div class="faq-item {{ $index === 0 ? 'faq-active' : '' }}">
                                    <h3><span class="num">{{ $index + 1 }}.</span>
                                        <span>{{ $faq['pertanyaan'] }}</span>
                                    </h3>
                                    <div class="faq-content">
                                        <p>{{ $faq['jawaban'] }}</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            </div>
            </div>
        </section>
    </main>
@endsection
