<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Software;

class IndexController extends Controller
{
    public function showIndex()
    {
        // Mengambil data layanan premium dan software
        $services = Service::all();
        $softwares = Software::all();

        // Mengirimkan data ke tampilan 'index'
        return view('index', compact('services', 'softwares'));
    }
}
