<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    /**
     * Tampilkan daftar software untuk aktivasi.
     */
    public function index()
    {
        // Data software
        $softwares = [
            ['id' => 1, 'name' => 'Microsoft Office', 'description' => 'Aktivasi Microsoft Office 365', 'price' => 500000, 'image' => 'office.png'],
            ['id' => 2, 'name' => 'Adobe Photoshop', 'description' => 'Aktivasi Adobe Photoshop CC', 'price' => 700000, 'image' => 'photoshop.png'],
            ['id' => 3, 'name' => 'CorelDRAW', 'description' => 'Aktivasi CorelDRAW Graphics Suite', 'price' => 600000, 'image' => 'corel.png'],
        ];

        // Kirim data langsung ke view tanpa filter
        return view('softwares.index', compact('softwares'));
    }
}
