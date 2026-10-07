@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1 class="text-4xl font-bold text-pink-400 mb-2">{{ $judul }}</h1>
    <p class="text-slate-400 mb-8">Tugas Rutin 9 — Setup Laravel</p>

    <div class="overflow-hidden rounded-lg border border-slate-700">
        <table class="w-full text-left">
            <thead class="bg-slate-800 text-slate-300">
                <tr><th class="p-3">#</th><th class="p-3">Nama</th><th class="p-3">NIM</th><th class="p-3">Jurusan</th></tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $m)
                    <tr class="border-t border-slate-700">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $m['nama'] }}</td>
                        <td class="p-3">{{ $m['nim'] }}</td>
                        <td class="p-3">{{ $m['jurusan'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
