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
        }

        #about a {
            text-decoration: none;
        }

        #about a .icon-box:hover {
            background-color: #e84545;
        }

        #about a .icon-box:hover h3 {
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
                            <h1 class="">Layanan Informasi</h1>
                            <p class="mb-0">Layanan-layanan yang disediakan oleh Dukcapil Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Layanan</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section id="about" class="about section">
            <div class="container justify-content-center text-center">
                <div class="row align-items-xl-center gy-5">
                    <div class="row gy-4 icon-boxes">
                        @foreach ($layanan as $layanan_item)
                            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ route('layanan.show', ['slug' => $layanan_item['slug']]) }}">
                                    <div class="icon-box">
                                        <i class="{{ $layanan_item['icon'] }}"></i>
                                        <h3>{{ $layanan_item['judul_layanan'] }}</h3>
                                    </div>
                                </a>
                            </div> <!-- End Icon Box -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

    </main>
    <script>
        function adjustIconBoxHeight() {
            // Ambil semua elemen dengan kelas .about .icon-box
            const iconBoxes = document.querySelectorAll('.about .icon-box');
            let maxHeight = 0;

            // Temukan tinggi maksimum
            iconBoxes.forEach(box => {
                const boxHeight = box.offsetHeight;
                if (boxHeight > maxHeight) {
                    maxHeight = boxHeight;
                }
            });

            // Terapkan tinggi maksimum ke semua .icon-box
            iconBoxes.forEach(box => {
                box.style.height = `${maxHeight}px`;
            });
        }

        // Panggil fungsi adjustIconBoxHeight setelah DOM dimuat
        document.addEventListener('DOMContentLoaded', adjustIconBoxHeight);

        // Panggil fungsi adjustIconBoxHeight setelah perubahan ukuran jendela
        window.addEventListener('resize', adjustIconBoxHeight);

        // Panggil fungsi adjustIconBoxHeight setelah semua animasi selesai
        setTimeout(() => {
            adjustIconBoxHeight();
        }, 350); // Sesuaikan waktu sesuai durasi animasi
    </script>
@endsection
