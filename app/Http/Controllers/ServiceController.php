<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Data layanan dengan harga tetap 20.000 per bulan
        $services = [
            ['id' => 1, 'name' => 'CapCut', 'description' => 'Langganan premium CapCut', 'price' => 'Rp 20.000 per bulan', 'image' => 'capcut.png'],
            ['id' => 2, 'name' => 'Canva', 'description' => 'Langganan premium Canva', 'price' => 'Rp 20.000 per bulan', 'image' => 'canva.png'],
            ['id' => 3, 'name' => 'YouTube', 'description' => 'Langganan YouTube Premium', 'price' => 'Rp 20.000 per bulan', 'image' => 'youtube.png'],
            ['id' => 4, 'name' => 'Viu', 'description' => 'Langganan premium Viu', 'price' => 'Rp 20.000 per bulan', 'image' => 'viu.png'],
            ['id' => 5, 'name' => 'Spotify', 'description' => 'Langganan premium Spotify', 'price' => 'Rp 20.000 per bulan', 'image' => 'spotify.png'],
            ['id' => 6, 'name' => 'WeTV', 'description' => 'Langganan premium WeTV', 'price' => 'Rp 20.000 per bulan', 'image' => 'wetv.png'],
        ];

        // Kirim data ke view
        return view('services.index', compact('services'));
    }
}
