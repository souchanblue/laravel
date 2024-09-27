<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi data formulir
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Proses data formulir (misalnya menyimpan ke database atau hanya menampilkan pesan sukses)
        // Saat ini, hanya mengalihkan kembali ke halaman kontak dengan pesan sukses

        return redirect()->route('contact')->with('success', 'Pesan Anda telah dikirim!');
    }
}
