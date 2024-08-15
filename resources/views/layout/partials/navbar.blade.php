<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
        <li><a href="{{ route('profil.index') }}" class="{{ request()->is('profil') ? 'active' : '' }}">Profil</a></li>
        <li><a href="{{ url('/berita') }}" class="{{ request()->is('berita') ? 'active' : '' }}">Berita</a></li>
        <li><a href="{{ url('/layanan') }}" class="{{ request()->is('layanan') ? 'active' : '' }}">Layanan</a></li>
        <li><a href="{{ route('publikasi') }}" class="{{ request()->is('publikasi') ? 'active' : '' }}">Publikasi</a>
        </li>
        <li class="dropdown"><a href="#"
                class="{{ request()->is('statistik', 'faq', 'pengaduan') ? 'active' : '' }}"><span>Informasi</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{ route('statistik') }}"
                        class="{{ request()->is('statistik') ? 'active' : '' }}">Statistik</a></li>
                <li><a href="{{ url('/faq') }}" class="{{ request()->is('faq') ? 'active' : '' }}">FAQ</a></li>
                <li><a href="{{ route('pengaduan') }}"
                        class="{{ request()->is('pengaduan') ? 'active' : '' }}">Pengaduan</a></li>
            </ul>
        </li>
        <li><a href="{{ route('kontak') }}" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
