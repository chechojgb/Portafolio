@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<main class="pt-20 lg:pt-0 bg-[#020617] text-white min-h-screen relative overflow-hidden">

    {{-- Fondo animado de cuadrícula o puntos (simulado aquí) --}}
    <div class="absolute inset-0 bg-gradient-to-br from-black/50 to-gray-900/50"></div>

    {{-- Contenedor principal --}}
    <section class="hero min-h-screen flex items-center relative px-4 sm:px-6 lg:px-8 z-10">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between py-12 lg:py-0">

            {{-- Columna izquierda (Texto) --}}
            <div class="w-full lg:w-1/2 mb-12 lg:mb-0 relative">
                
                {{-- Blurs decorativos --}}
                <div class="absolute hidden lg:block -top-20 -left-20 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl"></div>
                <div class="absolute hidden lg:block top-40 -right-20 w-64 h-64 bg-teal-500/10 rounded-full blur-3xl"></div>

                {{-- Badge de bienvenida --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 mb-8 animate-fadeInDown">
                    <div class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></div>
                    <span class="text-gray-300 text-sm font-medium">Bienvenido a mi portafolio</span>
                </div>

                {{-- Título principal --}}
                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-8">
                    <span class="text-gray-300">Hola,</span><br/>
                    <span class="text-cyan-400">Soy Sergio Ortiz</span>
                </h1>

                {{-- Rol animado --}}
                <div class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-gradient-to-r from-blue-500/10 to-teal-500/10 border border-blue-500/20 mb-8 backdrop-blur-sm">
                    <i class="fas fa-rocket text-blue-400 animate-bounce"></i>
                    <span class="text-xl text-blue-400 font-medium">Fullstack Developer | Laravel | Asterisk</span>
                </div>

                {{-- Descripción --}}
                <p class="text-lg text-gray-300/90 leading-relaxed mb-12 max-w-xl">
                    Amante de Laravel 🚀 | Automatización Asterisk 🔧 | Construyendo soluciones de software eficientes 💻✨
                </p>

                {{-- Botones de acción --}}
                <div class="flex flex-col sm:flex-row gap-6 animate-fadeInUp">
                    <a href="#proyectos" class="group relative inline-flex items-center justify-center gap-3 bg-gradient-to-r from-blue-500 to-teal-400 p-0.5 rounded-xl hover:scale-105 transition">
                        <span class="block w-full px-8 py-4 rounded-[11px] bg-gray-900 group-hover:bg-gradient-to-r group-hover:from-blue-500 group-hover:to-teal-400">
                            <span class="flex items-center gap-2 text-white font-medium">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                            </span>
                        </span>
                    </a>
                    <a href="{{ asset('cv.pdf') }}" class="group relative inline-flex items-center justify-center gap-3 p-0.5 rounded-xl bg-gradient-to-r from-gray-800 to-gray-700 hover:scale-105 transition">
                        <span class="block w-full px-8 py-4 rounded-[11px] bg-gray-900 border border-gray-700/50 group-hover:bg-gradient-to-r group-hover:from-gray-800 group-hover:to-gray-700">
                            <span class="flex items-center gap-2 text-gray-300 group-hover:text-white font-medium">
                                <span>Get Resume</span>
                                <i class="fas fa-envelope group-hover:rotate-12 transition"></i>
                            </span>
                        </span>
                    </a>
                </div>

                {{-- Badges flotantes --}}
                <div class="hidden lg:block absolute left-24 top-10 animate-float">
                    <div class="px-4 py-2 rounded-lg bg-purple-500/10 backdrop-blur-sm border border-purple-500/20 text-purple-400">
                        <i class="fas fa-wand-magic-sparkles"></i> UI Magic
                    </div>
                </div>
                <div class="hidden lg:block absolute right-10 top-20 animate-float-slow">
                    <div class="px-4 py-2 rounded-lg bg-blue-500/10 backdrop-blur-sm border border-blue-500/20 text-blue-400">
                        <i class="fas fa-code"></i> Codigo limpio
                    </div>
                </div>
                <div class="hidden lg:block absolute left-1/2 top-72 -translate-x-1/2 animate-float">
                    <div class="px-4 py-2 rounded-lg bg-amber-500/10 backdrop-blur-sm border border-amber-500/20 text-amber-400">
                        <i class="fas fa-lightbulb"></i> Innovación
                    </div>
                </div>

            </div>

            {{-- Columna derecha (Simulación ventana de código) --}}
            <div class="w-full lg:w-1/2">
                <div class="rounded-xl overflow-hidden shadow-lg bg-[#091121]">
                    <div class="flex items-center bg-gray-800 px-4 py-2">
                        <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                        <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        <span class="ml-4 text-sm text-gray-400 flex items-center gap-2">
                            <i class="fas fa-code"></i> developer.js
                        </span>
                    </div>
                    <pre class="p-6 text-green-400 text-sm">
const profile = {
  name: 'Sergio Ortiz Garzon',
  title: 'Fullstack Developer',
  skills: ['Laravel', 'Asterisk', 'Python', 'alphine,js', 'tailwindcss'],
  passion: 'Construir algo innovador 💻✨'
}
                    </pre>
                </div>
            </div>

        </div>
    </section>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce flex flex-col items-center gap-2">
        <span class="text-gray-400 text-sm flex items-center gap-2">
            <i class="fas fa-mouse text-blue-400"></i> About me
        </span>
        <i class="fas fa-chevron-down text-blue-400 text-xl"></i>
    </div>

</main>
@endsection
