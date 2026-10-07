<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class PageController extends Controller
{
    public function about()
    {
        $tim = ['Andi', 'Budi', 'Citra'];
        return view('about', compact('tim'));
    }

    public function contact()
    {
        $kontak = [
            'email'   => 'kampus@example.com',
            'telepon' => '0812-3456-7890',
            'alamat'  => 'Pekanbaru, Riau',
        ];
        $jumlah = Mahasiswa::count();
        return view('contact', compact('kontak', 'jumlah'));
    }

    public function hello(string $nama)
    {
        return view('hello', ['nama' => $nama]);
    }
}