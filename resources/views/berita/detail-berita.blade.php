<!-- resources/views/dashboard/pubdok/berita/detail-berita.blade.php -->

@extends('layout.main')
@section('container')
    <main id="main">
        <section id="portfolio" class="portfolio section-bg">
            <div class="page-title" data-aos="fade">
                <nav class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li class="upper"><a href="/">Home</a></li>
                            <li class="upper"><a href="/berita">Berita</a></li>
                            <li class="current">Detail</li>
                        </ol>
                    </div>
                </nav>
            </div> <br>
            <!-- Blog Section -->
            <div id="blogs" class="blog">
                <div class="container">
                    <div class="row">

                        <!-- Berita Details -->
                        <div class="col-lg-8 detail-berita">
                            <x-detail :berita="$berita" />
                        </div>

                        <!-- Berita Populer -->
                        <div class="col-lg-4">
                            <x-card judul='Berita Populer'>
                                <x-item-pop :berita="$populer" />
                            </x-card>
                        </div>
                    </div>
                </div>
            </div><!-- End Blog Section -->
        </section>
    </main><!-- End #main -->
@endsection
