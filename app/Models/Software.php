<?php
namespace App\Models;

class Software
{
    public static function all()
    {
        // Data software tanpa menggunakan database
        return [
            [
                'id' => 1,
                'name' => 'Microsoft Office',
                'description' => 'Aktivasi Microsoft Office 365',
                'price' => 'Rp 35.000 per bulan', // Harga tetap 35.000 per bulan
                'image' => 'office.png',
            ],
            [
                'id' => 2,
                'name' => 'Adobe Photoshop',
                'description' => 'Aktivasi Adobe Photoshop CC',
                'price' => 'Rp 35.000 per bulan', // Harga tetap 35.000 per bulan
                'image' => 'photoshop.png',
            ],
            [
                'id' => 3,
                'name' => 'CorelDRAW',
                'description' => 'Aktivasi CorelDRAW Graphics Suite',
                'price' => 'Rp 35.000 per bulan', // Harga tetap 35.000 per bulan
                'image' => 'corel.png',
            ],
        ];
    }
}
