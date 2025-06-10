<style>
    .btn-circle {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-light:hover {
        background-color: #f1f1f1;
        transform: scale(1.05);
        transition: 0.2s ease-in-out;
    }


    .camera-controls button:hover {
        transform: scale(1.1);
        transition: 0.2s ease-in-out;
    }

    #camera {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 0.5rem;
        display: none;
    }

    #cameraOverlay {
        pointer-events: none;
    }
</style>
<div class="main-inference py-5">
    <div class="container text-center">
        <h4 class="fw-bold mb-1">Ingin berbicara tentang apa hari ini?</h4>
        <p class="text-muted mb-4">Gerakkan tanganmu ke kamera</p>

        {{-- Modal Kamus Bahasa Isyarat --}}
        <div class="modal fade" id="kamusModal" tabindex="-1" aria-labelledby="kamusModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kamusModalLabel">Kamus Bahasa Isyarat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('kamus-SIBI.jpeg') }}" alt="Kamus Bahasa Isyarat"
                            class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>


        {{-- Video Kamera + Kontrol --}}
        <div class="position-relative d-inline-block rounded overflow-hidden border border-dark shadow bg-dark text-white"
            style="width: 640px; height: 480px; max-width: 100%;">

            <!-- Tombol Kamus Bahasa Isyarat -->
            <button
                class="btn btn-light shadow-sm position-absolute top-0 end-0 m-3 d-flex align-items-center gap-1 px-3 py-2 rounded-pill"
                data-bs-toggle="modal" data-bs-target="#kamusModal" title="Kamus Bahasa Isyarat" style="z-index: 5;">
                <i class="bi bi-book fs-5 text-primary"></i>
                <span class="d-none d-md-inline text-primary fw-semibold">Kamus</span>
            </button>

            <div class="video-container position-relative w-100 h-100">
                <video id="camera" autoplay class="w-100 h-100 object-fit-cover rounded"></video>
                <canvas id="snapshot" class="position-absolute top-0 start-0 w-100 h-100 rounded d-none object-fit-cover"
                    style="z-index: 2;"></canvas>
            </div>

            {{-- Overlay Tulisan Kamera Nonaktif --}}
            <div id="cameraOverlay"
                class="position-absolute top-50 start-50 translate-middle text-center text-white fw-semibold fs-5">
                Kamera nonaktif
            </div>

            <div class="camera-controls position-absolute bottom-0 start-50 translate-middle-x mb-3 d-flex gap-3 z-3">
                {{-- Tombol Kamera --}}
                <button id="toggleCameraBtn" class="btn btn-danger btn-circle shadow" onclick="toggleCamera()"
                    title="Buka Kamera">
                    <i id="toggleIcon" class="bi bi-camera-video-off-fill fs-4"></i>
                </button>

                {{-- Tombol Prediksi --}}
                <button id="captureBtn" class="btn btn-primary btn-circle shadow" onclick="captureAndSend()"
                    title="Ambil Foto dan Prediksi">
                    <i class="bi bi-camera-fill fs-4"></i>
                </button>

                {{-- Tombol Ambil Ulang --}}
                <button id="retakeBtn" class="btn btn-warning btn-circle shadow d-none" onclick="retakePhoto()"
                    title="Ambil Ulang Foto">
                    <i class="bi bi-arrow-counterclockwise fs-4"></i>
                </button>
            </div>
        </div>

        {{-- Hasil Prediksi --}}
        <div id="result" class="mt-4 fw-semibold fs-5 text-info"></div>

        {{-- Loading Spinner --}}
        <div id="loadingSpinner" class="mt-3 d-none">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div>Memproses gambar...</div>
        </div>

    </div>
</div>
<script>
    const video = document.getElementById('camera');
    const canvas = document.getElementById('snapshot');
    const context = canvas.getContext('2d');
    const loadingSpinner = document.getElementById('loadingSpinner');
    // const photoPreview = document.getElementById('photoPreview');

    const toggleBtn = document.getElementById('toggleCameraBtn');
    const toggleIcon = document.getElementById('toggleIcon');
    const captureBtn = document.getElementById('captureBtn');
    const retakeBtn = document.getElementById('retakeBtn');

    let stream = null;
    let isCameraOn = false;

    const overlay = document.getElementById('cameraOverlay');

    function toggleCamera() {
        if (!isCameraOn) {
            navigator.mediaDevices.getUserMedia({
                    video: true
                })
                .then((mediaStream) => {
                    stream = mediaStream;
                    video.srcObject = mediaStream;
                    video.style.display = 'block';
                    // photoPreview.classList.add('d-none');
                    isCameraOn = true;
                    overlay.style.display = 'none';

                    toggleBtn.classList.remove('btn-danger');
                    toggleBtn.classList.add('bg-transparent', 'border', 'border-white');
                    toggleIcon.className = 'bi bi-camera-video-fill fs-4 text-white';
                    toggleBtn.title = 'Tutup Kamera';

                    // Tampilkan tombol prediksi
                    captureBtn.classList.remove('d-none');
                    retakeBtn.classList.add('d-none');
                })
                .catch((err) => {
                    alert("Tidak dapat mengakses kamera. Izin ditolak atau tidak tersedia.");
                    console.error(err);
                });
        } else {
            if (stream) {
                stream.getTracks().forEach(track => track.stop());
                stream = null;
            }

            video.srcObject = null;
            video.style.display = 'none';
            // photoPreview.classList.add('d-none');
            isCameraOn = false;
            overlay.style.display = 'block';

            toggleBtn.classList.remove('bg-transparent', 'border', 'border-white');
            toggleBtn.classList.add('btn-danger');
            toggleIcon.className = 'bi bi-camera-video-off-fill fs-4';
            toggleBtn.title = 'Buka Kamera';

            captureBtn.classList.remove('d-none');
            retakeBtn.classList.add('d-none');
        }
    }

    function captureAndSend() {
        if (!stream) {
            alert("Silakan buka kamera terlebih dahulu.");
            return;
        }

        // Tampilkan spinner sebelum mulai memproses
        loadingSpinner.classList.remove('d-none');

        // Tunggu sampai video memiliki dimensi valid
        const checkReady = setInterval(() => {
            if (video.videoWidth > 0 && video.videoHeight > 0) {
                clearInterval(checkReady);

                const videoWidth = video.videoWidth;
                const videoHeight = video.videoHeight;

                canvas.width = videoWidth;
                canvas.height = videoHeight;

                // Gambar frame dari video ke canvas
                context.drawImage(video, 0, 0, videoWidth, videoHeight);

                // Cek pixel untuk debugging
                const imageDataObj = context.getImageData(0, 0, 1, 1);
                console.log("Pixel [0,0] RGBA:", imageDataObj.data);

                // Ambil gambar dari canvas
                const imageData = canvas.toDataURL('image/jpeg');
                console.log("imageData length:", imageData.length);

                // Tampilkan canvas sebagai preview
                canvas.classList.remove('d-none');
                video.style.display = 'none';


                console.log("video dimensions:", video.videoWidth, video.videoHeight);
                console.log("canvas dimensions:", canvas.width, canvas.height);

                // Sembunyikan tombol kamera, tampilkan retake
                toggleBtn.classList.add('d-none');
                captureBtn.classList.add('d-none');
                retakeBtn.classList.remove('d-none');

                // Pause setelah drawImage agar frame tidak hilang
                video.pause();

                // Kirim ke server
                canvas.toBlob((blob) => {
                    const formData = new FormData();
                    formData.append('image', blob, 'screenshot.jpg');

                    fetch("{{ route('klasifikasi.predict') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: formData
                        })
                        .then(res => res.json())
                        .then(data => {
                            document.getElementById('result').innerText = "Prediksi: " + data
                                .prediction;
                        })
                        .catch(err => {
                            console.error('Gagal memproses prediksi:', err);
                            document.getElementById('result').innerText =
                                "Gagal memproses prediksi.";
                        })
                        .finally(() => {
                            // Sembunyikan spinner setelah proses selesai
                            loadingSpinner.classList.add('d-none');
                        });
                }, 'image/jpeg');
            }
        }, 100); // cek setiap 100ms sampai videoWidth valid
        video.addEventListener('loadedmetadata', () => {
            console.log("Metadata loaded. Video ready with size:", video.videoWidth, video.videoHeight);
        });

        setTimeout(() => {
            console.log("Video displayed? ", video.style.display);
            console.log("CurrentTime:", video.currentTime);
        }, 2000);
    }

    function retakePhoto() {
        if (!stream) return;

        video.style.display = 'block';
        canvas.classList.add('d-none');
        video.play(); // lanjutkan video

        // photoPreview.classList.add('d-none');
        isCameraOn = true;
        overlay.style.display = 'none';

        toggleBtn.classList.remove('d-none');
        toggleBtn.classList.remove('btn-danger');
        toggleBtn.classList.add('bg-transparent', 'border', 'border-white');
        toggleIcon.className = 'bi bi-camera-video-fill fs-4 text-white';
        toggleBtn.title = 'Tutup Kamera';

        captureBtn.classList.remove('d-none');
        retakeBtn.classList.add('d-none');
        document.getElementById('result').innerText = "";
    }
</script>
