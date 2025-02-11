@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Kotak Dashboard -->
            <div class="card shadow-lg">
                <div class="card-header text-white bg-danger font-bold text-center">
                    {{ __('Dashboard') }}
                </div>
                <div class="card-body text-center">
                    <h2 class="text-xl font-semibold text-gray-800">Selamat Datang Di Sistem UKS!</h2>
                    <p class="text-gray-600">@ruangsehatsmakenza</p>
                    <p class="text-gray-600">ruangsehat.smkn1bontang@gmail.com</p>
                </div>
            </div> 
        </div>
    </div>

    <!-- Informasi UKS -->
    <div class="row mt-5">
        <div class="col-md-6">
            <!-- Carousel Gambar UKS -->
            <div id="carouselUKS" class="carousel slide shadow-lg" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p2/34/2023/07/23/sekolah-sehat-1103907192.jpg') }}" class="d-block w-100 rounded-lg" alt="UKS 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('https://1.bp.blogspot.com/-e7d8wGUesHk/X4Y0E0xC_lI/AAAAAAAASuM/ITmLJ5dEzYEI9VJF5zLdGA2wI2Xz7VQlgCLcBGAsYHQ/w1200-h630-p-k-no-nu/Usaha%2BKesehatan%2BSekolah%2B%2528UKS%2529.jpg') }}" class="d-block w-100 rounded-lg" alt="UKS 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('https://smknurulislam.sch.id/wp-content/uploads/2020/06/UKS.jpg') }}" class="d-block w-100 rounded-lg" alt="UKS 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselUKS" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselUKS" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-red-100 p-4 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800">Tentang UKS</h2>
                <p class="text-gray-700 mt-3">
                    Unit Kesehatan Sekolah (UKS) adalah layanan kesehatan yang bertujuan untuk 
                    meningkatkan kesehatan siswa di sekolah. UKS menyediakan obat-obatan, 
                    pertolongan pertama, serta edukasi kesehatan bagi siswa dan staf sekolah.
                </p>
                <p class="text-gray-700 mt-3">
                    Pastikan kesehatan selalu terjaga dengan menggunakan fasilitas UKS dengan bijak. 
                    Jika memerlukan bantuan medis, segera hubungi petugas UKS.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
