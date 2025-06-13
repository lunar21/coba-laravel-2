<?php
/**
 * Perintah Artisan untuk membuat controller: php artisan make:controller HomeController
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //tulis kode di sini
    public function index() {
    $nama = "Ratna";
    return view('home', compact('nama'));
}

    public function about()
    {
        return 'Ini adalah halaman about';
    }
}
