<div id="Cara-Kerja" class="how-it-work-section d-flex align-items-center"
    style="background-image: url('{{ asset('how-it-works.png') }}'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="text-white fw-bold">Cara Kerja</h2>
            </div>
        </div>
        <div class="row g-1">
            {{-- Card 1 --}}
            <div class="col-lg-3 col-md-6 col-12 text-center text-white">
                <div class="icon-card d-flex align-items-center justify-content-center mx-auto mb-5">
                    <img src="{{ asset('lucide_hand.png') }}" alt="Gerakkan Tangan">
                </div>
                <div class="text-wrapper mx-auto" style="max-width: 220px;">
                    <h4 class="fw-semibold mt-3">Gerakkan Tangan Kamu</h4>
                    <p class="text-white small">
                        Cukup lakukan gerakan tangan seperti yang biasa digunakan dalam bahasa isyarat SIBI
                    </p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="col-lg-3 col-md-6 col-12 text-center text-white">
                <div class="icon-card d-flex align-items-center justify-content-center mx-auto mb-5">
                    <img src="{{ asset('mingcute_pic-ai-line.png') }}" alt="Teknologi AI">
                </div>
                <div class="text-wrapper mx-auto" style="max-width: 220px;">
                    <h4 class="fw-semibold mt-3">Teknologi AI akan Memproses</h4>
                    <p class="text-white small">
                        Aplikasi akan secara otomatis mengenali gerakan tangan kamu menggunakan teknologi canggih
                    </p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="col-lg-3 col-md-6 col-12 text-center text-white">
                <div class="icon-card d-flex align-items-center justify-content-center mx-auto mb-5">
                    <img src="{{ asset('mi_document.png') }}" alt="Diterjemahkan ke Teks">
                </div>
                <div class="text-wrapper mx-auto" style="max-width: 220px;">
                    <h3 class="fw-semibold mt-3">Diterjemahkan ke Bentuk Teks</h3>
                    <p class="text-white small">
                        Gerakan tangan kamu langsung diterjemahkan menjadi teks yang bisa dibaca oleh orang lain
                    </p>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="col-lg-3 col-md-6 col-12 text-center text-white">
                <div class="icon-card d-flex align-items-center justify-content-center mx-auto mb-5">
                    <img src="{{ asset('pajamas_smile.png') }}" alt="Real-Time">
                </div>
                <div class="text-wrapper mx-auto" style="max-width: 220px;">
                    <h3 class="fw-semibold mt-3">Real-Time dan Mudah</h3>
                    <p class="text-white small">
                        Semua proses ini diproses secara real-time dan bisa langsung dilihat di perangkat kamu
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .icon-card {
        height: 250px;
        width: 250px;
        background: linear-gradient(225deg, #7CADFD, #2A5EB3);
        border-top-left-radius: 100px;
        border-top-right-radius: 50px;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 100px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .icon-card img {
        width: 130px;
    }

    /* Tablet: lebih kecil */
    @media (max-width: 1199.98px) {
        .icon-card {
            height: 200px;
            width: 200px;
            border-top-left-radius: 80px;
            border-top-right-radius: 40px;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 80px;
        }

        .icon-card img {
            width: 104px;
        }
    }

    /* Mobile: ukuran paling kecil */
    @media (max-width: 575.98px) {
        .icon-card {
            height: 160px;
            width: 160px;
            border-top-left-radius: 64px;
            border-top-right-radius: 32px;
            border-bottom-left-radius: 32px;
            border-bottom-right-radius: 64px;
        }

        .icon-card img {
            width: 83.5px;
        }
    }
</style>
