<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SoftwareActivationController;

// Route halaman beranda (home) mengarah ke home.blade.php
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk halaman utama daftar layanan dan aktivasi software (index.blade.php)
Route::get('/index', [HomeController::class, 'showIndex'])->name('index');

// Route untuk daftar layanan (services) mengarah ke index layanan
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

// Route untuk detail layanan berdasarkan ID
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.details');

// Route untuk daftar aktivasi software
Route::get('/softwares', [SoftwareController::class, 'index'])->name('softwares.index');

// Route untuk berlangganan layanan
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');

// Route untuk aktivasi software
Route::post('/activate-software', [SoftwareActivationController::class, 'activate'])->name('activate-software');
