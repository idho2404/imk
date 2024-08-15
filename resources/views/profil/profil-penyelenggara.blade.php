<style>
    .profile-details {
        line-height: 1.8;
        max-height: 350px;
        /* Atur ketinggian maksimum detail profil */
        overflow-y: auto;
        /* Tambahkan scroll vertikal jika konten melebihi ketinggian maksimum */
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.15);
        padding: 1em;
    }

    .profile-details .detail-item {
        margin-bottom: 10px;
        display: flex;
        align-items: baseline;
        padding-bottom: 10px;
        /* Menambahkan ruang antara setiap baris */
        border-bottom: 1px solid #ccc;
        /* Menambahkan garis di bagian bawah setiap baris */
    }

    .profile-details .detail-item a,
    .profile-details .detail-item span {
        margin-left: 0.3em;
        /* Adjust the value as needed */
    }

    .profile-details .detail-item strong {
        min-width: 296px;
        display: inline-block;
        /* Ensure min-width works */
    }

    .profile-details .address-details {
        display: flex;
        flex-direction: column;
        padding-left: 5em;
        width: 100%;
        /* Align the address items similarly */
    }

    .profile-details .address-details div {
        display: flex;
        align-items: baseline;
        margin-bottom: 5px;
        width: 100%;
        border-bottom: 1px solid #ccc;
    }


    .profile-details .address-details strong {
        min-width: 200px;
        /* Same width as other strong elements */
        display: inline-block;
        /* Ensure min-width works */
        margin-left: 1em;
        /* Adjust as needed */
    }

    .profile-details .detail-item.address {
        flex-direction: column;
        align-items: flex-start;
    }

    /* Menghilangkan garis di baris terakhir */
    .profile-details .detail-item:last-child {
        border-bottom: none;
    }
</style>

<h3 style="text-align: center; margin-bottom:1em">
    PROFIL PENYELENGGARA<br>
    PELAYANAN ADMINISTRASI KEPENDUDUKAN<br>
    DI KABUPATEN TRENGGALEK
</h3>

<div class="profile-details">
    <div class="detail-item"><strong>1. Nama Lembaga </strong> : Dinas Kependudukan dan Pencatatan Sipil</div>
    <div class="detail-item"><strong>2. Singkatan </strong> : Disdukcapil</div>
    <div class="detail-item"><strong>3. Nomor Telepon </strong> : (0355) 791160</div>
    <div class="detail-item"><strong>4. Jumlah Produk Layanan </strong> : 19 (Sembilan Belas)</div>
    <div class="detail-item"><strong>5. Jumlah Jenis Layanan </strong> : 55 (Lima Puluh Lima)</div>
    <div class="detail-item"><strong>6. Email </strong> : disdukcapil.trenggalek@gmail.com</div>
    <div class="detail-item"><strong>7. Website </strong> : <a href="http://dukcapil.trenggalekkab.go.id"
            target="_blank">dukcapil.trenggalekkab.go.id</a></div>
    <div class="detail-item"><strong>8. Instagram </strong> : <a href="https://www.instagram.com/disdukcapil.trenggalek"
            target="_blank">disdukcapil.trenggalek</a></div>
    <div class="detail-item"><strong>9. Facebook </strong> : <a href="https://www.facebook.com/disdukcapil.trenggalek"
            target="_blank">disdukcapil trenggalek</a></div>

    <div class="detail-item address">
        <strong>10. Alamat</strong>
        <div class="address-details">
            <div><strong>Provinsi </strong>: Jawa Timur</div>
            <div><strong>Kabupaten </strong>: Trenggalek</div>
            <div><strong>Kecamatan </strong>: Trenggalek</div>
            <div><strong>Kelurahan </strong>: Sumbergedong</div>
            <div><strong>Alamat </strong>: Jl. Soetran Nomor 17 Trenggalek</div>
            <div><strong>Kode Pos </strong>: 66315</div>
        </div>
    </div>
</div>
