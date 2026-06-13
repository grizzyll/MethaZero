@extends('layouts.app')

@section('content')

<div class="relative overflow-hidden bg-gradient-to-r from-emerald-700 via-teal-600 to-cyan-500 text-white p-10 rounded-[32px] mb-8 shadow-2xl">

    <div class="absolute right-0 top-0 opacity-10 text-[180px] font-black">
        MZ
    </div>

    <h1 class="text-6xl font-black">
        METHAZERO
    </h1>

    <p class="mt-3 text-xl">
        Smart Waste Intelligence Platform
    </p>

    <p class="mt-4 max-w-2xl">
        AI & IoT Based Waste Monitoring System for Sustainable Cities
    </p>

    <div class="flex gap-3 mt-6">

        <span class="bg-white/20 px-4 py-2 rounded-full">
            IoT Based
        </span>

        <span class="bg-white/20 px-4 py-2 rounded-full">
            AI Ready
        </span>

        <span class="bg-white/20 px-4 py-2 rounded-full">
            Smart City
        </span>

    </div>

</div>

<div class="grid md:grid-cols-4 gap-6 mb-8">

    <div class="card p-6">
        <p class="text-gray-500">Total Sampah</p>
        <h2 class="text-5xl font-black text-green-600">
            255 Kg
        </h2>
    </div>

    <div class="card p-6">
        <p class="text-gray-500">Nilai Ekonomi</p>
        <h2 class="text-5xl font-black text-blue-600">
            Rp34K
        </h2>
    </div>

    <div class="card p-6">
        <p class="text-gray-500">TPS Aktif</p>
        <h2 class="text-5xl font-black text-orange-500">
            12
        </h2>
    </div>

    <div class="card p-6">
        <p class="text-gray-500">Status Sistem</p>
        <h2 class="text-5xl font-black text-emerald-500">
            Online
        </h2>
    </div>

</div>

<div class="grid md:grid-cols-3 gap-6 mb-8">

    <div class="card p-6">
        <h3 class="text-gray-500">Organik</h3>

        <div class="w-full bg-gray-200 rounded-full h-4 mt-4">
            <div class="bg-green-500 h-4 rounded-full" style="width:85%"></div>
        </div>

        <p class="mt-3 font-bold">
            85%
        </p>
    </div>

    <div class="card p-6">
        <h3 class="text-gray-500">Anorganik</h3>

        <div class="w-full bg-gray-200 rounded-full h-4 mt-4">
            <div class="bg-blue-500 h-4 rounded-full" style="width:72%"></div>
        </div>

        <p class="mt-3 font-bold">
            72%
        </p>
    </div>

    <div class="card p-6">
        <h3 class="text-gray-500">Logam</h3>

        <div class="w-full bg-gray-200 rounded-full h-4 mt-4">
            <div class="bg-yellow-500 h-4 rounded-full" style="width:45%"></div>
        </div>

        <p class="mt-3 font-bold">
            45%
        </p>
    </div>

</div>

<div class="grid md:grid-cols-2 gap-6">

    <div class="card p-6">

        <h2 class="text-2xl font-bold mb-4">
            Volume Sampah Mingguan
        </h2>

        <canvas id="wasteChart"></canvas>

    </div>

    <div class="card p-6">

        <h2 class="text-2xl font-bold mb-6">
            Monitoring IoT
        </h2>

        <div class="space-y-5">

            <div>
                <p class="text-gray-500">CH₄ (Metana)</p>
                <h3 class="text-4xl font-bold text-red-500">
                    12.4 ppm
                </h3>
            </div>

            <div>
                <p class="text-gray-500">Suhu</p>
                <h3 class="text-4xl font-bold">
                    32.6°C
                </h3>
            </div>

            <div>
                <p class="text-gray-500">Kelembaban</p>
                <h3 class="text-4xl font-bold">
                    65%
                </h3>
            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

new Chart(document.getElementById('wasteChart'), {

type: 'line',

data: {

labels: ['Sen','Sel','Rab','Kam','Jum','Sab','Min'],

datasets: [{

label: 'Volume Sampah',

data: [12,19,10,15,22,18,25],

borderWidth: 3,

tension: .4

}]

}

});

</script>

@endsection