<div id="Hubungi-Kami" class="feedback d-flex align-items-center" style="min-height: 70vh;">
    <div class="container">
        <h2 class="text-primary text-center fw-bold mb-5">Hubungi Kami</h2>
        {{-- Tambahkan wrapper agar form lebih sempit --}}
        <div class="mx-auto" style="max-width: 700px;">
            <form action="{{ route('feedback.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    {{-- Input Kiri --}}
                    <div class="col-md-6 d-flex flex-column justify-content-between gap-2" style="height: 100%;">
                        <input type="text" class="form-control mb-2 flex-fill" name="name" placeholder="Nama"
                            required style="height: calc(100% / 3 - 0.5rem);" autocomplete="name">
                        <input type="text" class="form-control mb-2 flex-fill" name="phone"
                            placeholder="Nomor Telepon" required style="height: calc(100% / 3 - 0.5rem);"
                            autocomplete="tel">
                        <input type="email" class="form-control mb-2 flex-fill" name="email" placeholder="Email"
                            required style="height: calc(100% / 3 - 0.5rem);" autocomplete="email">
                    </div>

                    {{-- Textarea Kanan --}}
                    <div class="col-md-6">
                        <textarea class="form-control h-100 rounded-3" name="message" placeholder="Kritik/Saran (maks. 300 karakter)"
                            maxlength="300" id="messageTextarea" oninput="updateCharCount()" required></textarea>
                        <div class="text-end small text-muted mt-1">
                            <span id="charCount">0</span>/300 karakter
                        </div>
                    </div>
                </div>

                {{-- Tombol dikontrol agar berada di tengah --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-primary rounded-3 px-4 py-2">Kirim</button>
                </div>
            </form>

            {{-- SweetAlert2 --}}
            @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: '{{ session('success') }}',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Tutup'
                        });
                    });
                </script>
            @endif
        </div>
    </div>
</div>
<script>
    function updateCharCount() {
        const textarea = document.getElementById('messageTextarea');
        const count = textarea.value.length;
        document.getElementById('charCount').textContent = count;
    }
    document.addEventListener('DOMContentLoaded', updateCharCount);
</script>
