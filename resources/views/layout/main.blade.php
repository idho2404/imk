<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('header')

    {{-- logo web --}}
    <link href="{{ asset('img/logo_trenggalek.png') }}" rel="icon" sizes="300x400">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/floating.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

    @yield('styles')

</head>

<body class="services-details-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0" style="margin-left: 5%">
                <img src="{{ asset('img/logo_trenggalek.png') }}" alt="logo trenggalek">
                <h1 class="sitename">Dukcapil Trenggalek</h1>
            </a>

            @include('layout.partials.navbar')

            <div class="btn-getstarted" style="color: white; background-color: white" href="index.html#about"></div>

            <style>
                .clickable-div {
                    cursor: pointer;
                }

                .artikel-berita {
                    transform: translateY(0);
                    transition: ease-in-out 0.5s;
                }

                .artikel-berita:hover {
                    transition: ease-in-out 0.5s;
                    border: solid 3px black;
                    transform: translateY(-5%);
                }
            </style>
        </div>
    </header>


    @yield('container')

    <!-- Include Partials -->
    @include('layout.partials.footer')
    @include('layout.partials.floating-button')
    @include('layout.partials.scrolltop')

    <style>
        .loader {
            color: #f35626;
            background: #f35626;
            width: 10px;
            height: 10px;
            margin: 50px auto;
            box-shadow: 15px 15px 0 0, -15px -15px 0 0, 15px -15px 0 0, -15px 15px 0 0, 0 15px 0 0, 15px 0 0 0, -15px 0 0 0, 0 -15px 0 0;
            animation: animate 2s linear infinite;
        }

        @keyframes animate {
            0% {
                -webkit-filter: hue-rotate(0deg);
            }

            50% {
                box-shadow: 20px 20px 0 0, -20px -20px 0 0, 20px -20px 0 0, -20px 20px 0 0, 0 10px 0 0, 10px 0 0 0, -10px 0 0 0, 0 -10px 0 0;
            }

            75% {
                box-shadow: 20px 20px 0 0, -20px -20px 0 0, 20px -20px 0 0, -20px 20px 0 0, 0 10px 0 0, 10px 0 0 0, -10px 0 0 0, 0 -10px 0 0;
            }

            100% {
                transform: rotate(360deg);
                -webkit-filter: hue-rotate(360deg);
            }
        }

        .progress {
            width: 50%;
            background-color: #e0e0e0;
            border-radius: 25px;
            overflow: hidden;
            height: 30px;
            margin: 50px 0;
        }

        .progress-bar {
            height: 100%;
            text-align: center;
            line-height: 30px;
            color: white;
            animation: animateProgress 2s linear infinite;
        }

        @keyframes animateProgress {
            0% {
                background-color: #f35626;
                filter: hue-rotate(0deg);
            }

            50% {
                background-color: #4caf50;
                filter: hue-rotate(180deg);
            }

            100% {
                background-color: #f35626;
                filter: hue-rotate(360deg);
            }
        }
    </style>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
        <div class="loading-text">Sedang Memuat Halaman ...</div>
        <div class="progress" id="progress-bar">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var progressBar = document.getElementById('progress-bar');

            // Periksa URL halaman saat ini
            if (window.location.pathname !== '/') {
                // Sembunyikan elemen .progress jika bukan di halaman awal
                progressBar.style.display = 'none';
            }
        });
    </script>
    <!-- End of Preloader -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Tambahan -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init();

            // Fade-in effect for the image
            const img = document.querySelector('#hero img');
            img.classList.add('show');
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let preloader = document.getElementById('preloader');
            let progressBar = document.querySelector('.progress-bar');

            function updateProgress(percentage) {
                progressBar.style.width = percentage + '%';
                progressBar.setAttribute('aria-valuenow', percentage);
                progressBar.textContent = percentage + '%';
            }

            // Simulate loading progress
            let progress = 0;
            let interval = setInterval(function() {
                if (progress < 100) {
                    progress += 1;
                    updateProgress(progress);
                } else {
                    clearInterval(interval);
                    // Hide preloader when loading is complete
                    preloader.style.display = 'none';
                }
            }, 30); // Adjust the interval time to simulate loading speed
        });
    </script>
</body>

</html>

<!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: May 01 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
