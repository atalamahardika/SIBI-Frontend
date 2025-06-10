<div class="hero-section text-white d-flex align-items-center"
    style="background-image: url('{{ asset('hero-bg.png') }}'); background-size: cover;
           background-position: center; background-repeat: no-repeat;
           min-height: 125vh; width: 100%; padding: 100px 0; display: block;
           line-height: 0; margin-bottom: -1px;">
    <div class="container mt-4">
        <div class="row align-items-center flex-column-reverse flex-lg-row">
            {{-- Left side (judul + tombol) --}}
            <div class="col-lg-6 text-center text-lg-start hero-text mb-4 mb-lg-0">
                <h1 class="fw-bold hero-heading">Hubungkan Dunia dengan Bahasa Isyarat</h1>
                <h3 class="hero-subheading">Teknologi <strong>penerjemah SIBI berbasis AI</strong> kini hadir untuk Anda.</h3>
                <button class="btn btn-primary hero-btn mt-3 py-3 px-4 rounded-4"
                    onclick="window.location.href='{{ route('klasifikasi') }}'">
                    <strong class="h4">Coba Sekarang</strong>
                </button>
            </div>

            {{-- Right side (gambar + note) --}}
            <div class="col-lg-6 text-center hero-image">
                <img src="{{ asset('Group 6.png') }}" alt="" class="img-fluid hero-img" style="max-width: 100%;">
                <p class="text-dark mt-3 hero-note">
                    <small>*hanya berupa visualisasi, gambar dan terjemahan mungkin dapat berbeda dari contoh</small>
                </p>
            </div>
        </div>
    </div>
</div>
<style>
    /* Default desktop */
    .hero-heading {
        font-size: 3rem;
    }

    .hero-subheading {
        font-size: 1.5rem;
    }

    .hero-btn {
        font-size: 1.25rem;
        padding: 0.75rem 2rem;
    }

    .hero-img {
        max-width: 100%;
        height: auto;
    }

    .hero-note {
        font-size: 0.9rem;
    }

    /* Tablet (<1200px) */
    @media (max-width: 1199.98px) {
        .hero-section {
            min-height: 87.5vh !important;
        }
        .hero-heading {
            font-size: 2.5rem;
            margin-top: 1.5rem;
        }

        .hero-subheading {
            font-size: 1.25rem;
        }

        .hero-btn {
            font-size: 1.1rem;
            padding: 0.6rem 1.5rem;
        }

        .hero-img {
            max-width: 80%;
        }
        
        .hero-note {
            font-size: 0.7rem;
        }
    }

    /* Mobile (<576px) */
    @media (max-width: 575.98px) {
        .hero-section {
            min-height: 50vh !important;
        }
        .hero-heading {
            font-size: 1.8rem;
            margin-top: 1.5rem;
        }

        .hero-subheading {
            font-size: 1rem;
        }

        .hero-btn {
            font-size: 1rem;
            padding: 0.5rem 1.25rem;
        }

        .hero-img {
            max-width: 70%;
        }

        .hero-note {
            font-size: 0.5rem;
        }
    }
</style>
