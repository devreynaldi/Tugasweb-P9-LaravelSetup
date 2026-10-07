@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <h1 class="text-3xl font-bold text-pink-400 mb-4">Contact</h1>
    <dl class="space-y-2">
        @foreach ($kontak as $label => $nilai)
            <div class="flex gap-4"><dt class="w-24 capitalize text-slate-400">{{ $label }}</dt><dd>{{ $nilai }}</dd></div>
        @endforeach
    </dl>
    <p class="mt-6 text-sm text-slate-400">Jumlah data mahasiswa di database: {{ $jumlah }}</p>
@endsection
