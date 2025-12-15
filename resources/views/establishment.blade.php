<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Mytems CRM | Selección de Almacén</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

<style>
.card {
    transition: all .25s ease;
}
.card:hover {
    border-color: #2563eb;
}
.card.selected {
    border-color: #2563eb;
    background: #eff6ff;
    box-shadow: 0 0 0 2px rgba(37,99,235,.15);
}
</style>
</head>

<body class="bg-[#f1f5f9] text-slate-900 min-h-screen flex items-center justify-center px-4">

<div class="w-full max-w-5xl rounded-2xl border border-slate-200 px-10 py-10" style="background-color: #f9fafb;">

<header class="mb-10 text-center">
    <h1 class="text-3xl md:text-4xl font-semibold mb-2 text-slate-900">
        Seleccionar establecimiento
    </h1>
    <p class="text-slate-500 text-sm">
        ¿Tu establecimiento no aparece en la lista? Consulta con el administrador del sistema.
    </p>
</header>

<main class="flex flex-wrap justify-center gap-4">


@for ($i = 0; $i < 1; $i++)
    <!-- Almacén Norte -->
<button data-id="2"
    class="card text-left p-6 rounded-xl bg-slate-50 border border-slate-200 hover:bg-white
           min-w-[280px] max-w-[320px] w-full">

    <div class="flex items-center gap-3 mb-3">
        <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600">
            <i class="ri-building-4-line"></i>
        </div>
        <h3 class="font-semibold text-slate-900">Almacén Principal</h3>
    </div>

    <p class="text-sm text-slate-600 mb-4">
        Ventas principales
    </p>

    <span class="text-xs text-slate-500 flex items-center gap-1">
        <i class="ri-map-pin-2-fill text-blue-600"></i> Jr. Santa Ines 451, Tarapoto
    </span>
</button>
@endfor


</main>

<footer class="mt-10 flex justify-between items-center">
    <p class="text-xs text-slate-400">
        &copy; {{ date('Y') }} Mytems
    </p>

    <button id="continueBtn" disabled
        class="px-6 py-2 rounded-lg bg-blue-600 text-white text-sm font-semibold
               opacity-50 cursor-not-allowed transition">
        Continuar
    </button>
</footer>

</div>

<script>
let selected = null;
const cards = document.querySelectorAll('.card');
const btn = document.getElementById('continueBtn');

cards.forEach(card => {
    card.addEventListener('click', () => {
        cards.forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        selected = card.dataset.id;

        btn.disabled = false;
        btn.classList.remove('opacity-50','cursor-not-allowed');
    });
});

btn.addEventListener('click', () => {
    if (!selected) return;
    localStorage.setItem('almacen', selected);
    window.location.href = `/dashboard?almacen=${selected}`;
});
</script>

</body>
</html>
