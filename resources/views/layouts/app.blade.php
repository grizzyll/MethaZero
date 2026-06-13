<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METHAZERO</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>

        body{
            background:#f5f7fb;
            font-family:'Segoe UI',sans-serif;
        }

        .sidebar{
            background:linear-gradient(
                180deg,
                #064E3B 0%,
                #065F46 50%,
                #022C22 100%
            );
        }

        .card{
            background:white;
            border-radius:24px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-6px);
        }

        .menu{
            transition:.3s;
        }

        .menu:hover{
            transform:translateX(8px);
            background:rgba(255,255,255,.12);
        }

    </style>

</head>

<body>

<div class="flex min-h-screen">

    <aside class="sidebar w-80 text-white p-6">

        <!-- LOGO -->

        <div class="flex flex-col items-center mb-10">

            <img
                src="{{ asset('images/methazero-logo.png') }}"
                alt="METHAZERO"
                class="w-32 h-32 bg-white rounded-3xl p-2 shadow-2xl mb-4"
            >

            <h1 class="font-black text-3xl tracking-widest text-center">
                METHAZERO
            </h1>

            <p class="text-green-200 text-center mt-2">
                Smart Waste Intelligence Platform
            </p>

        </div>

        <!-- MENU -->

        <nav class="space-y-3">

            <a href="/" class="menu block p-4 rounded-2xl">
                🏠 Dashboard
            </a>

            <a href="/pemilahan" class="menu block p-4 rounded-2xl">
                ♻️ Pemilahan Sampah
            </a>

            <a href="/pekerja" class="menu block p-4 rounded-2xl">
                👷 Manajemen Pekerja
            </a>

            <a href="/monitoring" class="menu block p-4 rounded-2xl">
                📡 Monitoring IoT
            </a>

            <a href="/laporan" class="menu block p-4 rounded-2xl">
                📄 Laporan & Analitik
            </a>

        </nav>

        <!-- STATUS -->

        <div class="mt-10 bg-white/10 rounded-3xl p-5">

            <h3 class="font-bold text-lg">
                TPS Operator
            </h3>

            <p class="text-green-200">
                ● Online
            </p>

            <div class="mt-4">

                <p class="text-sm text-green-100">
                    Sistem Aktif
                </p>

                <div class="w-full bg-white/20 rounded-full h-3 mt-2">
                    <div class="bg-green-400 h-3 rounded-full w-full"></div>
                </div>

            </div>

        </div>

        <!-- FOOTER -->

        <div class="mt-10 text-center text-xs text-green-200">

            METHAZERO v1.0

            <br>

            IoT Smart Waste Management

        </div>

    </aside>

    <!-- CONTENT -->

    <main class="flex-1 p-8">

        @yield('content')

    </main>

</div>

</body>
</html>