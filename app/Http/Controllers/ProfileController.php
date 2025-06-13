<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // kode di sini
    public function show()
    {
        $nama = "Ratna";
        $kelamin = "Perempuan";
        $alamat = "Jl. Raya No. 123";
        $hobi = ['Membaca', 'Menulis', 'Berenang'];
        $data = [
            'nama' => $nama,
            'kelamin' => $kelamin,
            'alamat' => $alamat,
            'hobi' => $hobi
        ];
        return view('profile', compact('data'));
    }
}
