@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4" style="color: #FF5733;">Kontak Saya</h1>
    <p class="text-center lead mb-5" style="color: #333;">Jika Anda memiliki pertanyaan atau ingin berdiskusi lebih lanjut, silakan isi formulir di bawah ini atau hubungi saya melalui media sosial.</p>

    <!-- Formulir Kontak -->
    <form>
        <div class="mb-3">
            <label for="name" class="form-label" style="color: #FF5733;">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required style="border: 2px solid #FF5733; background-color: #ffe6e6; color: #333;">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" style="color: #FF5733;">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required style="border: 2px solid #FF5733; background-color: #ffe6e6; color: #333;">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label" style="color: #FF5733;">Pesan</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini" required style="border: 2px solid #FF5733; background-color: #ffe6e6; color: #333;"></textarea>
        </div>
        <button type="submit" class="btn" style="background-color: #FF5733; color: white;">Kirim</button>
    </form>

    <!-- Informasi Kontak Lain -->
    <div class="mt-5" style="background-color: #e7f0ff; padding: 15px; border-radius: 5px;">
        <h4 style="color: #007BFF;">Informasi Kontak Lain:</h4>
        <p>Email: <a href="mailto:bayuvtrde3@gmail.com" style="color: #FF5733;">bayuvtrde3@gmail.com</a></p>
        <p>Media Sosial:</p>
        <ul>
            <li><a href="https://www.instagram.com/bayyrds" target="_blank" style="color: #FF5733;">Instagram</a></li>
        </ul>
    </div>
</div>
@endsection