<x-card judul="{{ $berita->judul }}">
    <a href="{{ route('berita.detail', $berita->id) }}">
        <img class="img-fluid my-2 w-100" src="{{ asset($berita->tumbnail_berita) }}" alt="">
    </a>

    <div class="px-4">
        <span class="d-flex flex-wrap justify-content-start mt-2">
            <div class="badge rounded-sm px-2 py-1 badge-custom me-2 mt-2 d-flex align-items-center"
                style="background-color: #e84545">
                <span class="bi bi-calendar-event"></span>
                <span class="ms-2">{{ $berita->tanggal_berita }}</span>
            </div>
            <div class="badge bg-secondary rounded-sm px-2 py-1 badge-custom me-2 mt-2 d-flex align-items-center">
                <span class="bi bi-person-vcard-fill"></span>
                <span class="ms-2">{{ $berita->author }}</span>
            </div>
            <div class="badge bg-info rounded-sm px-2 py-1 d-flex align-items-center me-2 mt-2">
                <span class="bi bi-eye-fill"></span>
                <span class="ms-2">{{ $berita->klik }} kali</span>
            </div>
            <div class="badge rounded-sm px-2 py-1 d-flex align-items-center me-2 mt-2"
                style="background-color: #e84545;">
                <span class="bi bi-newspaper"></span>
                <span class="ms-2">{{ $berita->kategoriBerita->nama_kategori_berita }}</span>
            </div>
        </span>

        {{-- Konten narasi berita --}}
        <div style="margin-top: 20px; text-align: justify;">
            <p>{!! $berita->narasi_berita !!}</p>
        </div>
    </div>

</x-card>

<x-card>
    {{-- Comment Section --}}
    <div class="px-4 mt-4">
        <h3 class="mb-4 komentar">Tambah Komentar</h3>

        <form action="{{ route('comments.store') }}" method="POST" class="mt-4">
            @csrf
            <input type="hidden" name="berita_id" value="{{ $berita->id }}">
            <div class="d-flex mb-3">
                <textarea name="comment" class="form-control flex-grow-1 me-1 send" rows="1" placeholder="tambahkan komentar"></textarea>
                <button type="submit" class="btn btn-custom-send">
                    <span class="material-icons">send</span>
                </button>

            </div>
        </form>
    </div>

    {{-- Additional CSS for better styling --}}
</x-card>

<x-card>
    <div class="px-4 mt-4">
        <h5 class="mb-4 komentar">Daftar Komentar</h5>
        {{-- Display Comments --}}
        @foreach ($berita->comments()->whereNull('parent_id')->get() as $comment)
            <div class="card mb-3 shadow-sm">
                <div class="card-body custom">
                    <p class="mb-2 komen">{{ $comment->comment }}</p>
                    {{-- Display Replies --}}
                    @foreach ($comment->replies as $reply)
                        <div class="card shadow-sm p-md-2 mb-2">
                            <p class="mb-0">{{ $reply->comment }}</p>

                        </div>
                    @endforeach
                    {{-- Reply Form --}}
                    <form action="{{ route('comments.reply', $comment->id) }}" method="POST" class="mt-3">
                        @csrf
                        <div class="input-group">
                            <textarea name="comment" class="card shadow-sm p-md-2 flex-grow-1 me-1" placeholder="Reply"></textarea>
                            <button type="submit" class="btn btn-custom-reply">
                                <span class="material-icons">reply</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-card>

<style>
    .card {
        border-radius: 10px;
        padding: 1px;
        transition: ease-in-out 0.3s;
    }

    .card:hover {
        border-color: lightgray;
        box-shadow: 0 0 5px lightgray;
        transition: ease-in-out 0.3s;
        outline: none;
    }

    .card-body {
        padding: 15px;
        padding-bottom: 30px;
    }

    .komentar {
        color: #e84545;
        font-weight: bolder;
    }

    .form-control {
        background-color: lightgray;
        border-top-left-radius: 5px;
        /* Set the border-radius for the initial state */
        border-bottom-left-radius: 5px;
        /* Set the border-radius for the initial state */
    }

    .form-control:focus,
    .form-control:hover {
        border-color: #e84545;
        box-shadow: 0 0 5px #e84545;
        outline: none;
        background-color: #fff;
        border-top-left-radius: 5px;
        /* Ensure border-radius remains the same */
        border-bottom-left-radius: 5px;
        /* Ensure border-radius remains the same */
    }

    .input-group .form-control:focus,
    .input-group .form-control:hover {
        border-color: #e84545;
        box-shadow: 0 0 5px #e84545;
        outline: none;
        background-color: #fff;
        border-top-left-radius: 5px;
        /* Ensure border-radius remains the same */
        border-bottom-left-radius: 5px;
        /* Ensure border-radius remains the same */
    }

    .btn-custom {
        background-color: #e84545;
        color: #fff;
    }

    .btn-custom-send {
        background-color: #e84545;
        color: #fff;
        padding-top: 2%;
        border-radius: 5px;
    }

    .btn-custom-send:hover {
        opacity: 50%;
        background-color: #e84545;
        color: #fff;
        transition: ease-in-out 0.3s;
    }

    .card-body .custom {
        background-color: #e84545;
        color: #fff;
        border-radius: 5px;
    }

    .card-body .custom .komen {
        font-weight: bold;
    }

    .btn-custom-reply {
        background-color: #fff;
        color: #e84545;
        padding-top: 2%;
        border-radius: 5px;
    }

    .btn-custom-send:hover {
        opacity: 50%;
        background-color: #fff;
        color: #e84545;
        transition: ease-in-out 0.3s;
    }

    .form-control .reply {
        background-color: #fff;
        border-top-left-radius: 5px;
        /* Set the border-radius for the initial state */
        border-bottom-left-radius: 5px;
        /* Set the border-radius for the initial state */
    }
</style>
