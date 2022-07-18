<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    echo '<center>';
    echo '<u> Hello Semuanya, Apa Kabar? <br>';
    echo 'Pada Kali Ini Kita Sedang Belajar Route Basic </u>';
    echo '</center>';
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index2');
});

Route::get('/pages3', function () {
    return view('pages3.index3');
});

Route::get('/material/{pesanan?}/{pesanan1?}', function ($pesanan = "Mohon Maaf Material Tidak Ada", $pesanan1 = "Mohon Maaf Material Tidak Ada") {
    return view('pages1.material', compact('pesanan', 'pesanan1'));
});

Route::get('/pesanan/{minuman?}', function ($minuman = 'Kosong') {
    return view('pages1.pesanan', compact('minuman'));
});

Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobby}', function ($nama, $umur, $alamat, $jk, $hobby) {
    return view('pages1.biodata', compact('nama', 'umur', 'alamat', 'jk', 'hobby'));
});

Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}', [PengenalanController::class, 'intro']);

Route::get('/siswa', [PengenalanController::class, 'siswa']);

Route::get('/tugas', [LatihanController::class, 'tugas']);

Route::get('mahasiswa', [App\Http\Controllers\LatihanController::class, 'mahasiswa']);

Route::get('/televisi', [LatihanController::class, 'televisi']);

Route::get('/challenge', [LatihanController::class, 'challenge']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/staff', [StaffController::class, 'index']);

Route::get('/branch', [BranchController::class, 'index']);

Route::get('/staffbranch', [StaffBranchController::class, 'index']);
