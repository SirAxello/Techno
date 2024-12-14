<?php
namespace App\Models;

class Service
{
    public static function all()
    {
        // Data layanan premium tanpa menggunakan database
        return [
            [
                'name' => 'CapCut',
                'description' => 'Langganan premium CapCut',
                'price' => 'Rp ' . number_format(20000, 0, ',', '.') . ' per bulan', // Harga tetap 20.000 per bulan
                'image' => 'capcut.png',
            ],
            [
                'name' => 'Canva',
                'description' => 'Langganan premium Canva',
                'price' => 'Rp ' . number_format(20000, 0, ',', '.') . ' per bulan', // Harga tetap 20.000 per bulan
                'image' => 'canva.png',
            ],
            [
                'name' => 'YouTube',
                'description' => 'Langganan YouTube Premium',
                'price' => 'Rp ' . number_format(20000, 0, ',', '.') . ' per bulan', // Harga tetap 20.000 per bulan
                'image' => 'youtube.png',
            ],
            [
                'name' => 'Viu',
                'description' => 'Langganan premium Viu',
                'price' => 'Rp ' . number_format(20000, 0, ',', '.') . ' per bulan', // Harga tetap 20.000 per bulan
                'image' => 'viu.png',
            ],
            [
                'name' => 'Spotify',
                'description' => 'Langganan premium Spotify',
                'price' => 'Rp ' . number_format(20000, 0, ',', '.') . ' per bulan', // Harga tetap 20.000 per bulan
                'image' => 'spotify.png',
            ],
            [
                'name' => 'WeTV',
                'description' => 'Langganan premium WeTV',
                'price' => 'Rp ' . number_format(20000, 0, ',', '.') . ' per bulan', // Harga tetap 20.000 per bulan
                'image' => 'wetv.png',
            ],
        ];
    }
}
