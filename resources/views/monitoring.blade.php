@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold mb-8">
Monitoring Kota
</h1>

<div class="grid md:grid-cols-4 gap-6 mb-8">

<div class="card p-6">
<p>Total Sampah</p>
<h2 class="text-4xl font-bold text-green-600">255 Kg</h2>
</div>

<div class="card p-6">
<p>Nilai Ekonomi</p>
<h2 class="text-4xl font-bold text-blue-600">Rp34.000</h2>
</div>

<div class="card p-6">
<p>Total Pekerja</p>
<h2 class="text-4xl font-bold">3</h2>
</div>

<div class="card p-6">
<p>TPS Aktif</p>
<h2 class="text-4xl font-bold text-orange-500">12</h2>
</div>

</div>

<div class="card p-8">

<h2 class="text-2xl font-bold mb-6">
Ringkasan Dampak Lingkungan
</h2>

<p class="text-gray-600 leading-8">
Sistem MethaZero berhasil memisahkan 255 Kg sampah
dan meningkatkan efisiensi daur ulang hingga 24%.
</p>

<button class="mt-6 bg-emerald-600 text-white px-6 py-3 rounded-xl">
Unduh Laporan
</button>

</div>

@endsection