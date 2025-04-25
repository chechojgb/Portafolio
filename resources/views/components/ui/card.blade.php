@props([
    'titulo' => 'Proyecto',
    'descripcion' => 'Descripción del proyecto',
    'enlace' => '#',
])

<div class="bg-gray-800 text-white p-6 rounded-xl shadow-md border border-gray-700 hover:shadow-xl transition">
    <h3 class="text-xl font-bold mb-2">{{ $titulo }}</h3>
    <p class="text-sm text-gray-300 mb-4">{{ $descripcion }}</p>
    <a href="{{ $enlace }}" target="_blank" class="text-blue-400 hover:underline">Ver más</a>
</div>
