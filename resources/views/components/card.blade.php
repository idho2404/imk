@props(['grid' => 'small', 'judul' => '', 'desc' => ''])
@props(['berita'])

@php

    $gridLayout =
        [
            'small' => 'col-sm-12',
            'medium' => 'col-md-12',
        ][$grid] ?? 'col-sm-12';

@endphp


{{-- <div class="row"> --}}
<div class="{{ $gridLayout }}">
    <!-- Zero config.table start -->
    <div class="card">

        @if (isset($judul) && $judul !== '')
            <div class="card-header color-secondary">
                <div class="card-title">
                    <h4> <strong> {{ $judul }} </strong> </h4>
                </div>
                @if (isset($desc) && $desc !== '')
                    <span class="desc-card-dashboard-sikoko"> {{ $desc }} </span>
                @endif
            </div>
        @endif

        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
    <!-- Zero config.table end -->
</div>
{{-- </div> --}}
<br>
