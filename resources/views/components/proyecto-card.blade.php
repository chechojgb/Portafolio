@props([
    'titulo' => 'Proyecto',
    'descripcion' => 'Descripción del proyecto',
    'enlace' => '#'
])

<div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 border border-gray-200 dark:border-gray-700 hover:shadow-lg transition">
    <h3 class="text-xl font-semibold mb-2">{{ $titulo }}</h3>
    <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">{{ $descripcion }}</p>
    <a href="{{ $enlace }}" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">Ver más</a>
</div>
