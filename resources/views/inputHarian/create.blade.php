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
                        <div id="content-1" class="day-section">
                            @include('inputHarian.bangun')
                        </div>

                        <div id="content-2" class="day-section d-none">
                            @include('inputHarian.ibadah')
                        </div>

                        <div id="content-3" class="day-section d-none">
                            @include('inputHarian.olahraga')
                        </div>

                        {{-- <div id="content-4" class="day-section d-none">
                            @include('inputHarian.makan')
                        </div>

                        <div id="content-5" class="day-section d-none">
                            @include('inputHarian.belajar')
                        </div>

                        <div id="content-6" class="day-section d-none">
                            @include('inputHarian.membantu')
                        </div>

                        <div id="content-7" class="day-section d-none">
                            @include('inputHarian.tidur')
                        </div> --}}


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-style')
    @include('inputHarian.css.ibadah')
    @include('inputHarian.css.olahraga')
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
    @include('inputHarian.js.create')
    @include('inputHarian.js.bangun')
    @include('inputHarian.js.ibadah')
    @include('inputHarian.js.olahraga')
@endsection
