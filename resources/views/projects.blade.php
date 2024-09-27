@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 fw-bold" style="color: #FF5733;">Project</h1>
    <p class="text-center lead mb-5" style="color: #555;">Berikut adalah beberapa project yang telah saya kerjakan selama di sekolah, mencakup berbagai aplikasi dan sistem yang berhubungan dengan teknologi informasi.</p>

    <!-- Galeri Proyek -->
    <div class="row">
        <!-- Project 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100" style="border: 2px solid #FF5733;">
                <img src="{{ asset('images/brg.png') }}" class="card-img-top" alt="Project 1">
                <div class="card-body" style="background-color: #fce4ec;">
                    <h5 class="card-title" style="color: #D5006D;">Peminjaman Barang</h5>
                    <p class="card-text" style="color: #333;">Aplikasi web yang dibangun menggunakan PHP dan bootsrap, dengan fitur CRUD lengkap.</p>
                    <a href="https://github.com/souchanblue/peminjamanbarang666-basic_php_Mysql" class="btn btn-outline-danger" target="_blank">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100" style="border: 2px solid #FF5733;">
                <img src="{{ asset('images/komen.png') }}" class="card-img-top" alt="Project 2">
                <div class="card-body" style="background-color: #e3f2fd;">
                    <h5 class="card-title" style="color: #1976D2;">Proyek Sistem Komentar</h5>
                    <p class="card-text" style="color: #333;">Membuat sistem Komentar dengan php dan mudah di buat.</p>
                    <a href="https://github.com/username/project2" class="btn btn-outline-info" target="_blank">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100" style="border: 2px solid #FF5733;">
                <img src="{{ asset('images/cv.png') }}" class="card-img-top" alt="Project 3">
                <div class="card-body" style="background-color: #e8f5e9;">
                    <h5 class="card-title" style="color: #388E3C;">Project membuat cv</h5>
                    <p class="card-text" style="color: #333;">Aplikasi Cv tentang diri kita yang di buat menggunakan html dan bootsraps</p>
                    <a href="https://github.com/username/project3" class="btn btn-outline-success" target="_blank">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f5f5f5;
        /* Light grey background for contrast */
    }

    .card {
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }
</style>
@endsection