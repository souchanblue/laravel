@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 fw-bold text-danger">About Me</h1>

    <!-- Biografi Singkat -->
    <div class="text-center mb-5">
        <img src="{{ asset('images/bay.jpeg') }}" class="rounded-circle mb-3 shadow-lg" alt="Foto Diri" style="border: 3px solid #ff5733;">
        <p class="lead text-muted">Nama saya Muhammad Bayu Firdaus, seorang siswa di SMK Bakti Nusantara 666 jurusan PPLG (Pengembangan Perangkat Lunak dan Gim). Saya memiliki minat besar dalam belajar bahasa Jepang dan mempelajari teknologi terbaru, serta menikmati kegiatan kreatif seperti desain grafis dan pengembangan aplikasi.</p>
        <p class="text-muted">Hobi saya termasuk mendengarkan musik dan bermain game. Selama di sekolah, saya telah belajar tentang pengembangan web mobile menggunakan Flutter, Laravel, dan Bootstrap, serta membuat proyek peminjaman barang. Selain itu, saya juga memiliki pengalaman dalam perancangan sistem dan manajemen database. Saya dikenal sebagai orang yang dapat dengan tenang tidak melakukan apa-apa untuk beberapa waktu, yang saya anggap penting untuk menjaga keseimbangan dalam menghadapi dunia yang penuh tekanan.</p>
    </div>

    <!-- Keterampilan dan Keahlian -->
    <div class="mb-5">
        <h2 class="text-secondary text-center mb-4">Keterampilan dan Keahlian</h2>
        <ul class="list-group">
            <li class="list-group-item list-group-item-info">Pemrograman Web (PHP, JavaScript, HTML, CSS)</li>
            <li class="list-group-item list-group-item-success">Desain (Adobe Photoshop, 3D Blender)</li>
            <li class="list-group-item list-group-item-warning">Teknik Jaringan (Dasar-dasar Jaringan, Troubleshooting)</li>
            <li class="list-group-item list-group-item-danger">Manajemen Proyek (Pengalaman dalam proyek kelompok di sekolah)</li>
        </ul>
    </div>

    <!-- Tujuan dan Aspirasi -->
    <div class="mb-5">
        <h2 class="text-secondary text-center mb-4">Hal yang Ingin Dicapai</h2>
        <p class="lead text-muted">Di masa depan, saya berharap untuk menjadi seorang pengembang perangkat lunak yang handal, dengan kemampuan untuk menciptakan aplikasi yang inovatif dan bermanfaat bagi masyarakat. Saya ingin terus mengembangkan keterampilan saya dalam pemrograman dan desain, serta berkontribusi dalam proyek-proyek yang dapat meningkatkan kualitas hidup orang lain.</p>
    </div>
</div>

<style>
    body {
        background-color: #f8f9fa;
    }
    .list-group-item {
        font-size: 1.1em;
        border-radius: 8px;
    }
    .list-group-item-info {
        background-color: #d1ecf1; /* Light blue */
        color: #0c5460;
    }
    .list-group-item-success {
        background-color: #d4edda; /* Light green */
        color: #155724;
    }
    .list-group-item-warning {
        background-color: #fff3cd; /* Light yellow */
        color: #856404;
    }
    .list-group-item-danger {
        background-color: #f8d7da; /* Light red */
        color: #721c24;
    }
    .list-group-item:hover {
        transform: scale(1.02);
        transition: transform 0.2s;
    }
</style>
@endsection
