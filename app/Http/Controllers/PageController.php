<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class PageController extends Controller
{
    public function about()
    {
        $tim = ['Dev Reynaldi Simanjuntak'];
        return view('about', compact('tim'));
    }

    public function contact()
    {
        $kontak = [
            'email'   => 'emailkamu@gmail.com',
            'telepon' => '08xx-xxxx-xxxx',
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