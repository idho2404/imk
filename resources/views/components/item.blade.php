@props(['berita'])
<style>
    .fixed-size {
        height: 175px;
        width: 100%;
        object-fit: cover;
        /* Agar gambar menyesuaikan ukuran tanpa terdistorsi */
    }

    .judul-berita {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 1rem;
        transition: ease-in-out 0.2s;
    }

    .judul-berita:hover {
        color: #e84545;
        transition: ease-in-out 0.2s;
    }

    .share-icon {
        cursor: pointer;
        font-size: 0.75rem;
    }

    .share-icon .fa-whatsapp:hover {
        color: green;
    }

    .share-icon .fa-twitter:hover {
        color: cyan;
    }

    .share-icon .fa-facebook:hover {
        color: blue;
    }
</style>

<div class="container-fluid px-1 py-1">
    <div class="d-flex flex-column"
        style="overflow-y: {{ count($berita) > 4 ? 'scroll' : 'hidden' }}; height: {{ count($berita) > 4 ? '60rem' : 'auto' }}">
        @foreach ($berita as $item)
            <div class="d-flex flex-column
        flex-md-row mt-1 mb-1" style="border-bottom: 1px solid lightgrey">
                <div class="col-12 col-md-4 mt-2 mb-2">
                    <a href="{{ route('berita.detail', $item->id) }}">
                        <img class="img-fluid my-2 rounded fixed-size" src="{{ asset($item->tumbnail_berita) }}"
                            alt="Thumbnail">
                    </a>
                </div>
                <div class="col-12 col-md-8 d-flex flex-column py-2 px-3 mt-2 mb-2">
                    <a href="{{ route('berita.detail', $item->id) }}" style="color: var(--branding-secondary-color2);">
                        <h5 class="judul-berita"><strong>{{ $item->judul }}</strong></h5>
                    </a>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="small" style="color: var(--branding-secondary-color4);">
                            <span class="bi bi-calendar-event"> {{ $item->tanggal_berita }}</span>
                        </span>
                        <div>
                            <span class="share-icon me-3" style="color: #0A0A0A" data-toggle="tooltip"
                                title="Bagikan ke Facebook"
                                onclick="shareToFacebook('{{ route('berita.detail', $item->id) }}')">
                                <i class="fab fa-facebook fa-lg"></i>
                            </span>
                            <span class="share-icon me-3" style="color: #0A0A0A" data-toggle="tooltip"
                                title="Bagikan ke Twitter"
                                onclick="shareToTwitter('{{ route('berita.detail', $item->id) }}', '{{ $item->judul }}')">
                                <i class="fab fa-twitter fa-lg"></i>
                            </span>
                            <span class="share-icon me-3" style="color: #0A0A0A" data-toggle="tooltip"
                                title="Bagikan ke WhatsApp"
                                onclick="shareToWhatsapp('{{ route('berita.detail', $item->id) }}', '{{ $item->judul }}')">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </span>
                        </div>
                    </div>
                    <span class="d-flex flex-wrap justify-content-start mt-2">
                        <div
                            class="badge bg-secondary rounded-sm px-2 py-1 badge-custom me-2 mt-2 d-flex align-items-center">
                            <span class="bi bi-person-vcard-fill"></span>
                            <span class="ms-2">{{ $item->author }}</span>
                        </div>
                        <div class="badge bg-info rounded-sm px-2 py-1 d-flex align-items-center me-2 mt-2">
                            <span class="bi bi-eye-fill"></span>
                            <span class="ms-2">{{ $item->klik }} kali</span>
                        </div>
                        <div class="badge rounded-sm px-2 py-1 d-flex align-items-center me-2 mt-2"
                            style="background-color: #e84545;">
                            <span class="bi bi-newspaper"></span>
                            <span class="ms-2">{{ $item->kategoriBerita->nama_kategori_berita }}</span>
                        </div>
                    </span>
                    <span class="small d-none d-lg-block d-md-block mt-2"
                        style="color: var(--branding-secondary-color2);">
                        {!! $item->narasi_berita !!}
                    </span>
                </div>
            </div>
        @endforeach
    </div>

</div>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    function shareToFacebook(url) {
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url),
            'facebook-share-dialog',
            'width=800,height=600');
        return false;
    }

    function shareToTwitter(url, title) {
        window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(
                title),
            'twitter-share-dialog',
            'width=800,height=600');
        return false;
    }

    function shareToWhatsapp(url, title) {
        window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(title + " " + url),
            '_blank');
        return false;
    }
</script>
