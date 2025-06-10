<div id="Tentang" class="about-section" style="background-color: white;">
    <div class="container">
        <div class="row w-100 align-items-center about-flex">
            {{-- Gambar --}}
            <div class="col-md-6 d-flex justify-content-center mb-4 mb-md-0">
                <img src="{{ asset('Group-about.png') }}"
                     alt="Ilustrasi solusi komunikasi bahasa isyarat"
                     class="img-fluid"
                     id="about-img">
            </div>

            {{-- Teks --}}
            <div class="col-md-6" id="about-text-wrapper">
                <h2 class="fw-bold mb-3" id="about-heading">
                    <span class="text-primary">Solusi Mudah</span> untuk Komunikasi
                    <span class="text-primary">Bahasa Isyarat</span>
                </h2>

                <p class="mt-3" id="about-text-1">
                    Penyandang tunarungu di Indonesia sering kesulitan berkomunikasi dengan orang lain karena alat bantu
                    penerjemah bahasa isyarat yang masih terbatas, mahal, atau sulit digunakan. Banyak alat yang ada
                    belum mendukung percakapan secara langsung, terutama dalam bentuk digital.
                </p>

                <p id="about-text-2">
                    Aplikasi web ini <strong>membantu penyandang tunarungu berkomunikasi dengan mudah</strong>
                    menggunakan teknologi canggih yang menerjemahkan gerakan isyarat tangan menjadi teks secara
                    otomatis.
                    Cukup gerakkan tangan, dan aplikasi ini akan mengubahnya menjadi tulisan yang bisa dibaca semua
                    orang,
                    tanpa perlu perangkat tambahan yang rumit.
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .about-section {
        padding: 5rem;
    }

    #about-heading {
        font-size: 3rem;
    }

    #about-text-1,
    #about-text-2 {
        font-size: 1.25rem;
    }

    /* Tablet (768px - 1199.98px) */
    @media (max-width: 1199.98px) {
        .about-section {
            padding: 3rem 2rem;
        }

        .about-flex {
            flex-direction: column !important;
        }

        #about-img {
            max-width: 350px;
            margin-bottom: 2rem;
        }

        #about-heading {
            font-size: 2.25rem;
            text-align: center;
        }

        #about-text-wrapper {
            text-align: center;
        }

        #about-text-1,
        #about-text-2 {
            font-size: 1.05rem;
        }
    }

    /* Mobile (<576px) */
    @media (max-width: 575.98px) {
        .about-section {
            padding: 3rem 1rem;
        }

        .about-flex {
            flex-direction: column !important;
        }

        #about-img {
            max-width: 240px;
        }

        #about-heading {
            font-size: 1.5rem;
            text-align: center;
        }

        #about-text-wrapper {
            text-align: center;
        }

        #about-text-1,
        #about-text-2 {
            font-size: 0.95rem;
        }
    }

    /* Desktop (≥1200px) */
    @media (min-width: 1200px) {
        #about-img {
            max-width: 520px;
            padding-right: 1.5rem;
        }

        .about-flex {
            flex-direction: row !important;
        }
    }
</style>
