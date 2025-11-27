<div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center py-4">
    <div class="text-center" style="max-width: 420px;">

        <!-- Gambar -->
        <img src="{{ asset('assets/json/img/avatars/sunrise.jpg') }}" alt="Bangun Pagi" class="img-fluid mb-3 rounded"
            style="max-width: 180px;">

        <!-- Judul -->
        <h4 class="fw-bold mb-3">Jam berapa kamu bangun hari ini?</h4>

        <!-- Input Jam -->
        <div class="d-flex justify-content-center gap-4 flex-wrap">

            <!-- Jam -->
            <div class="d-flex flex-column align-items-center;">
                <i class="fa-solid fa-sort-up" style="font-size:28px" id="upJam"></i>

                <input type="number" class="form-control text-center" min="00" max="23" value="07"
                    id="jam" readonly>
                <i class="fa-solid fa-sort-down" style="font-size:28px" id="downJam"></i>
            </div>
            <div class="d-flex align-items-center">
                <p class="m-0" style="font-size:32px;">:</p>
            </div>
            <!-- Menit -->
            <div class="d-flex flex-column align-items-center;">
                <i class="fa-solid fa-sort-up" style="font-size:28px" id="upMenit"></i>

                <input type="number" class="form-control text-center" min="00" max="59" value="00"
                    id="menit">
                <i class="fa-solid fa-sort-down" style="font-size:28px" id="downMenit"></i>
            </div>

        </div>
        <button type="button" class="btn btn-primary" style="margin-top: 20px">Simpan</button>
    </div>
</div>
