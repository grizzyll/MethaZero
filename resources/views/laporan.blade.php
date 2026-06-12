<!DOCTYPE html>

<html>
<head>
    <title>Laporan - METHAZERO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

<div class="flex">

```
<!-- Sidebar -->
<div class="w-72 min-h-screen bg-green-700 text-white p-8">

    <h1 class="text-5xl font-bold mb-10">
        ♻️ METHAZERO
    </h1>

    <div class="space-y-4">

        <a href="/" class="block p-4 rounded-xl hover:bg-green-800">
            Dashboard
        </a>

        <a href="/pemilahan" class="block p-4 rounded-xl hover:bg-green-800">
            Pemilahan
        </a>

        <a href="/pekerja" class="block p-4 rounded-xl hover:bg-green-800">
            Pekerja
        </a>

        <a href="/monitoring" class="block p-4 rounded-xl hover:bg-green-800">
            Monitoring
        </a>

        <a href="/laporan" class="block bg-green-800 p-4 rounded-xl">
            Laporan
        </a>

    </div>

</div>

<!-- Content -->
<div class="flex-1 p-10">

    <h1 class="text-5xl font-bold text-slate-800">
        Laporan METHAZERO
    </h1>

    <p class="text-slate-500 mt-2">
        Rekapitulasi Pengelolaan Sampah dan Nilai Ekonomi
    </p>

    <div class="grid grid-cols-3 gap-6 mt-10">

        <div class="bg-white p-6 rounded-2xl shadow">
            <h3>Total Sampah</h3>
            <p class="text-4xl font-bold text-green-600">
                2.450 Kg
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow">
            <h3>Nilai Ekonomi</h3>
            <p class="text-4xl font-bold text-blue-600">
                Rp12,5 Jt
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow">
            <h3>TPS Aktif</h3>
            <p class="text-4xl font-bold text-orange-500">
                12
            </p>
        </div>

    </div>

    <div class="bg-white rounded-2xl shadow p-6 mt-8">

        <h2 class="text-2xl font-bold mb-4">
            Statistik Bulanan
        </h2>

        <table class="w-full">

            <thead>
                <tr class="bg-green-700 text-white">
                    <th class="p-3">Bulan</th>
                    <th class="p-3">Total Sampah</th>
                    <th class="p-3">Nilai Ekonomi</th>
                </tr>
            </thead>

            <tbody>

                <tr class="border-b">
                    <td class="p-3">Januari</td>
                    <td class="p-3">450 Kg</td>
                    <td class="p-3">Rp2.100.000</td>
                </tr>

                <tr class="border-b">
                    <td class="p-3">Februari</td>
                    <td class="p-3">520 Kg</td>
                    <td class="p-3">Rp2.600.000</td>
                </tr>

                <tr class="border-b">
                    <td class="p-3">Maret</td>
                    <td class="p-3">610 Kg</td>
                    <td class="p-3">Rp3.400.000</td>
                </tr>

                <tr>
                    <td class="p-3">April</td>
                    <td class="p-3">870 Kg</td>
                    <td class="p-3">Rp4.400.000</td>
                </tr>

            </tbody>

        </table>

    </div>

    <button class="mt-6 bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-xl shadow">
        Export PDF
    </button>

</div>
```

</div>

</body>
</html>
