<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Software;

class HomeController extends Controller
{
    // Menampilkan halaman utama (home.blade.php)
    public function index()
    {
        return view('home');
    }

    // Menampilkan halaman layanan premium dan aktivasi software (index.blade.php)
    public function showIndex()
    {
        // Mengambil data layanan premium dan software
        $services = Service::all(); // Mengambil semua data layanan
        $softwares = Software::all(); // Mengambil semua data software

        // Mengirimkan data ke tampilan 'index'
        return view('index', compact('services', 'softwares'));
    }
}
