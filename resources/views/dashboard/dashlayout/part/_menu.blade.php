<div class="menu">
    <ul class="list">
        <li 
        @if ($judul === 'Dashboard')
        class="active"
        @endif
        >
            <a href="{{ route('dashboard') }}">
                <i class="material-icons">home</i>
                <span>Beranda</span>
            </a>
        </li>
        <li class="header">Kelola Konten</li>
        <li 
        @if ($judul === 'Artikel')
        class="active"
        @endif
        >
            <a href="{{ route('artikel_dashboard') }}">
                <i class="material-icons">mode_edit</i>
                <span>Artikel</span>
            </a>
        </li>
        @if (Auth::user()->level_access === 'admin')
        <li>
            <a href="#">
                <i class="material-icons">pages</i>
                <span>Halaman</span>
            </a>
        </li>
        @endif
        <li>
            <a href="#">
                <i class="material-icons">photo</i>
                <span>Galeri</span>
            </a>
        </li>
        <li class="header">Pengelompokan Konten</li>
        <li>
            <a href="#">
                <i class="material-icons">label</i>
                <span>Tag / Topik</span>
            </a>
        </li>
        @if (in_array(Auth::user()->level_access, array('admin', 'moderator')))
        <li
        @if ($judul === 'Kategori')
        class="active"
        @endif
        >
            <a href="{{ route('kategori_dashboard') }}">
                <i class="material-icons">domain</i>
                <span>Kategori</span>
            </a>
        </li>
        @endif
        <li class="header">Tanggapan Pengunjung</li>
        <li>
                <a href="#">
                    <i class="material-icons">comment</i>
                    <span>Komentar</span>
                </a>
                <a href="#">
                    <i class="material-icons">email</i>
                    <span>Isian Form Hubungi Saya</span>
                </a>
        </li>
        <li class="header">Tambahan</li>
        <li>
                <a href="#">
                    <i class="material-icons">settings</i>
                    <span>Pengaturan</span>
                </a>
        </li>

        <!-- PANEL KHUSUS ADMINISTRATOR -->

        @if (Auth::user()->level_access === 'admin')

        <li class="header">Administrator Panel</li>
        <li>
                <a href="#">
                    <i class="material-icons">report</i>
                    <span>Pusat Laporan</span>
                </a>
        </li>
        <li>
                <a href="#">
                    <i class="material-icons">people</i>
                    <span>Kontrol Pengguna</span>
                </a>
        </li>
        @endif

        <li class="header col-pink">Aplikasi</li>
        <li>
            <a class="col-pink" href="#">
                <i class="material-icons">info_outline</i>
                <span class="col-pink">Informasi</span>
            </a>
        </li>
        <li>
            <a class="col-pink" href="#">
                <i class="material-icons">update</i>
                <span class="col-pink">Changelogs</span>
            </a>
        </li>


    </ul>
</div>
<!-- #Menu -->