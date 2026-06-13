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
        <span class="bg-white/20 px-4 py-2 rounded-full">IoT Based</span>
        <span class="bg-white/20 px-4 py-2 rounded-full">AI Ready</span>
        <span class="bg-white/20 px-4 py-2 rounded-full">Smart City</span>
    </div>
</div>

<div class="grid md:grid-cols-4 gap-6 mb-8">
    <div class="card p-6">
        <p class="text-gray-500">Total Sampah</p>
        <h2 class="text-5xl font-black text-green-600">255 Kg</h2>
    </div>
    <div class="card p-6">
        <p class="text-gray-500">Nilai Ekonomi</p>
        <h2 class="text-5xl font-black text-blue-600">Rp34K</h2>
    </div>
    <div class="card p-6">
        <p class="text-gray-500">TPS Aktif</p>
        <h2 class="text-5xl font-black text-orange-500">12</h2>
    </div>
    <div class="card p-6">
        <p class="text-gray-500">Status Sistem</p>
        <h2 class="text-5xl font-black text-emerald-500">Online</h2>
    </div>
</div>

<!-- BAGIAN YANG DIUBAH: VISUALISASI BIN -->
<div class="grid md:grid-cols-3 gap-6 mb-8">

    <!-- Organik Bin -->
    <div class="card p-6 flex flex-col items-center">
        <h3 class="text-gray-500 mb-4 self-start">Organik</h3>
        
        <div class="relative w-24 h-40 bg-gray-100 rounded-b-2xl border-x-4 border-b-4 border-gray-200 overflow-hidden shadow-inner">
            <!-- Tutup Bin Visual -->
            <div class="absolute top-0 w-full h-2 bg-gray-300 rounded-full z-10"></div>
            <!-- Isi Bin -->
            <div class="absolute bottom-0 w-full bg-gradient-to-t from-green-600 to-green-400 transition-all duration-1000 ease-out shadow-[0_-4px_10px_rgba(34,197,94,0.3)]" 
                 style="height: 85%;">
                <div class="absolute top-2 left-0 right-0 h-1 bg-white/20"></div>
            </div>
        </div>

        <p class="mt-4 text-2xl font-black text-green-600">85%</p>
    </div>

    <!-- Anorganik Bin -->
    <div class="card p-6 flex flex-col items-center">
        <h3 class="text-gray-500 mb-4 self-start">Anorganik</h3>
        
        <div class="relative w-24 h-40 bg-gray-100 rounded-b-2xl border-x-4 border-b-4 border-gray-200 overflow-hidden shadow-inner">
            <div class="absolute top-0 w-full h-2 bg-gray-300 rounded-full z-10"></div>
            <div class="absolute bottom-0 w-full bg-gradient-to-t from-blue-600 to-blue-400 transition-all duration-1000 ease-out shadow-[0_-4px_10px_rgba(59,130,246,0.3)]" 
                 style="height: 72%;">
                <div class="absolute top-2 left-0 right-0 h-1 bg-white/20"></div>
            </div>
        </div>

        <p class="mt-4 text-2xl font-black text-blue-600">72%</p>
    </div>

    <!-- Logam Bin -->
    <div class="card p-6 flex flex-col items-center">
        <h3 class="text-gray-500 mb-4 self-start">Logam</h3>
        
        <div class="relative w-24 h-40 bg-gray-100 rounded-b-2xl border-x-4 border-b-4 border-gray-200 overflow-hidden shadow-inner">
            <div class="absolute top-0 w-full h-2 bg-gray-300 rounded-full z-10"></div>
            <div class="absolute bottom-0 w-full bg-gradient-to-t from-yellow-500 to-yellow-300 transition-all duration-1000 ease-out shadow-[0_-4px_10px_rgba(234,179,8,0.3)]" 
                 style="height: 45%;">
                <div class="absolute top-2 left-0 right-0 h-1 bg-white/20"></div>
            </div>
        </div>

        <p class="mt-4 text-2xl font-black text-yellow-600">45%</p>
    </div>

</div>

<div class="grid md:grid-cols-2 gap-6">
    <div class="card p-6">
        <h2 class="text-2xl font-bold mb-4">Volume Sampah Mingguan</h2>
        <canvas id="wasteChart"></canvas>
    </div>

    <div class="card p-6">
        <h2 class="text-2xl font-bold mb-6">Monitoring IoT</h2>
        <div class="space-y-5">
            <div>
                <p class="text-gray-500">CH₄ (Metana)</p>
                <h3 class="text-4xl font-bold text-red-500">12.4 ppm</h3>
            </div>
            <div>
                <p class="text-gray-500">Suhu</p>
                <h3 class="text-4xl font-bold">32.6°C</h3>
            </div>
            <div>
                <p class="text-gray-500">Kelembaban</p>
                <h3 class="text-4xl font-bold">65%</h3>
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
            borderColor: '#10b981',
            borderWidth: 3,
            tension: .4,
            fill: true,
            backgroundColor: 'rgba(16, 185, 129, 0.1)'
        }]
    },
    options: {
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: { beginAtZero: true }
        }
    }
});
</script>

<style>
    /* Tambahan styling tipis agar card terlihat serasi dengan nasnsa style */
    .card {
        background: white;
        border-radius: 24px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
    }
</style>

@endsection