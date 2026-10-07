<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'judul' => 'Selamat Datang di Laravel',
        'mahasiswa' => [
            ['nama' => 'Dev Reynaldi Simanjuntak', 'nim' => '4253550008', 'jurusan' => 'Ilmu Komputer'],
        ],
    ];
    return view('welcome', $data);
});

Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/hello/{nama}', [PageController::class, 'hello']);