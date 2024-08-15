<style>
    /* Style untuk gambar dengan lambang zoom saat di-hover */
    .zoom-image {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
        cursor: zoom-in;
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

    /* Style untuk card */
    .card1 {
        width: 175px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        display: inline-block;
        vertical-align: top;
        font-family: var(--default-font);
        /* Menggunakan variabel font default */
    }

    .card1:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5);
    }

    .card1 img {
        width: 100%;
        height: auto;
        border-radius: 8px 8px 0 0;
    }

    /* Style untuk container card */
    .card1-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 400px;
        overflow-y: auto;
        text-align: center;
        padding: 5px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.15);
    }

    .card1-container h4 {
        margin: 2px;
        font-weight: bold;
        font-size: 16px;
        /* Atur ukuran font */
        overflow: hidden;
        /* Mengatasi teks yang terlalu panjang */
        white-space: nowrap;
        /* Menghindari perataan otomatis */
        text-overflow: ellipsis;
        /* Menyembunyikan teks yang terlalu panjang dan menampilkan elipsis */
        padding-left: 5px;
        padding-right: 5px;
    }

    .card1-container p {
        font-size: 14px;
        /* Atur ukuran font */
        overflow: hidden;
        /* Mengatasi teks yang terlalu panjang */
        white-space: nowrap;
        /* Menghindari perataan otomatis */
        text-overflow: ellipsis;
        /* Menyembunyikan teks yang terlalu panjang dan menampilkan elipsis */
        /* padding-left: 5px;
        padding-right: 5px; */
    }

    .center-card {
        /* display: flex; */
        /* justify-content: center; */
        /* align-items: center; */
        /* flex-direction: column; */
        /* Posisikan kartu kepala dinas di tengah */
        margin: auto;
    }

    .center-card,
    .card-center {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        /* Align items vertically */
        height: 100%;
        /* Ensure the card takes full height */
    }

    @media screen and (max-width: 768px) {
        .card1-container {
            display: flex;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            /* grid-gap: 20px; */
        }
    }
</style>

<div class="text-center">
    <div class="card-title">
        <h3 style="text-align: center">
            STRUKTUR ORGANISASI<br>
            DISDUKCAPIL TRENGGALEK
        </h3>
    </div>


    <div class="card1-container">

        <div class="card1">
            <div class="center-card">
                <img src="https://www.its.ac.id/sdmo/wp-content/uploads/sites/62/2021/09/Icon-Wanita.png"
                    alt="Struktur Organisasi">
                <div class="card-container">
                    <h4 title="KEPALA DINAS">KEPALA DINAS</h4>
                    <p>Suprapti, S.Si, M.Si.</p>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="card-center">
                <img src="{{ asset('img\COWOK.jpg') }}" alt="Struktur Organisasi">
                <div class="card-container">
                    <h4 title="SEKRETARIAT">SEKRETARIAT</h4>
                    <p>Ririn Eko Utoyo, S.Sos, MT</p>
                </div>
            </div>
        </div>

        <div class="card1">
            <img src="https://www.its.ac.id/sdmo/wp-content/uploads/sites/62/2021/09/Icon-Wanita.png"
                alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SUBBAGIAN PERENCANAAN">SUBBAGIAN PERENCANAAN</h4>
                <p>Sri Widayati, S.E.</p>
            </div>
        </div>

        <div class="card1">
            <img src="https://www.its.ac.id/sdmo/wp-content/uploads/sites/62/2021/09/Icon-Wanita.png"
                alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SUBBAGIAN KEUANGAN">SUBBAGIAN KEUANGAN</h4>
                <p>Sri Dwijah, S.E.</p>
            </div>
        </div>

        <div class="card1">
            <img src="https://www.its.ac.id/sdmo/wp-content/uploads/sites/62/2021/09/Icon-Wanita.png"
                alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SUBBAGIAN UMUM DAN KEPEGAWAIAN">SUBBAGIAN UMUM DAN KEPEGAWAIAN</h4>
                <p>Rina Takarina S.Sos.</p>
            </div>
        </div>

        <div class="card1">
            <img src="https://www.its.ac.id/sdmo/wp-content/uploads/sites/62/2021/09/Icon-Wanita.png"
                alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="BIDANG PELAYANAN PENDAFTARAN PENDUDUK">BIDANG PELAYANAN PENDAFTARAN PENDUDUK</h4>
                <p>Nur Zohainis R, SSTP.</p>
            </div>
        </div>

        <div class="card1">
            <img src="{{ asset('img\COWOK.jpg') }}" alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SEKSI IDENTITAS PENDUDUK">SEKSI IDENTITAS PENDUDUK</h4>
                <p>Dedi Suhermanto, SAB.</p>
            </div>
        </div>

        <div class="card1">
            <img src="{{ asset('img\COWOK.jpg') }}" alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SEKSI PINDAH DATANG DAN PENDATAAN PENDUDUK">SEKSI PINDAH DATANG DAN PENDATAAN PENDUDUK</h4>
                <p>Subagyo Darsono, S.Sos.</p>
            </div>
        </div>

        <div class="card1">
            <img src="{{ asset('img\COWOK.jpg') }}" alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="BIDANG PELAYANAN PENCATATAN SIPIL">BIDANG PELAYANAN PENCATATAN SIPIL</h4>
                <p>Putut Sukrisno</p>
            </div>
        </div>

        <div class="card1">
            <img src="https://www.its.ac.id/sdmo/wp-content/uploads/sites/62/2021/09/Icon-Wanita.png"
                alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SEKSI KELAHIRAN DAN KEMATIAN">SEKSI KELAHIRAN DAN KEMATIAN</h4>
                <p>Santi Linudyawati, S.E.</p>
            </div>
        </div>

        <div class="card1">
            <img src="https://www.its.ac.id/sdmo/wp-content/uploads/sites/62/2021/09/Icon-Wanita.png"
                alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SEKSI PERKAWINAN, PERCERAIAN, PERUBAHAN STATUS ANAK, DAN KEWARGANEGARAAN">SEKSI PERKAWINAN,
                    PERCERAIAN, PERUBAHAN STATUS ANAK, DAN KEWARGANEGARAAN</h4>
                <p>Iwin Setyani, S.E.</p>
            </div>
        </div>

        <div class="card1">
            <img src="{{ asset('img\COWOK.jpg') }}" alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="BIDANG PENGELOLAAN INFORMASI ADMINISTRASI KEPENDUDUKAN">BIDANG PENGELOLAAN INFORMASI
                    ADMINISTRASI KEPENDUDUKAN</h4>
                <p>Drs. R. Widi Sasmito Adi</p>
            </div>
        </div>

        <div class="card1">
            <img src="{{ asset('img\COWOK.jpg') }}" alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SEKSI SISTEM INFORMASI ADMINISTRASI KEPENDUDUKAN">SEKSI SISTEM INFORMASI ADMINISTRASI
                    KEPENDUDUKAN</h4>
                <p>Asri Hariady, S.Sos.</p>
            </div>
        </div>

        <div class="card1">
            <img src="https://www.its.ac.id/sdmo/wp-content/uploads/sites/62/2021/09/Icon-Wanita.png"
                alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SEKSI PENGOLAHAN DAN PENYAJIAN DATA KEPENDUDUKAN">SEKSI PENGOLAHAN DAN PENYAJIAN DATA
                    KEPENDUDUKAN</h4>
                <p>Vitasari Yustiasih, S.H.</p>
            </div>
        </div>

        <div class="card1">
            <img src="{{ asset('img\COWOK.jpg') }}" alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="BIDANG PEMANFAATAN DATA DAN INOVASI PELAYANAN">BIDANG PEMANFAATAN DATA DAN INOVASI PELAYANAN
                </h4>
                <p>Sambas Rudi Winotjo, S.E.</p>
            </div>
        </div>

        <div class="card1">
            <img src="{{ asset('img\COWOK.jpg') }}" alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SEKSI KERJASAMA DAN INOVASI PELAYANAN">SEKSI KERJASAMA DAN INOVASI PELAYANAN</h4>
                <p>Dhandy Irawan, SAP.</p>
            </div>
        </div>

        <div class="card1">
            <img src="{{ asset('img\COWOK.jpg') }}" alt="Struktur Organisasi">
            <div class="card-container">
                <h4 title="SEKSI PEMANFAATAN DATA DAN DOKUMEN KEPENDUDUKAN">SEKSI PEMANFAATAN DATA DAN DOKUMEN
                    KEPENDUDUKAN</h4>
                <p>Jarot Suseno, S.E.</p>
            </div>
        </div>

    </div>
    {{-- <img src="{{ asset('/img/struktur.png') }}" alt="Struktur Organisasi" class="zoom-image"> --}}
    <button type="button" class="btn btn-danger" style="margin-top: 1em;">Lihat Struktur Organisasi</button>
</div>

<!-- Pop-up modal -->
<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
</div>
