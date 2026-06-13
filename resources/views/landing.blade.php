<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METHAZERO — Future of Waste Intelligence</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- GSAP for High-End Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --emerald-main: #0D9488;
            --emerald-dark: #064E3B;
            --bg-light: #F8FAFC;
        }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: var(--bg-light);
            color: #1E293B;
            overflow-x: hidden;
        }

        /* Smooth Reveal Base */
        .reveal { opacity: 0; transform: translateY(30px); }

        /* Modern Glassmorphism */
        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Premium Shadow & Hover */
        .premium-card {
            background: white;
            border-radius: 24px;
            border: 1px solid rgba(0, 0, 0, 0.04);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .premium-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 30px 60px -15px rgba(13, 148, 136, 0.2);
            border-color: var(--emerald-main);
        }

        .hero-gradient {
            background: linear-gradient(135deg, #0D9488 0%, #064E3B 100%);
            border-radius: 40px;
            position: relative;
            overflow: hidden;
        }

        /* Animated Progress Bar */
        .waste-level {
            height: 8px;
            border-radius: 10px;
            background: #E2E8F0;
            overflow: hidden;
            position: relative;
        }
        .waste-level-fill {
            position: absolute;
            height: 100%;
            background: var(--emerald-main);
            border-radius: 10px;
            width: 0%; /* Will be animated by GSAP */
        }

        /* Floating Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        .float-anim { animation: float 4s ease-in-out infinite; }

        .btn-primary {
            background: var(--emerald-main);
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px 0 rgba(13, 148, 136, 0.3);
        }
        .btn-primary:hover {
            background: var(--emerald-dark);
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(13, 148, 136, 0.4);
        }
    </style>
</head>
<body class="antialiased">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-3 nav-logo">
                <div class="w-9 h-9 hero-gradient flex items-center justify-center rounded-xl shadow-lg">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <span class="font-extrabold text-xl tracking-tight text-slate-800 uppercase">Methazero.</span>
            </div>
            <div class="hidden md:flex gap-10 font-semibold text-sm text-slate-500">
                <a href="#philosophy" class="hover:text-teal-600 transition">Philosophy</a>
                <a href="#tech" class="hover:text-teal-600 transition">Technology</a>
                <a href="#impact" class="hover:text-teal-600 transition">Impact</a>
            </div>
            <a href="{{ route('dashboard') }}" class="btn-primary px-7 py-3 rounded-full text-sm font-bold tracking-wide">
                ENTER DASHBOARD
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="hero-gradient p-12 md:p-24 shadow-2xl reveal hero-box">
                <!-- Abstract Glow -->
                <div class="absolute -top-24 -right-24 w-[400px] h-[400px] bg-white/10 rounded-full blur-[100px]"></div>
                
                <div class="max-w-3xl relative z-10">
                    <div class="inline-flex items-center gap-2 bg-white/10 px-4 py-2 rounded-full mb-8 border border-white/20 reveal">
                        <span class="w-2 h-2 bg-emerald-300 rounded-full animate-pulse"></span>
                        <span class="text-[11px] font-bold uppercase tracking-widest text-emerald-100">Live Status: AI Enabled</span>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-extrabold leading-[1.1] tracking-tight mb-8 reveal text-white">
                        Future of <br> <span class="text-emerald-300 italic">Waste Intelligence.</span>
                    </h1>
                    <p class="text-lg md:text-xl text-emerald-50/80 leading-relaxed mb-10 reveal text-white opacity-90">
                        Mengintegrasikan IoT dan AI untuk otomasi pemilahan sampah hulu yang akurat, efisien, dan transparan.
                    </p>
                    <div class="flex flex-wrap gap-5 reveal">
                        <a href="#tech" class="bg-white text-teal-900 px-8 py-4 rounded-2xl font-bold hover:shadow-xl transition-all hover:-translate-y-1">
                            Explore Solution
                        </a>
                        <div class="flex items-center gap-4 px-6 border-l border-white/20 text-white">
                            <div class="text-3xl font-bold tracking-tighter">98.4%</div>
                            <div class="text-[9px] uppercase font-bold leading-tight tracking-[0.2em] opacity-60">Success<br>Rate</div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Icon Decor -->
                <div class="absolute right-20 top-20 hidden lg:block float-anim">
                    <div class="text-[180px] opacity-20">🤖</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bento Grid Philosophy -->
    <section id="philosophy" class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid md:grid-cols-12 gap-6">
            <div class="md:col-span-7 premium-card p-12 reveal">
                <div class="w-12 h-1 bg-teal-500 mb-8 rounded-full"></div>
                <h2 class="text-4xl font-extrabold text-slate-800 mb-6 leading-tight">Eliminating <span class="text-teal-600">Methane Emissions</span> at the Source.</h2>
                <p class="text-slate-500 text-lg leading-relaxed mb-6">
                    Sektor persampahan menyumbang 56% dari total emisi gas metana nasional. Hampir 90% sampah kehilangan nilai ekonomi akibat kontaminasi organik.
                </p>
                <p class="text-slate-500 text-lg leading-relaxed">
                    MethaZero hadir dengan sensor cerdas untuk memastikan setiap material masuk ke jalur daur ulang yang tepat tanpa kontaminasi.
                </p>
            </div>
            <div class="md:col-span-5 hero-gradient p-10 flex flex-col justify-between text-white reveal">
                <div class="space-y-2">
                    <div class="text-[80px] font-black leading-none text-emerald-300">56%</div>
                    <p class="text-sm font-bold uppercase tracking-widest opacity-80">Methane Contribution</p>
                </div>
                <p class="text-sm italic opacity-60">"Data dari TPST Bantar Gebang menunjukkan urgensi pemilahan hulu segera."</p>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section id="tech" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl font-extrabold text-slate-800 mb-4">The Smart Pod System</h2>
            <p class="text-slate-400 font-bold uppercase tracking-widest text-xs">IoT Hardware & Cloud Integration</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Organic -->
            <div class="premium-card p-8 reveal tech-card">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">🍎</div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Organic Node</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8">Memisahkan sampah organik secara otomatis untuk produksi pupuk & eco-enzyme.</p>
                <div class="space-y-2">
                    <div class="flex justify-between text-[10px] font-bold text-slate-400 uppercase tracking-widest"><span>Capacity</span><span>85%</span></div>
                    <div class="waste-level"><div class="waste-level-fill" data-width="85%"></div></div>
                </div>
            </div>

            <!-- Anorganic -->
            <div class="premium-card p-8 reveal tech-card">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-4xl mb-8">📄</div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Recyclables Node</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8">Mendeteksi kertas, plastik, dan material kering lainnya tanpa kontaminasi basah.</p>
                <div class="space-y-2">
                    <div class="flex justify-between text-[10px] font-bold text-slate-400 uppercase tracking-widest"><span>Capacity</span><span>42%</span></div>
                    <div class="waste-level"><div class="waste-level-fill" data-width="42%"></div></div>
                </div>
            </div>

            <!-- Metal -->
            <div class="premium-card p-8 reveal tech-card">
                <div class="w-16 h-16 bg-amber-50 rounded-2xl flex items-center justify-center text-4xl mb-8">🥫</div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Metal Node</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8">Sensor induktif presisi tinggi untuk mengamankan material logam berharga.</p>
                <div class="space-y-2">
                    <div class="flex justify-between text-[10px] font-bold text-slate-400 uppercase tracking-widest"><span>Capacity</span><span>15%</span></div>
                    <div class="waste-level"><div class="waste-level-fill" data-width="15%"></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="impact" class="py-32 px-6">
        <div class="max-w-4xl mx-auto text-center reveal">
            <h2 class="text-5xl md:text-6xl font-extrabold text-slate-800 mb-8 leading-tight tracking-tight">Ready to start?</h2>
            <p class="text-slate-500 text-xl mb-12 leading-relaxed">
                Akses dashboard untuk memantau statistik sampah secara real-time dari unit Methazero Anda.
            </p>
            <a href="{{ route('dashboard') }}" class="btn-primary px-16 py-6 rounded-2xl text-xl font-bold inline-block">
                LAUNCH PLATFORM 🚀
            </a>
        </div>
    </section>

    <footer class="py-12 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6 text-slate-400 font-semibold text-[10px] uppercase tracking-[0.3em]">
            <p>© 2026 MethaZero — Universitas Brawijaya</p>
            <div class="flex gap-8">
                <a href="#" class="hover:text-teal-600 transition">Privacy</a>
                <a href="#" class="hover:text-teal-600 transition">Terms</a>
            </div>
        </div>
    </footer>

    <script>
        // Initialize GSAP ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // 1. Reveal Elements on Scroll
        gsap.utils.toArray('.reveal').forEach((el) => {
            gsap.to(el, {
                scrollTrigger: {
                    trigger: el,
                    start: "top 85%",
                    toggleActions: "play none none none"
                },
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power4.out"
            });
        });

        // 2. Animate Progress Bars when visible
        gsap.utils.toArray('.waste-level-fill').forEach((bar) => {
            let targetWidth = bar.getAttribute('data-width');
            gsap.to(bar, {
                scrollTrigger: {
                    trigger: bar,
                    start: "top 90%",
                },
                width: targetWidth,
                duration: 2,
                ease: "expo.out"
            });
        });

        // 3. Logo Animation on Load
        gsap.from(".nav-logo", {
            x: -50,
            opacity: 0,
            duration: 1,
            ease: "back.out(1.7)"
        });

        // 4. Tech Card Hover Stagger (Micro-interaction)
        document.querySelectorAll('.tech-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card.querySelector('.waste-level-fill'), {
                    backgroundColor: "#14B8A6",
                    duration: 0.3
                });
            });
            card.addEventListener('mouseleave', () => {
                gsap.to(card.querySelector('.waste-level-fill'), {
                    backgroundColor: "#0D9488",
                    duration: 0.3
                });
            });
        });
    </script>
</body>
</html>