@extends('layouts.app')
@section('title', 'About')
@section('content')
    <h1 class="text-3xl font-bold text-pink-400 mb-4">About</h1>
    <p class="mb-4">Halaman ini dibuat untuk Tugas Rutin 9 (Setup Laravel). Anggota tim:</p>
    <ul class="list-disc ml-6 space-y-1">
        @foreach ($tim as $anggota)
            <li>{{ $anggota }}</li>
        @endforeach
    </ul>
@endsection
