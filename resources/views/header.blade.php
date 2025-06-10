<style>
    .backdrop-blur {
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

</style>
@php
    $isLandingPage = Request::is('/');
    $textColorClass = $isLandingPage ? 'text-white' : 'text-dark';
@endphp

<header id="main-header"
    class="{{ $isLandingPage ? 'position-absolute top-0 start-0 w-100 z-3' : 'bg-white shadow-sm' }}">
    <div class="container py-3">
        <nav class="navbar navbar-expand-lg {{ $isLandingPage ? 'navbar-dark' : 'navbar-light' }} d-flex justify-content-between">
            <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ url('/') }}">
                <img src="{{ asset('favicon.ico') }}" alt="Logo" class="logo" style="width: 48px; height: 48px;">
                <div class="text-wrapper {{ $textColorClass }}">
                    <h3 class="fw-bold mb-0">SIBI</h3>
                    <h4 class="fw-semibold">READER</h4>
                </div>
            </a>

            <!-- Hamburger Button (Offcanvas Trigger) -->
            <button class="border-0 bg-transparent d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileNav" aria-controls="mobileNav">
                <i class="bi bi-list fs-1 {{ $textColorClass }}"></i>
            </button>

            <!-- Navbar Menu for Desktop -->
            <div class="d-none d-lg-flex align-items-center">
                <ul class="navbar-nav gap-4 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ $textColorClass }}" href="#Tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $textColorClass }}" href="#Cara-Kerja">Cara Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $textColorClass }}" href="#Hubungi-Kami">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary px-4 py-2" onclick="window.location.href='{{ route('klasifikasi') }}'">
                            <strong>COBA SEKARANG</strong>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Offcanvas Menu (Mobile) -->
    <div class="offcanvas offcanvas-start text-center bg-dark bg-opacity-75 backdrop-blur text-white w-100 h-100"
        tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
        <div class="offcanvas-header border-0">
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex justify-content-center align-items-center">
            <ul class="nav flex-column gap-4 fs-4">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/#Tentang') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/#Cara-Kerja') }}">Cara Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/#Hubungi-Kami') }}">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary px-4 py-2 mt-2" onclick="window.location.href='{{ route('klasifikasi') }}'">
                        <strong>COBA SEKARANG</strong>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</header>
