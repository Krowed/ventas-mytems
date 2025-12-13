<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Mytems | Selección de Almacén</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .dark .glass {
            background: rgba(24, 24, 27, 0.7);
        }

        .card-hover {
            transition: transform 0.5s ease, box-shadow 0.5s ease, background 0.5s ease;
        }

        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 60px rgba(59, 130, 246, 0.25);
            background: linear-gradient(135deg, #3b82f6, #6366f1);
        }

        .card-hover:hover .icon-box {
            transform: scale(1.3) rotate(-5deg);
            background-color: white;
            color: #3b82f6;
        }

        .icon-box {
            transition: transform 0.4s ease, background-color 0.4s ease, color 0.4s ease;
        }

        /* Animación de aparición */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Glow para iconos de fondo */
        .bg-icon {
            opacity: 0.08;
            transition: opacity 0.4s ease;
        }

        .card-hover:hover .bg-icon {
            opacity: 0.15;
        }
    </style>
</head>

<body class="bg-[#f8fafc] dark:bg-[#0f172a] text-slate-900 dark:text-zinc-100 antialiased min-h-screen">

    <!-- Fondos difuminados -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] rounded-full bg-blue-500/5 blur-[120px]"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] rounded-full bg-indigo-500/5 blur-[120px]"></div>
    </div>

    <div class="relative min-h-screen flex flex-col items-center justify-center px-4 py-12">

        <!-- Header -->
        <header class="w-full max-w-4xl text-center mb-12">
            <h1
                class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 fade-in">
                Bienvenido
            </h1>
            <p class="text-slate-500 dark:text-zinc-400 text-lg max-w-xl mx-auto font-medium fade-in" style="animation-delay:0.2s">
                Por favor, selecciona el centro operativo para iniciar tu sesión de trabajo.
            </p>
        </header>

        <!-- Main cards -->
        <main class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Almacén Central -->
            <a href="/dashboard?almacen=1"
                class="card-hover group relative glass border border-white/20 dark:border-zinc-700/30 rounded-[2rem] p-8 overflow-hidden fade-in" style="animation-delay:0.3s">
                <div class="absolute top-0 right-0 p-6 bg-icon group-hover:bg-icon transition-opacity">
                    <i class="ri-building-2-line text-8xl text-blue-200"></i>
                </div>

                <div
                    class="icon-box w-16 h-16 rounded-3xl bg-white dark:bg-zinc-800 shadow-md flex items-center justify-center text-blue-600 mb-6 border border-slate-100 dark:border-zinc-700">
                    <i class="ri-building-2-line text-2xl"></i>
                </div>

                <h3 class="text-2xl font-bold mb-2 text-white dark:text-white">Almacén Central</h3>
                <p class="text-slate-500 dark:text-zinc-400 text-sm leading-relaxed mb-6">
                    Nodo principal de distribución y control de inventario global.
                </p>

                <div class="flex items-center justify-between pt-6 border-t border-slate-100 dark:border-zinc-700/50">
                    <span class="flex items-center gap-1.5 text-xs font-semibold text-slate-400">
                        <i class="ri-map-pin-2-fill text-blue-500"></i> LIMA, PE
                    </span>
                    <span class="text-blue-600 dark:text-blue-400 font-bold text-sm flex items-center gap-1">
                        Entrar <i class="ri-arrow-right-up-line"></i>
                    </span>
                </div>
            </a>

            <!-- Almacén Norte -->
            <a href="/dashboard?almacen=2"
                class="card-hover group relative glass border border-white/20 dark:border-zinc-700/30 rounded-[2rem] p-8 overflow-hidden fade-in" style="animation-delay:0.4s">
                <div class="absolute top-0 right-0 p-6 bg-icon group-hover:bg-icon transition-opacity">
                    <i class="ri-building-4-line text-8xl text-blue-200"></i>
                </div>

                <div
                    class="icon-box w-16 h-16 rounded-3xl bg-white dark:bg-zinc-800 shadow-md flex items-center justify-center text-blue-600 mb-6 border border-slate-100 dark:border-zinc-700">
                    <i class="ri-building-4-line text-2xl"></i>
                </div>

                <h3 class="text-2xl font-bold mb-2 text-white dark:text-white">Almacén Norte</h3>
                <p class="text-slate-500 dark:text-zinc-400 text-sm leading-relaxed mb-6">
                    Gestión de logística regional y despachos de última milla.
                </p>

                <div class="flex items-center justify-between pt-6 border-t border-slate-100 dark:border-zinc-700/50">
                    <span class="flex items-center gap-1.5 text-xs font-semibold text-slate-400">
                        <i class="ri-map-pin-2-fill text-blue-500"></i> PIURA, PE
                    </span>
                    <span class="text-blue-600 dark:text-blue-400 font-bold text-sm flex items-center gap-1">
                        Entrar <i class="ri-arrow-right-up-line"></i>
                    </span>
                </div>
            </a>

            <!-- Almacén Sur -->
            <a href="/dashboard?almacen=3"
                class="card-hover group relative glass border border-white/20 dark:border-zinc-700/30 rounded-[2rem] p-8 overflow-hidden fade-in" style="animation-delay:0.5s">
                <div class="absolute top-0 right-0 p-6 bg-icon group-hover:bg-icon transition-opacity">
                    <i class="ri-building-3-line text-8xl text-blue-200"></i>
                </div>

                <div
                    class="icon-box w-16 h-16 rounded-3xl bg-white dark:bg-zinc-800 shadow-md flex items-center justify-center text-blue-600 mb-6 border border-slate-100 dark:border-zinc-700">
                    <i class="ri-building-3-line text-2xl"></i>
                </div>

                <h3 class="text-2xl font-bold mb-2 text-white dark:text-white">Almacén Sur</h3>
                <p class="text-slate-500 dark:text-zinc-400 text-sm leading-relaxed mb-6">
                    Punto estratégico para operaciones locales y soporte técnico.
                </p>

                <div class="flex items-center justify-between pt-6 border-t border-slate-100 dark:border-zinc-700/50">
                    <span class="flex items-center gap-1.5 text-xs font-semibold text-slate-400">
                        <i class="ri-map-pin-2-fill text-blue-500"></i> AREQUIPA, PE
                    </span>
                    <span class="text-blue-600 dark:text-blue-400 font-bold text-sm flex items-center gap-1">
                        Entrar <i class="ri-arrow-right-up-line"></i>
                    </span>
                </div>
            </a>

        </main>

        <!-- Footer -->
        <footer class="mt-16 text-center text-sm text-slate-500 dark:text-zinc-400 fade-in" style="animation-delay:0.6s">
            <p>
                ¿Necesitas ayuda para acceder? 
                <a href="#" class="text-blue-500 dark:text-blue-400 font-semibold hover:underline">Soporte IT</a>
            </p>
            <p class="mt-2">© 2025 Mytems. Todos los derechos reservados.</p>
        </footer>

    </div>

</body>

</html>
