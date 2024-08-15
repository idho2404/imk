<style>
    <style>.services-list {
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
</style>
</style>

{{-- <div class="service-box">
    <h4>PROFIL KAMI</h4>
    <div class="services-list">
        <a href="{{ route('profil.struktur-organisasi') }}" class="service-link" data-target="struktur-organisasi"><i
                class="bi bi-arrow-right-circle"></i><span>Struktur
                Organisasi</span></a>
        <a href="{{ route('profil.maklumat-pelayanan') }}" class="service-link" data-target="maklumat-pelayanan"><i
                class="bi bi-arrow-right-circle"></i><span>Maklumat
                Pelayanan</span></a>
        <a href="{{ route('profil.profil-penyelenggara') }}" class="service-link" data-target="profil-penyelenggara"><i
                class="bi bi-arrow-right-circle"></i><span>Profil
                Penyelenggara</span></a>
        <a href="{{ route('profil.pelaksana-layanan') }}" class="service-link" data-target="pelaksana-layanan"><i
                class="bi bi-arrow-right-circle"></i><span>Pelaksana
                Layanan</span></a>
        <a href="{{ route('profil.mvm') }}" class="service-link" data-target="mvm"><i
                class="bi bi-arrow-right-circle"></i><span>Visi dan
                Misi</span></a>
        <a href="{{ route('profil.motto') }}" class="service-link" data-target="motto"><i
                class="bi bi-arrow-right-circle"></i><span>Motto Pelayanan</span></a>
    </div>
</div><!-- End Services List --> --}}

<div class="service-box">
    <h4>PROFIL KAMI</h4>
    <div class="services-list">
        <a href="{{ route('profil.struktur-organisasi') }}"
            class="service-link {{ request()->routeIs('profil.struktur-organisasi') ? 'active' : 'active' }}"
            data-target="struktur-organisasi">
            <i class="bi bi-arrow-right-circle"></i><span>Struktur Organisasi</span>
        </a>
        <a href="{{ route('profil.maklumat-pelayanan') }}"
            class="service-link {{ request()->routeIs('profil.maklumat-pelayanan') && !request()->routeIs('profil.struktur-organisasi') ? 'active' : '' }}"
            data-target="maklumat-pelayanan">
            <i class="bi bi-arrow-right-circle"></i><span>Maklumat Pelayanan</span>
        </a>
        <a href="{{ route('profil.profil-penyelenggara') }}"
            class="service-link {{ request()->routeIs('profil.profil-penyelenggara') && !request()->routeIs('profil.struktur-organisasi') ? 'active' : '' }}"
            data-target="profil-penyelenggara">
            <i class="bi bi-arrow-right-circle"></i><span>Profil Penyelenggara</span>
        </a>
        <a href="{{ route('profil.pelaksana-layanan') }}"
            class="service-link {{ request()->routeIs('profil.pelaksana-layanan') && !request()->routeIs('profil.struktur-organisasi') ? 'active' : '' }}"
            data-target="pelaksana-layanan">
            <i class="bi bi-arrow-right-circle"></i><span>Pelaksana Layanan</span>
        </a>
        <a href="{{ route('profil.mvm') }}"
            class="service-link {{ request()->routeIs('profil.mvm') && !request()->routeIs('profil.struktur-organisasi') ? 'active' : '' }}"
            data-target="mvm">
            <i class="bi bi-arrow-right-circle"></i><span>Visi dan Misi</span>
        </a>
        <a href="{{ route('profil.motto') }}"
            class="service-link {{ request()->routeIs('profil.motto') && !request()->routeIs('profil.struktur-organisasi') ? 'active' : '' }}"
            data-target="motto">
            <i class="bi bi-arrow-right-circle"></i><span>Motto Pelayanan</span>
        </a>
    </div>
</div><!-- End Services List -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.service-link');

        links.forEach(link => {
            link.addEventListener('click', function() {
                links.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>
