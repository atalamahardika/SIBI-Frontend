@if ($feedbacks->count())
    <div class="feedback-results">
        <div class="container my-5">
            <h2 class="text-center text-primary fw-bold mb-4">Apa Kata Mereka</h2>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($feedbacks as $feedback)
                        <div class="swiper-slide">
                            <div class="card testimonial-card text-center p-4">
                                <h5 class="text-primary fw-semibold">{{ $feedback->name }}</h5>
                                <p class="mt-3 mb-0 text-muted">{{ $feedback->message }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-button-prev custom-nav"></div>
                <div class="swiper-button-next custom-nav"></div>
                <div class="swiper-pagination mt-3"></div>
            </div>
        </div>
    </div>

    {{-- Styles --}}
    <style>
        .testimonial-card {
            height: 300px;
            width: 500px;
            border-radius: 20px;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: none;
            box-shadow: none; /* Hapus shadow */
        }

        .swiper {
            width: 100%;
            padding: 40px 0;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .custom-nav {
            width: 40px;
            height: 40px;
            background-color: rgba(0, 123, 255, 0.1);
            color: #007bff;
            border-radius: 50%;
            top: 40%;
            transition: 0.3s ease;
        }

        .custom-nav:hover {
            background-color: #007bff;
            color: #fff;
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 16px;
            font-weight: bold;
        }

        .swiper-pagination {
            text-align: center;
        }

        .swiper-pagination-bullet {
            background-color: #ccc;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: #007bff;
        }
    </style>

    {{-- SwiperJS Init --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.mySwiper', {
                effect: 'cards',
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                cardsEffect: {
                    slideShadows: false 
                }
            });
        });
    </script>
@endif
