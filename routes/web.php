<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Nida Auliyah';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', [MainController::class, 'login']);

Route::get('/register', [MainController::class, 'register']);

Route::get('/admin', [AdminController::class, 'home']);

Route::get('/datasiswa', [AdminController::class, 'siswa']);

Route::get('/dataguru', [AdminController::class, 'guru']);

Route::get('/datakelas', [AdminController::class, 'kelas']);

Route::get('/datajadwal', [AdminController::class, 'jadwal']);

Route::get('/datapresensisiswa', [AdminController::class, 'presensisiswa']);

Route::get('/datapresensiguru', [AdminController::class, 'presensiguru']);

Route::get('/siswa', [SiswaController::class, 'home']);

Route::get('/profilsiswa', [SiswaController::class, 'profil']);

Route::get('/kelassiswa', [SiswaController::class, 'kelas']);

Route::get('/jadwalsiswa', [SiswaController::class, 'jadwal']);

Route::get('/pembayaransiswa', [SiswaController::class, 'pembayaran']);

Route::get('/presensisiswa', [SiswaController::class, 'presensi']);

Route::get('/guru', [GuruController::class, 'home']);

Route::get('/profilguru', [GuruController::class, 'profil']);

Route::get('/kelasguru', [GuruController::class, 'kelas']);

Route::get('/jadwalguru', [GuruController::class, 'jadwal']);

Route::get('/presensiguru', [GuruController::class, 'presensi']);

Route::get('/coba', function () {
    return view('about');
});