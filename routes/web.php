<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'judul' => 'Selamat Datang di Laravel',
        'mahasiswa' => [
            ['nama' => 'Andi',  'nim' => '2601001', 'jurusan' => 'Sistem Informasi'],
            ['nama' => 'Budi',  'nim' => '2601002', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Citra', 'nim' => '2601003', 'jurusan' => 'Manajemen Informatika'],
        ],
    ];
    return view('welcome', $data);
});

Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/hello/{nama}', [PageController::class, 'hello']);