@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>
        <h1 class="text-5xl font-black">
            ♻️ Pemilahan Sampah
        </h1>

        <p class="text-gray-500 mt-2">
            Smart Waste Sorting Monitoring System
        </p>
    </div>

    <button class="bg-emerald-600 text-white px-6 py-3 rounded-2xl shadow-lg hover:bg-emerald-700">
        Export Data
    </button>

</div>

<div class="grid md:grid-cols-4 gap-6 mb-8">

    <div class="card p-6 text-center">

        <div class="text-5xl mb-3">
            🟢
        </div>

        <p class="text-gray-500">
            Organik
        </p>

        <h2 class="text-5xl font-black text-green-600">
            85 Kg
        </h2>

    </div>

    <div class="card p-6 text-center">

        <div class="text-5xl mb-3">
            🔵
        </div>

        <p class="text-gray-500">
            Anorganik
        </p>

        <h2 class="text-5xl font-black text-blue-600">
            120 Kg
        </h2>

    </div>

    <div class="card p-6 text-center">

        <div class="text-5xl mb-3">
            🟡
        </div>

        <p class="text-gray-500">
            Logam
        </p>

        <h2 class="text-5xl font-black text-yellow-500">
            50 Kg
        </h2>

    </div>

    <div class="card p-6 text-center">

        <div class="text-5xl mb-3">
            🎯
        </div>

        <p class="text-gray-500">
            Akurasi
        </p>

        <h2 class="text-5xl font-black text-emerald-600">
            98%
        </h2>

    </div>

</div>

<div class="grid md:grid-cols-3 gap-6 mb-8">

    <div class="card p-6">

        <h3 class="font-bold text-lg mb-4">
            Organik
        </h3>

        <div class="w-full bg-gray-200 rounded-full h-4">
            <div class="bg-green-500 h-4 rounded-full" style="width:85%"></div>
        </div>

        <p class="mt-3 font-bold">
            85%
        </p>

    </div>

    <div class="card p-6">

        <h3 class="font-bold text-lg mb-4">
            Anorganik
        </h3>

        <div class="w-full bg-gray-200 rounded-full h-4">
            <div class="bg-blue-500 h-4 rounded-full" style="width:72%"></div>
        </div>

        <p class="mt-3 font-bold">
            72%
        </p>

    </div>

    <div class="card p-6">

        <h3 class="font-bold text-lg mb-4">
            Logam
        </h3>

        <div class="w-full bg-gray-200 rounded-full h-4">
            <div class="bg-yellow-500 h-4 rounded-full" style="width:45%"></div>
        </div>

        <p class="mt-3 font-bold">
            45%
        </p>

    </div>

</div>

<div class="card p-6">

    <h2 class="text-2xl font-bold mb-6">
        Riwayat Pemilahan Real-Time
    </h2>

    <div class="overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b bg-gray-50">

                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Tanggal</th>
                    <th class="p-4 text-left">Jenis</th>
                    <th class="p-4 text-left">Berat</th>
                    <th class="p-4 text-left">Sensor</th>
                    <th class="p-4 text-left">Status</th>

                </tr>

            </thead>

            <tbody>

                <tr class="border-b hover:bg-gray-50">

                    <td class="p-4">#001</td>
                    <td class="p-4">11 Juni 2026</td>
                    <td class="p-4 text-yellow-500 font-bold">Logam</td>
                    <td class="p-4">15 Kg</td>
                    <td class="p-4">Inductive</td>

                    <td class="p-4">
                        <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full">
                            Berhasil
                        </span>
                    </td>

                </tr>

                <tr class="border-b hover:bg-gray-50">

                    <td class="p-4">#002</td>
                    <td class="p-4">11 Juni 2026</td>
                    <td class="p-4 text-green-600 font-bold">Organik</td>
                    <td class="p-4">10 Kg</td>
                    <td class="p-4">Capacitive</td>

                    <td class="p-4">
                        <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full">
                            Berhasil
                        </span>
                    </td>

                </tr>

                <tr class="hover:bg-gray-50">

                    <td class="p-4">#003</td>
                    <td class="p-4">11 Juni 2026</td>
                    <td class="p-4 text-blue-600 font-bold">Anorganik</td>
                    <td class="p-4">20 Kg</td>
                    <td class="p-4">Capacitive</td>

                    <td class="p-4">
                        <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full">
                            Berhasil
                        </span>
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection