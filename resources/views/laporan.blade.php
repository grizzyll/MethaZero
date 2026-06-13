@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold mb-8">
Laporan Sistem MethaZero
</h1>

<div class="grid md:grid-cols-3 gap-6 mb-8">

<div class="card p-6">
<p>Total Sampah</p>
<h2 class="text-4xl font-bold text-green-600">
255 Kg
</h2>
</div>

<div class="card p-6">
<p>Nilai Ekonomi</p>
<h2 class="text-4xl font-bold text-blue-600">
Rp34.000
</h2>
</div>

<div class="card p-6">
<p>Akurasi</p>
<h2 class="text-4xl font-bold text-orange-500">
98%
</h2>
</div>

</div>

<div class="card p-8">

<h2 class="text-2xl font-bold mb-4">
Ringkasan
</h2>

<p class="text-gray-600 leading-8">
MethaZero berhasil melakukan pemilahan otomatis
dengan akurasi 98% dan memberikan estimasi nilai
ekonomi sampah secara real-time.
</p>

<button class="mt-6 bg-emerald-600 text-white px-6 py-3 rounded-xl">
Download PDF
</button>

</div>

@endsection