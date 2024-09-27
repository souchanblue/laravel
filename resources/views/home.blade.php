@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <!-- Hero Section -->
    <div class="row align-items-center my-5" style="background: linear-gradient(to bottom right, #ffefba, #ffffff); padding: 50px 0;">
        <div class="col-md-6 text-center text-md-start">
            <h1 class="display-4 fw-bold" style="color: #ff5733;">Muhammad Bayu Firdaus</h1>
            <h3 class="text-muted">Siswa SMK Bakti Nusantara 666 Jurusan PPLG</h3>
            <p class="lead mt-3" style="color: #333;">kau tau apa masalahnya, kau pencet "M" Untuk Mini
                Padahal Seharusnya
                Kau Pencet "W" Untuk Wumbo
                Patrick Aku Kira Wumbo Bukan Kata Yang Benar
                AYOLAHH
                Kau Tau?
                Aku Wumbo
                Kau Wumbo
                Dia Perempuan
                Aku Wumbo
                ‌Wumbo Wumboing Wumbou setelah wumbo ingin menjadi wumbo</p>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/bay.jpeg') }}" class="img-fluid rounded-circle shadow-lg" alt="Muhammad Bayu Firdaus" style="max-height: 400px; object-fit: cover;">
        </div>
    </div>

    <!-- Tentang Saya Section -->
    <div class="my-5 text-center" style="background-color: #ffe4e1; padding: 20px; border-radius: 10px;">
        <h2 class="mb-4 fw-bold">Tentang Saya</h2>
        <p class="fs-5" style="color: #555;">Saya Muhammad Bayu Firdaus, siswa kelas 12 jurusan PPLG di SMK Bakti Nusantara 666. Passion saya ada di bidang teknologi dan pengembangan perangkat lunak. Saat ini, saya fokus memperdalam keterampilan dalam pemrograman dan berusaha menjadi developer yang handal di masa depan.</p>
        <a href="{{ url('/about') }}" class="btn btn-outline-primary mt-3">Pelajari Lebih Lanjut Tentang Saya</a>
    </div>

    <!-- Tagline Section (Quotes) -->
    <div class="py-5 bg-light text-center">
        <blockquote class="blockquote" style="border-left: 5px solid #ff5733; padding-left: 10px;">
            <p class="fs-4 mb-0">"Tidak masalah bila kau kalah, selama kau senang melakukannya."</p>
            <footer class="blockquote-footer mt-3" style="color: #555;">Muhammad Bayu Firdaus</footer>
        </blockquote>
    </div>

    <!-- Proyek Unggulan Section -->
    <div class="container my-5">
        <h2 class="text-center fw-bold" style="color: #ff5733;">Proyek Unggulan</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card shadow-sm mb-4" style="border: 2px solid #ff5733;">
                    <img src="{{ asset('images/brg.png') }}" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Peminjaman barang</h5>
                        <p class="card-text">Aplikasi web yang dibangun menggunakan PHP dan bootsrap, dengan fitur CRUD lengkap.</p>
                        <a href="{{ url('/projects') }}" class="btn btn-outline-primary">Lihat Proyek</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm mb-4" style="border: 2px solid #ff5733;">
                    <img src="{{ asset('images/komen.png') }}" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Proyek Sistem Komentar</h5>
                        <p class="card-text">Membuat sistem Komentar dengan fitur CRUD lengkap dan  di buat menggunakan php.</p>
                        <a href="{{ url('/projects') }}" class="btn btn-outline-primary">Lihat Proyek</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm mb-4" style="border: 2px solid #ff5733;">
                    <img src="{{ asset('images/cv.png') }}" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Project membuat cv</h5>
                        <p class="card-text">Aplikasi Cv tentang diri kita yang di buat menggunakan html dan bootsraps</p>
                        <a href="{{ url('/projects') }}" class="btn btn-outline-primary">Lihat Proyek</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection