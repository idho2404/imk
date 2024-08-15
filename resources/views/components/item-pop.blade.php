@props(['berita'])

<style>
    .badge-custom-side {
        display: inline-block;
        width: max-content;
        text-align: left;
        padding: auto;
        font-size: x-small;
    }

    .news-item {
        border-bottom: 1px solid #ccc;
        /* Warna abu-abu untuk border bottom */
        padding-bottom: 10px;
        /* Menambahkan padding di bawah item */
        margin-bottom: 10px;
        /* Menambahkan margin di bawah item */
    }

    .judul-berita strong {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 1rem;
        transition: font-size 0.2s ease;
    }

    .news-item:hover {
        color: #e84545;
    }
</style>

<div class="container-fluid px-2 py-3">
    <div class="d-flex flex-column">
        @if ($berita && $berita->count() > 0)
            @foreach ($berita as $itemPop)
                <div class="d-flex flex-row news-item">
                    <div class="col-4">
                        <a href="{{ route('berita.detail', $itemPop->id) }}">
                            <img class="img-fluid my-2" src="{{ asset($itemPop->tumbnail_berita) }}"
                                alt="{{ $itemPop->judul }}">
                        </a>
                    </div>
                    <div class="col-8 d-flex flex-column py-2 px-3 judul-berita">
                        <a href="{{ route('berita.detail', $itemPop->id) }}"
                            style="color: var(--branding-secondary-color2);">
                            <span><strong>{{ $itemPop->judul }}</strong></span>
                        </a>
                        <span class="small" style="color: var(--branding-secondary-color4);">
                            <i>{{ $itemPop->tanggal_berita }}</i>
                        </span>
                        <span class="d-flex flex-wrap justify-content-start mt">
                            <div
                                class="badge bg-secondary rounded-sm px-2 py-1 badge-custom-side me-2 mt-1 d-flex align-items-center">
                                <span class="bi bi-person-vcard-fill"></span>
                                <span class="ms-2">{{ $itemPop->author }}</span>
                            </div>
                            <div
                                class="badge bg-info rounded-sm px-2 py-1 d-flex align-items-center me-2 mt-1 badge-custom-side">
                                <span class="bi bi-eye-fill"></span>
                                <span class="ms-2">{{ $itemPop->klik }} kali</span>
                            </div>
                        </span>
                    </div>
                </div>
            @endforeach
        @else
            <p>No berita found.</p>
        @endif
    </div>
</div>
