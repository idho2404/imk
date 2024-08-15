@extends('layout.main')

@section('styles')
    <style>
        .services-list {
            display: block;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .services-list a {
            display: flex;
            align-items: center;
            text-align: left;
            padding-left: 0;
        }

        .services-list a .num {
            width: 30px;
            margin-right: 10px;
        }

        .services-list a i {
            margin-right: 10px;
        }

        .services-list a span {
            text-align: left;
        }

        .faq-item .faq-question {
            width: 100%;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-item .faq-answer {
            display: none;
            width: 95%;
            text-align: left;
            margin-left: 30px;
            margin-top: 20px;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .services-list a.active {
            color: red;
        }

        .faq-toggle {
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-toggle {
            transform: rotate(90deg);
        }

        .faq-item .faq-question {
            text-align: left;
        }

        .faq-question span.num {
            margin-right: 10px;
        }

        .services-list {
            height: 370px;
            overflow-y: scroll;
            sssss
        }
    </style>
@endsection

@section('container')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>FAQ</h2>
                    <p>Frequently Asked Questions</p>
                </div><!-- End Section Title -->
                <nav class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li class="current">FAQ</li>
                        </ol>
                    </div>
                </nav>
                <div class="row d-flex justify-content-center text-center">
                    <section id="faq" class="faq section">
                        <div class="container">
                            <div class="row gy-4">
                                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="service-details section" style="padding:0;">
                                        <div class="service-box">
                                            <h4>FAQ List</h4>
                                            <div class="services-list">
                                                @foreach ($layananFaq as $layanan)
                                                    <a href="#"
                                                        onclick="showFaq('{{ $layanan->id }}'); return false;"
                                                        @if ($loop->first) class="active" @endif>
                                                        <i class="bi bi-arrow-right-circle"></i>
                                                        <span>{{ $layanan->layanan }}</span>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200" style="padding: 60px 0;">
                                    <div class="faq-container">
                                        @php
                                            $faqsGroupedByLayanan = $faq->groupBy('id_layanan');
                                        @endphp

                                        @foreach ($faqsGroupedByLayanan as $id_layanan => $faqs)
                                            <div class="faq-group" id="faqGroup{{ $id_layanan }}" style="display: none;">
                                                @foreach ($faqs as $faq)
                                                    <div class="faq-item" id="faqItem{{ $faq->id }}">
                                                        <div class="faq-question"
                                                            onclick="toggleFaq('{{ $faq->id }}')">
                                                            <h3><span class="num">{{ $loop->index + 1 }}.</span>
                                                                <span>{{ $faq->pertanyaan }}</span>
                                                            </h3>
                                                            <i class="faq-toggle bi bi-chevron-right"></i>
                                                        </div>
                                                        <div class="faq-answer" id="faqAnswer{{ $faq->id }}">
                                                            <p>{!! htmlspecialchars_decode($faq->jawaban) !!}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var firstLayananId = '{{ $layananFaq->first()->id }}';
            showFaq(firstLayananId);
        });

        function showFaq(faqNumber) {
            var faqGroups = document.querySelectorAll('.faq-group');
            faqGroups.forEach(function(group) {
                group.style.display = 'none';
            });

            var faqLinks = document.querySelectorAll('.services-list a');
            faqLinks.forEach(function(link) {
                link.classList.remove('active');
            });

            var faqGroupToShow = document.getElementById('faqGroup' + faqNumber);
            if (faqGroupToShow) {
                faqGroupToShow.style.display = 'block';
            }

            var clickedFaqLink = document.querySelector(
                `.services-list a[onclick="showFaq('${faqNumber}'); return false;"]`);
            if (clickedFaqLink) {
                clickedFaqLink.classList.add('active');
            }
        }

        function toggleFaq(faqId) {
            var faqItem = document.getElementById('faqItem' + faqId);
            var faqAnswer = document.getElementById('faqAnswer' + faqId);
            if (faqAnswer) {
                faqAnswer.style.display = faqAnswer.style.display === 'block' ? 'none' : 'block';
            }
            faqItem.classList.toggle('active');
        }
    </script>
@endsection
