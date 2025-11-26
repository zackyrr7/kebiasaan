@extends('layouts/contentNavbarLayout')
@section('title', 'Dashboard - Analytics')
{{-- 
@section('vendor-style')
    @vite(['resources/assets/vendor/libs/apex-charts/apex-charts.scss'])
@endsection
@section('vendor-script')
    @vite(['resources/assets/vendor/libs/apex-charts/apexcharts.js'])
@endsection
@section('page-script')
    @vite(['resources/assets/js/dashboards-analytics.js'])
@endsection --}}

@section('content')
    <div class="row gy-6">
        <h4>Selamat datang kembali, {{ $nama }}</h4>
        <div class="col-md-12 col-lg-6">
            <div class="card">
                <div class="card-body ">

                    <p class="mb-2">Streak Counter</p>
                    <div style="display:flex; align-items:center; gap:6px;">
                        @if ($streak == 0)
                            <i class="fa-solid fa-fire" style="font-size:20px;"></i>
                        @else
                            <i class="fa-solid fa-fire" style="color: coral; font-size:20px;"></i>
                        @endif
                        <h4 class="text-primary mb-0">{{ $streak }} hari beruntun</h4>
                    </div>



                    {{-- <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a> --}}
                </div>

            </div>
        </div>

        <div class="col-md-12 col-lg-6">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0">Experience Points</h6>
                        <span class="fw-bold">
                            <i class="fa-solid fa-star" style="color:#FFD43B; font-size:16px;"></i>
                            Level 5
                        </span>
                    </div>

                    <!-- Progress Bar -->
                    <div class="progress mb-1" style="height: 10px; border-radius: 10px;">
                        <div class="progress-bar" role="progressbar"
                            style="width: {{ $progress }}%; border-radius: 10px;">
                        </div>
                    </div>

                    <div class="text-end small fw-semibold">
                        {{ $xp }} / {{ $maxXp }} XP
                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card" style="border-radius:20px; overflow:hidden;">
                <div class="d-flex align-items-center p-3" style="gap:20px;">

                    <!-- GAMBAR -->
                    <div style="flex-shrink:0;">
                        <img src="{{ asset('assets/json/img/backgrounds/backgrounddashboard.jpg') }}" alt="image"
                            style="width:140px; height:auto; border-radius:12px;">
                    </div>

                    <!-- TEKS -->
                    <div style="flex-grow:1;">
                        <h4 class="mb-1 fw-bold">Penilaian Hari ini</h4>



                        <p class="text-muted mt-1 mb-0">
                            Jaga streak-mu setiap hari untuk mendapatkan XP tambahan!
                        </p>
                    </div>

                    <!-- BUTTON -->
                    <div>
                        <a href="{{ route('inputHarian.create') }}" class="btn btn-primary"
                            style="border-radius:20px; padding:10px 20px;">
                            Mulai Sekarang!
                        </a>
                    </div>

                </div>
            </div>
        </div>

    @endsection
