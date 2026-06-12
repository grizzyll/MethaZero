<!DOCTYPE html>

<html>
<head>
    <title>Pekerja - METHAZERO</title>
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

        <a href="/pekerja" class="block bg-green-800 p-4 rounded-xl">
            Pekerja
        </a>

        <a href="/monitoring" class="block p-4 rounded-xl hover:bg-green-800">
            Monitoring
        </a>

        <a href="/laporan" class="block p-4 rounded-xl hover:bg-green-800">
            Laporan
        </a>

    </div>

</div>

<!-- Content -->
<div class="flex-1 p-10">

    <h1 class="text-5xl font-bold text-slate-800">
        Manajemen Pekerja
    </h1>

    <p class="text-slate-500 mt-2">
        Monitoring Petugas Pengelola Sampah
    </p>

    <div class="grid grid-cols-3 gap-6 mt-10">

        <div class="bg-white p-6 rounded-2xl shadow">
            <h3>Total Pekerja</h3>
            <p class="text-4xl font-bold text-green-600">
                15
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow">
            <h3>Sedang Bertugas</h3>
            <p class="text-4xl font-bold text-blue-600">
                12
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow">
            <h3>Libur</h3>
            <p class="text-4xl font-bold text-red-500">
                3
            </p>
        </div>

    </div>

    <div class="bg-white rounded-2xl shadow p-6 mt-8">

        <h2 class="text-2xl font-bold mb-4">
            Data Petugas
        </h2>

        <table class="w-full">

            <thead>
                <tr class="bg-green-700 text-white">
                    <th class="p-3">Nama</th>
                    <th class="p-3">Shift</th>
                    <th class="p-3">Area</th>
                    <th class="p-3">Status</th>
                </tr>
            </thead>

            <tbody>

                <tr class="border-b">
                    <td class="p-3">Andi Saputra</td>
                    <td class="p-3">Pagi</td>
                    <td class="p-3">TPS 01</td>
                    <td class="p-3 text-green-600 font-semibold">Aktif</td>
                </tr>

                <tr class="border-b">
                    <td class="p-3">Budi Santoso</td>
                    <td class="p-3">Siang</td>
                    <td class="p-3">TPS 02</td>
                    <td class="p-3 text-green-600 font-semibold">Aktif</td>
                </tr>

                <tr class="border-b">
                    <td class="p-3">Citra Lestari</td>
                    <td class="p-3">Malam</td>
                    <td class="p-3">TPS 03</td>
                    <td class="p-3 text-red-600 font-semibold">Libur</td>
                </tr>

                <tr class="border-b">
                    <td class="p-3">Dewi Anggraini</td>
                    <td class="p-3">Pagi</td>
                    <td class="p-3">TPS 04</td>
                    <td class="p-3 text-green-600 font-semibold">Aktif</td>
                </tr>

                <tr>
                    <td class="p-3">Rizky Maulana</td>
                    <td class="p-3">Siang</td>
                    <td class="p-3">TPS 05</td>
                    <td class="p-3 text-green-600 font-semibold">Aktif</td>
                </tr>

            </tbody>

        </table>

    </div>

</div>
```

</div>

</body>
</html>
