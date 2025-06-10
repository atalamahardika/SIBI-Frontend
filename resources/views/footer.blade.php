<footer style="background-image: url('{{ asset('footer-bg.png') }}'); background-size: cover;">
    <div class="container py-5">
        <div class="d-flex flex-row justify-content-center gap-2 align-items-center">
            <img src="{{ asset('Group 1.png') }}" alt="" style="width: 100px;">
            <div class="text-wrapper footer-title-wrapper">
                <h1 class="fw-bold mb-0 text-white footer-title-sibi">SIBI</h1>
                <h2 class="fw-bold text-white footer-title-reader">READER</h2>
            </div>
        </div>
        <p class="text-center text-white mb-0 mt-3" style="font-size: 10px">© 2025 Developed by Team LAI25-SM016</p>
    </div>
</footer>
<style>
    /* Tablet dan Mobile: atur tinggi teks sama dengan tinggi logo (100px) */
    @media (max-width: 1199.98px) {
        .footer-title-wrapper {
            height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .footer-title-sibi {
            font-size: 2.7rem;
            line-height: 1.2;
            margin: 0;
        }

        .footer-title-reader {
            font-size: 2.2rem;
            line-height: 1.2;
            margin: 0;
        }
    }

    /* Mobile khusus: font sedikit lebih kecil */
    @media (max-width: 575.98px) {
        .footer-title-sibi {
            font-size: 2.5rem;
        }

        .footer-title-reader {
            font-size: 2rem;
        }
    }
</style>
