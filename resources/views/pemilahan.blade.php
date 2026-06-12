<!DOCTYPE html>
<html>
<head>
    <title>Pemilahan - METHAZERO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<div class="bg-green-600 text-white shadow-lg">
    <div class="container mx-auto px-6 py-4 flex gap-6 font-semibold">
        <a href="/" class="hover:text-green-200">🏠 Dashboard</a>
        <a href="/pemilahan" class="hover:text-green-200">♻️ Pemilahan</a>
        <a href="/monitoring" class="hover:text-green-200">📡 Monitoring</a>
        <a href="/pekerja" class="hover:text-green-200">👷 Pekerja</a>
        <a href="/laporan" class="hover:text-green-200">📊 Laporan</a>
    </div>
</div>

<div class="container mx-auto p-8">

    <h1 class="text-4xl font-bold text-green-600 mb-6">
        ♻️ Pemilahan Sampah
    </h1>

    <!-- Statistik -->
    <div class="grid md:grid-cols-2 gap-6 mb-6">

        <div class="bg-white p-6 rounded-2xl shadow-lg">
            <h2 class="font-bold text-gray-700">Sampah Logam</h2>
            <p class="text-5xl font-bold text-blue-500 mt-3">65%</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg">
            <h2 class="font-bold text-gray-700">Sampah Non-Logam</h2>
            <p class="text-5xl font-bold text-orange-500 mt-3">35%</p>
        </div>

    </div>

    <!-- Progress -->
    <div class="bg-white p-6 rounded-2xl shadow-lg mb-6">
        <h2 class="font-bold text-lg mb-4">Efektivitas Pemilahan</h2>

        <div class="w-full bg-gray-200 rounded-full h-6">
            <div class="bg-green-600 h-6 rounded-full text-center text-white"
                 style="width:85%">
                85%
            </div>
        </div>
    </div>

    <!-- Tabel -->
    <div class="bg-white p-6 rounded-2xl shadow-lg">

        <h2 class="font-bold text-lg mb-4">
            Data Sensor Pemilahan
        </h2>

        <table class="w-full border-collapse">

            <thead>
                <tr class="bg-green-600 text-white">
                    <th class="p-3">ID</th>
                    <th class="p-3">Jenis</th>
                    <th class="p-3">Berat</th>
                    <th class="p-3">Waktu</th>
                </tr>
            </thead>

            <tbody>

                <tr class="border-b">
                    <td class="p-3">001</td>
                    <td class="p-3">Logam</td>
                    <td class="p-3">12 Kg</td>
                    <td class="p-3">08:15</td>
                </tr>

                <tr class="border-b">
                    <td class="p-3">002</td>
                    <td class="p-3">Non-Logam</td>
                    <td class="p-3">8 Kg</td>
                    <td class="p-3">08:30</td>
                </tr>

                <tr class="border-b">
                    <td class="p-3">003</td>
                    <td class="p-3">Logam</td>
                    <td class="p-3">15 Kg</td>
                    <td class="p-3">09:00</td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>