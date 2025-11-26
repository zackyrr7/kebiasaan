@extends('layouts/contentNavbarLayout')
@section('title', 'Kegiatan Harian')

@section('content')
    <div class="row gy-6">
        <div class="col-xl">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Input Harian</h5>
                </div>

                <div class="card-body">

                    <!-- SLIDER 7 HARI -->
                    <div class="day-slider mb-3" style="width: 100%;">
                        <div class="day-item active" data-day="1">Bangun Pagi</div>
                        <div class="day-item" data-day="2">Beribadah</div>
                        <div class="day-item" data-day="3">Olahraga</div>
                        <div class="day-item" data-day="4">Makan Sehat</div>
                        <div class="day-item" data-day="5">Belajar/membaca</div>
                        <div class="day-item" data-day="6">bermasyarakat/membantu orang tua</div>
                        <div class="day-item" data-day="7">Tidur Malam</div>
                    </div>

                    <!-- CONTENT BERUBAH -->
                    <div id="day-content" class="p-3 border rounded" style="background:#f8f9fa;">
                        <h5 class="fw-bold mb-2">Bangun Pagi</h5>
                        <p>Mulai hari lebih awal agar lebih produktif dan fokus.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-style')
    <style>
        .day-slider {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding-bottom: 10px;
            scrollbar-width: none;
        }

        .day-slider::-webkit-scrollbar {
            display: none;
        }

        .day-item {
            flex: 0 0 auto;
            padding: 10px 18px;
            background: #f1f1f1;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.2s;
            font-weight: 600;
            border: 2px solid transparent;
        }

        .day-item.active {
            background: #007bff;
            color: white;
            border-color: #0056d2;
        }
    </style>
@endsection
@section('page-script')
    <script>
        const contents = {
            1: {
                title: "Bangun Pagi",
                text: "Mulai hari lebih awal agar lebih produktif dan fokus."
            },
            2: {
                title: "Beribadah",
                text: "Mengisi hari dengan kebiasaan baik yang membangun karakter."
            },
            3: {
                title: "Olahraga",
                text: "Menjaga kesehatan fisik agar tetap bugar sepanjang hari."
            },
            4: {
                title: "Makan Sehat",
                text: "Konsumsi makanan bergizi untuk memenuhi nutrisi harian."
            },
            5: {
                title: "Gemar Belajar",
                text: "Meningkatkan wawasan dan kecerdasan setiap hari."
            },
            6: {
                title: "Bersih Diri",
                text: "Menjaga kebersihan tubuh untuk kesehatan dan kenyamanan."
            },
            7: {
                title: "Tidur Teratur",
                text: "Istirahat cukup untuk mendukung aktivitas esok hari."
            },
        };

        document.querySelectorAll('.day-item').forEach(item => {
            item.addEventListener('click', function() {

                document.querySelectorAll('.day-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');

                let id = this.dataset.day;
                let content = contents[id];

                document.getElementById('day-content').innerHTML = `
                <h5 class="fw-bold mb-2">${content.title}</h5>
                <p>${content.text}</p>
            `;
            });
        });
    </script>
@endsection
