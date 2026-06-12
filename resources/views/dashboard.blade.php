<!DOCTYPE html>
<html>
<head>
    <title>METHAZERO Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

<div class="flex">

    <!-- Sidebar -->
    <div class="w-72 min-h-screen bg-green-700 text-white p-8">

        <h1 class="text-5xl font-bold mb-10">
            ♻️ METHAZERO
        </h1>

        <div class="space-y-4">

            <a href="/" class="block bg-green-800 p-4 rounded-xl">
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

            <a href="/laporan" class="block p-4 rounded-xl hover:bg-green-800">
                Laporan
            </a>

        </div>

    </div>

    <!-- Content -->
    <div class="flex-1 p-10">

        <h1 class="text-5xl font-bold text-slate-800">
            Dashboard METHAZERO
        </h1>

        <p class="text-slate-500 mt-2">
            Smart Waste Management System
        </p>

        <div class="grid grid-cols-4 gap-6 mt-10">

            <div class="bg-white p-6 rounded-2xl shadow">
                <h3>Total Sampah</h3>
                <p class="text-4xl text-green-600 font-bold">
                    255 Kg
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h3>Nilai Ekonomi</h3>
                <p class="text-4xl text-blue-600 font-bold">
                    Rp34K
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h3>TPS Aktif</h3>
                <p class="text-4xl text-orange-500 font-bold">
                    12
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h3>Status</h3>
                <p class="text-4xl text-green-600 font-bold">
                    Online
                </p>
            </div>

        </div>

    </div>

</div>

</body>
</html>