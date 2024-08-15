<!-- resources/views/profil.blade.php -->
@extends('layout.main')

@section('styles')
    <style>
        .card-body {
            padding: 1em;
            background-color: var(--background-color);
        }

        hr.solid {
            border: none;
            border-top: 3px solid;
            color: #000;
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
                            <h1 class="">PROFIL</h1>
                            <p class="mb-0">
                                Mengenal lebih dekat Dinas Kependudukan dan Pencatatan Sipil Kabupaten Trenggalek
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Profil</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        @include('profil.partials.service-list')
                    </div>
                    <div class="col-lg-8 ps-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-body">
                                <div id="service-content">
                                    @include('profil.struktur-organisasi')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Service Details Section -->
    </main>

    <script>
        document.querySelectorAll('.service-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const url = this.href;
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('service-content').innerHTML = html;
                        // Log untuk memastikan fungsi callback dijalankan
                        console.log("Callback function executed after table content loaded.");
                        // Re-initiate DataTables after new content is loaded
                        initDataTable();
                    })
                    .catch(error => console.warn('Something went wrong.', error));
            });
        });

        function initDataTable() {
            $('#service-content').find('#dataTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true, // Setel opsi autoWidth ke true
                "pageLength": 5,
                "scrollX": true,
                "scrollCollapse": true,
                "scrollY": '570px',
                "columnDefs": [{
                    "searchable": false,
                    "targets": 0
                }],
                "language": {
                    search: "Cari :",
                    "paginate": {
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya"
                    }
                },
                "pagingType": "simple_numbers"
            });
        }
    </script>
    <script>
        function initModal() {
            // Ambil elemen tombol "Lihat Struktur Organisasi"
            var btnLihatStruktur = document.querySelector('.btn');

            // Ambil elemen modal
            var modal = document.getElementById("imageModal");

            // Ambil elemen gambar untuk menampilkan dalam pop-up
            var modalImg = document.getElementById("img01");

            // Ambil elemen span untuk menutup modal
            var span = document.getElementsByClassName("close")[0];

            // Ketika tombol close di klik, sembunyikan modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // Ketika pengguna mengklik di luar modal, sembunyikan modal
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            // Ketika tombol "Lihat Struktur Organisasi" diklik, tampilkan modal dengan gambar struktur
            if (btnLihatStruktur) {
                btnLihatStruktur.onclick = function() {
                    modal.style.display = "block";
                    modalImg.src = "{{ asset('/img/struktur.png') }}"; // Ganti dengan path gambar yang benar
                }
            }
        }

        // Inisialisasi pertama kali
        document.addEventListener("DOMContentLoaded", initModal);

        // Pantau perubahan DOM pada elemen tertentu
        var targetNode = document.getElementById('service-content');
        var observer = new MutationObserver(function(mutationsList, observer) {
            for (var mutation of mutationsList) {
                if (mutation.type === 'childList') {
                    initModal();
                }
            }
        });

        observer.observe(targetNode, {
            attributes: false,
            childList: true,
            subtree: false
        });
    </script>
@endsection
