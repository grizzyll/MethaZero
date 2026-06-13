@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-8">

<div>
<h1 class="text-4xl font-bold">Manajemen Pekerja TPS</h1>
<p class="text-gray-500">Data operator MethaZero</p>
</div>

<button class="bg-emerald-600 text-white px-5 py-3 rounded-xl">
+ Tambah Pekerja
</button>

</div>

<div class="card p-6">

<table class="w-full">

<thead>

<tr class="border-b">
<th class="p-4">Nama</th>
<th class="p-4">NIK</th>
<th class="p-4">Status</th>
<th class="p-4">Aksi</th>
</tr>

</thead>

<tbody>

<tr class="border-b">
<td class="p-4">Budi Santoso</td>
<td class="p-4">TPS001</td>
<td class="p-4 text-green-600">Aktif</td>
<td class="p-4">🗑️</td>
</tr>

<tr class="border-b">
<td class="p-4">Siti Aminah</td>
<td class="p-4">TPS002</td>
<td class="p-4 text-green-600">Aktif</td>
<td class="p-4">🗑️</td>
</tr>

<tr>
<td class="p-4">Zein Aisyah</td>
<td class="p-4">TPS003</td>
<td class="p-4 text-green-600">Aktif</td>
<td class="p-4">🗑️</td>
</tr>

</tbody>

</table>

</div>

@endsection