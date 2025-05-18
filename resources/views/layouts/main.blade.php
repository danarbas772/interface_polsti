<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Politeknik STIBISNIS Tegal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    @yield('extra_css')
</head>
<body>
    <header class="main-header">
        <div class="header-left">
            <div class="brand-name">Politeknik STIBISNIS Tegal</div>
        </div>
        <div class="header-right">
            <nav class="desktop-nav">
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="{{ route('berita.index') }}"><i class="fas fa-newspaper"></i> Berita</a></li>
                    <li><a href="{{ route('program-studi') }}"><i class="fas fa-graduation-cap"></i> Program Studi</a></li>
                    <li><a href="{{ route('informasi') }}"><i class="fas fa-info-circle"></i> Informasi</a></li>
                    <li><a href="{{ route('kontak') }}"><i class="fas fa-envelope"></i> Kontak Kami</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            
        </div>
    </header>

    <div class="mobile-nav">
        <ul class="mobile-nav-menu">
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="{{ route('berita.index') }}"><i class="fas fa-newspaper"></i> Berita</a></li>
                    <li class="mobile-dropdown">
                        <a href="#" class="mobile-dropdown-toggle"><i class="fas fa-graduation-cap"></i> Program Studi <i class="fas fa-chevron-down"></i></a>
                        <ul class="mobile-dropdown-menu">
                            <li><a href="{{ route('prodi.manajemen') }}">Manajemen</a></li>
                            <li><a href="{{ route('prodi.akuntansi') }}">Akuntansi</a></li>
                            <li><a href="{{ route('prodi.bisnis') }}">Manajemen Bisnis</a></li>
                        </ul>
                    </li>
            <li><a href="{{ route('informasi') }}"><i class="fas fa-info-circle"></i> Informasi</a></li>
            <li><a href="{{ route('kontak') }}"><i class="fas fa-envelope"></i> Kontak Kami</a></li>
           
        </ul>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="main-footer">
    <div class="footer-container">
        <div class="footer-row">
            <div class="footer-section">
                <h3>Politeknik STIBISNIS Tegal</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 123, Kota Tegal</p>
                <p><i class="fas fa-phone"></i> (0283) 123456</p>
                <p><i class="fas fa-envelope"></i> info@polsti.ac.id</p>
            </div>
            <div class="footer-section">
                <h3>Program Studi</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('prodi.manajemen') }}">Manajemen</a></li>
                    <li><a href="{{ route('prodi.akuntansi') }}">Akuntansi</a></li>
                    <li><a href="{{ route('prodi.bisnis') }}">Manajemen Bisnis</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Tautan Cepat</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('pendaftaran') }}">Pendaftaran</a></li>
                    <li><a href="{{ route('akademik.kalender') }}">Kalender Akademik</a></li>
                    <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                    <li><a href="{{ route('alumni') }}">Alumni</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Sosial Media</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Politeknik STIBISNIS Tegal. All Rights Reserved.</p>
    </div>
</footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>