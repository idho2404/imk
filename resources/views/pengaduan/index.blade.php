@extends('layout.main')

@section('styles')
    <style>
        .contact .info-item {
            padding: 20px;
        }

        .contact .info-item .social-icon i {
            font-size: 10px;
        }

        .contact .info-item img {
            width: auto;
            height: 38px;
        }

        .contact .info-item p{
            font-size: 0.725rem;
        }

        .social-icon a,
        .info-item a {
            color: #E84545;
        }

        .error-message {
            display: none;
            color: red;
            font-size: 14px;
        }

        .success-message {
            display: none;
            color: green;
            font-size: 14px;
        }

        /* Custom CSS for Modal */
        .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 500px;
            height: 100%;
            /* Full height of the viewport */
        }

        .modal-content {
            width: 100%;
            height: 50%;
            box-shadow: 0px 0px 5px 0px #e84545;
            /* Mengatur warna bayangan menjadi #e84545 */
        }

        .modal-body {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .modal-body p {
            font-size: 2rem;
            text-align: center
        }

        .modal-header {
            background: #E84545;
            justify-content: space-between;
        }

        .modal-header button {
            border: none;
            border-radius: 5px;
            background: none;
            transition: transform 0.3s ease;
        }

        .modal-header button span {
            font-size: 2rem;
            color: #ffffff
        }

        .modal-header button:hover {
            transition: transform 0.3s ease;
            /* Menambahkan durasi transisi dan fungsi timing */
            transform: rotate(90deg) scale(1.2);
            /* Mengubah rotasi menjadi 45 derajat */
        }

        .modal-header h5 {
            color: #ffffff;
        }

        .modal-footer {
            display: flex;
            justify-content: center;
            /* Untuk membuat konten di tengah secara horizontal */
        }

        .modal-footer button {
            width: 7rem;
            height: 3rem;
        }

        .modal-footer .btn1 {
            background: #E84545;
            color: #ffffff;
            border: none;
        }

        .modal-footer .btn2 {
            background: #00B836;
            color: #ffffff;
            border: none;
        }

        .btn1,
        .btn2 {
            transition: transform 0.3s ease;
            margin: 1rem;
            font-weight: bold;
        }

        .btn1:hover,
        .btn2:hover {
            transition: transform 0.3s ease;
            transform: scale(1.1);
            box-shadow: 0px 0px 5px 0px lightgrey;
        }

        @media (max-width: 768px) {
            .modal-content {
                width: 90%;
                /* Adjust width for smaller screens */
                height: auto;
                /* Adjust height for smaller screens */
            }
        }

        .checkmark-circle {
            width: 100px;
            height: 100px;
            position: relative;
            display: inline-block;
            vertical-align: top;
        }

        .background {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #00B836;
            position: absolute;
        }

        .checkmark {
            border-radius: 5px;
        }

        .checkmark.draw:after {
            animation-delay: 200ms;
            animation: checkmark 800ms ease-in-out;
            transform: scaleX(-1) rotate(135deg);
        }

        .checkmark:after {
            opacity: 1;
            height: 75px;
            width: 37.5px;
            transform-origin: left top;
            border-right: 15px solid #ffffff;
            border-top: 15px solid #ffffff;
            content: '';
            left: 25px;
            top: 50px;
            position: absolute;
        }

        @keyframes checkmark {
            0% {
                height: 0;
                width: 0;
                opacity: 1;
            }

            20% {
                height: 0;
                width: 37.5px;
                opacity: 1;
            }

            40% {
                height: 75px;
                width: 37.5px;
                opacity: 1;
            }

            100% {
                height: 75px;
                width: 37.5px;
                opacity: 1;
            }
        }

        .modal .success {
            background: none;
            box-shadow: none;
        }

        .modal-dialog .success {
            background: #fafafa;
        }

        .modal-content .success {
            background: none;
        }

        .phone-input-container {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            background-color: #fff;
        }

        .country-code {
            padding: 10px;
            background-color: #f4f4f4;
            color: #333;
            font-size: 16px;
            border-right: 1px solid #ddd;
        }

        .phone-input {
            flex: 1;
            border: none;
            padding: 10px;
            font-size: 16px;
            outline: none;
        }

        .phone-input::placeholder {
            color: #aaa;
        }

        .phone-input-container:hover,
        .phone-input-container:focus-within {
            border-color: #999;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection

@section('container')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Pengaduan</h2>
                    <p>Layanan Aspirasi dan Pengaduan Online Rakyat</p>
                </div><!-- End Section Title -->
                <nav class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li class="current">Pengaduan</li>
                        </ol>
                    </div>
                </nav>

                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-12">
                            <section id="contact" class="contact section">
                                <div class="container" data-aos="fade-up" data-aos-delay="100">
                                    <div class="row gy-4">
                                        <div class="col-lg-6">
                                            <div class="row gy-4">
                                                <div class="col-md-6">
                                                    <div class="info-item" data-aos="fade" data-aos-delay="200">
                                                        <i class="bi bi-geo-alt"></i>
                                                        <h3>Alamat</h3>
                                                        <p>Ngemplak, Sumbergedong</p>
                                                        <p>Kec. Trenggalek, Kab. Trenggalek</p>
                                                        <p>Jawa Timur, 66315</p>
                                                    </div>
                                                </div><!-- End Info Item -->

                                                <div class="col-md-6">
                                                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                                                        <i class="bi bi-whatsapp"></i>
                                                        <h3>Sosial Media</h3>
                                                        <p class="social-icon"><a
                                                                href="https://www.facebook.com/disdukcapil.trenggalek" target="_blank"><i
                                                                    class="fab fa-facebook-f"></i>
                                                                disdukcapil.trenggalek</a></p>
                                                        <p class="social-icon"><a
                                                                href="https://www.instagram.com/disdukcapil.trenggalek" target="_blank"><i
                                                                    class="fab fa-instagram"></i> disdukcapil.trenggalek</a>
                                                        </p>
                                                        <p class="social-icon"><a
                                                                href="https://www.youtube.com/channel/UCEEESG__YcRnf9qXKIxcIwQ" target="_blank"><i
                                                                    class="fab fa-youtube"></i> disdukcapil trenggalek</a>
                                                        </p>
                                                    </div>
                                                </div><!-- End Info Item -->

                                                <div class="col-md-6">
                                                    <div class="info-item" data-aos="fade" data-aos-delay="300">
                                                        <i class="bi bi-telephone"></i>
                                                        <h3>Telepon</h3>
                                                        <p>+62 81 55959 5758</p>
                                                    </div>
                                                </div><!-- End Info Item -->

                                                <div class="col-md-6">
                                                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                                                        <i class="bi bi-envelope"></i>
                                                        <h3>Alamat Email</h3>
                                                        <p><a
                                                                href="mailto:disdukcapil.trenggalek@gmail.com" target="_blank">disdukcapil.trenggalek@gmail.com</a>
                                                        </p>
                                                    </div>
                                                </div><!-- End Info Item -->

                                                <div class="col-md-6">
                                                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                                                        <img src="img/lapor.png" alt="Alternative text for the image">
                                                        <h3>Laporan Pengaduan</h3>
                                                        <p><a href="https://www.lapor.go.id/" target="_blank">Lapor.id</a></p><br>
                                                    </div>
                                                </div><!-- End Info Item -->

                                                <div class="col-md-6">
                                                    <div class="info-item" data-aos="fade" data-aos-delay="500">
                                                        <i class="bi bi-clock"></i>
                                                        <h3>Jam Buka</h3>
                                                        <p>Senin - Kamis : 07.30 - 15.30 WIB</p>
                                                        <p>Jumat : 07.00 - 15.30 WIB</p>
                                                    </div>
                                                </div><!-- End Info Item -->
                                            </div>
                                        </div>

                                        <div class="col-lg-6" style="position: relative; z-index: 1;">
                                            <form id="contactForm" class="php-email-form" data-aos="fade-up"
                                                data-aos-delay="200" style="padding: 10px 20px;">
                                                <div class="row gy-4">
                                                    <h3 style="font-size: 25px; font-weight: bold;">Form Aduan</h3>
                                                    <div class="col-md-12">
                                                        <input type="text" id="name" name="name"
                                                            class="form-control" placeholder="Nama" required>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" id="nik" class="form-control"
                                                            name="nik" placeholder="NIK" required pattern="\d{16}"
                                                            minlength="16" maxlength="16"
                                                            oninvalid="this.setCustomValidity('NIK harus terdiri dari 16 digit angka')"
                                                            oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="phone-input-container">
                                                            <div class="country-code">+62</div>
                                                            <input type="text" id="phone"
                                                                class="form-control phone-input" name="phone"
                                                                placeholder="Nomor HP" required pattern="^\d{8,13}$" minlength="8" maxlength="13"
                                                                oninvalid="this.setCustomValidity('Hanya Angka dengan Banyak digit 8-13')"
                                                                oninput="this.setCustomValidity('')">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" id="subject" class="form-control"
                                                            name="subject" placeholder="Persoalan" required>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" id="message" name="message" rows="6" placeholder="Deskripsi Aduan" required></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p id="error-message" class="error-message"
                                                            style="display: none; color: red;"></p>
                                                        <p id="success-message" class="success-message"
                                                            style="display: none; color: green;">Formulir Terkirim, Terima
                                                            Kasih!</p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" style="width: 100%"
                                                            class="btn btn-primary">Kirim</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog"
                                            aria-labelledby="confirmModalLabel" aria-hidden="true"
                                            style="display: none;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmModalLabel">Konfirmasi
                                                            Pengiriman</h5>
                                                        <button type="button" class="close" id="confirmNo"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin mengirim pesan ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn1" id="closeModal"
                                                            data-dismiss="modal">Tidak</button>
                                                        <button type="button" class="btn2" id="confirmYes">Ya</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Sukses -->
                                        <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                                            aria-labelledby="successModalLabel" aria-hidden="true"
                                            style="display: none;">
                                            <div class="modal-dialog success" role="document">
                                                <div class="modal-content success">
                                                    <div class="modal-body text-center d-flex flex-column">
                                                        <div class="checkmark-circle d-flex">
                                                            <div class="background"></div>
                                                            <div class="checkmark draw"></div>
                                                        </div>
                                                        <p class="d-flex" style="font-size: 1.5rem; margin-top: 20px;">
                                                            Pengaduan sudah
                                                            dikirim</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                $('#contactForm').on('submit', function(event) {
                                                    event.preventDefault();
                                                    $('#confirmModal').modal({
                                                        backdrop: 'static',
                                                        keyboard: false
                                                    }).modal('show');
                                                });

                                                $('#closeModal').on('click', function() {
                                                    $('#confirmModal').modal('hide');
                                                });

                                                $('#confirmNo').on('click', function() {
                                                    $('#confirmModal').modal('hide');
                                                });

                                                $('#confirmYes').on('click', function() {
                                                    $('#confirmModal').modal('hide');
                                                    $('#successModal').modal('show');
                                                    setTimeout(function() {
                                                        $('#successModal').modal('hide');
                                                        $('#success-message').show();
                                                        $('#contactForm')[0].reset();
                                                    }, 2000); // Display success modal for 3 seconds
                                                });

                                                $('#confirmModal').on('hidden.bs.modal', function() {
                                                    $('#error-message').hide();
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div><!-- End Page Title -->
            </div>
        </div>
        </section><!-- /Contact Section -->
    </main>
    <script>
        function adjustInfoItemHeight() {
            // Get all the info-item elements
            const infoItems = document.querySelectorAll('.info-item');
            let maxHeight = 0;

            // Reset heights to auto to recalculate properly
            infoItems.forEach(item => {
                item.style.height = 'auto';
            });

            // Calculate the maximum height
            infoItems.forEach(item => {
                const itemHeight = item.offsetHeight;
                if (itemHeight > maxHeight) {
                    maxHeight = itemHeight;
                }
            });

            console.log(maxHeight);

            // Set the height of all info-items to the maximum height
            infoItems.forEach(item => {
                item.style.height = maxHeight + 'px';
            });
        }

        document.addEventListener("DOMContentLoaded", adjustInfoItemHeight);
        window.addEventListener("resize", adjustInfoItemHeight);
    </script>
@endsection

@section('scripts')
    <script>
        function displayError(errorMessage) {
            var errorElement = document.getElementById('error-message');

            if (errorElement) {
                errorElement.textContent = errorMessage;
                errorElement.style.display = 'block';
            } else {
                console.error('Error: Element with ID "error-message" not found.');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            var contactForm = document.getElementById('contactForm');

            if (contactForm) {
                contactForm.addEventListener('submit', function(event) {
                    event.preventDefault(); // Mencegah pengiriman form secara default

                    // Validasi formulir di sini
                    var nameInput = document.querySelector('input[name="name"]');
                    var nikInput = document.querySelector('input[name="nik"]');
                    var phoneInput = document.querySelector('input[name="phone"]');
                    var subjectInput = document.querySelector('input[name="subject"]');
                    var messageInput = document.querySelector('textarea[name="message"]');
                    var errorMessageElement = document.getElementById('error-message');
                    var successMessageElement = document.getElementById('success-message');

                    // Contoh validasi, pastikan semua field diisi
                    if (!nameInput.value || !nikInput.value || !phoneInput.value || !subjectInput.value || !
                        messageInput.value) {
                        if (errorMessageElement) {
                            errorMessageElement.textContent = 'Semua field harus diisi.';
                            errorMessageElement.style.display = 'block';
                        } else {
                            console.error('Error: Element with ID "error-message" not found.');
                        }
                    } else {
                        // Jika validasi sukses, tampilkan pesan sukses
                        if (successMessageElement) {
                            successMessageElement.style.display = 'block';
                            successMessageElement.scrollIntoView({
                                behavior: 'smooth'
                            });

                            // Kosongkan form setelah sukses
                            contactForm.reset();
                        } else {
                            console.error('Error: Element with ID "success-message" not found.');
                        }

                        // Sembunyikan pesan error jika ada
                        if (errorMessageElement) {
                            errorMessageElement.style.display = 'none';
                        }
                    }
                });
            } else {
                console.error('Error: Element with ID "contactForm" not found.');
            }
        });
    </script>
    <!-- Link to Bootstrap JS and jQuery for modal functionality -->
@endsection
