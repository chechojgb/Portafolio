<section id="tech-stack" class="relative bg-[#020617] py-20 px-6 sm:px-8 text-white overflow-hidden">
    
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-16 relative z-10">

        <div class="absolute hidden lg:block top-20 right-40 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute hidden lg:block top-40 -right-20 w-64 h-64 bg-teal-500/10 rounded-full blur-3xl"></div>
            

        {{-- Texto descriptivo --}}
        <div class="space-y-6 ">

            {{-- Fondo decorativo --}}
            <h2 class="text-4xl sm:text-5xl font-extrabold bg-gradient-to-r from-cyan-400 to-blue-500 text-transparent bg-clip-text">
                Tecnologías que uso
            </h2>
            <p class="text-lg text-gray-300 leading-relaxed">
                A lo largo de mi trayectoria he elegido herramientas que me permiten desarrollar productos <span class="text-emerald-400 font-semibold">eficientes</span>, <span class="text-amber-400 font-semibold">mantenibles</span> y <span class="text-pink-400 font-semibold">escalables</span>.
            </p>
            <p class="text-lg text-gray-400">
                Desde frameworks modernos hasta entornos de automatización, cada tecnología ha sido elegida por su solidez, comunidad y versatilidad.
            </p>
        </div>

        {{-- Logos flotando, más compactos --}}
        <div class="relative w-full h-[500px] sm:h-[400px]">
            <img src="{{ asset('images/logos/laravel.svg') }}" alt="Laravel"
                 class="absolute top-16 sm:top-20 left-1/2 transform -translate-x-1/2 grayscale transition h-14 animate-glow" style="animation-delay: 0s;">
            <img src="{{ asset('images/logos/tailwind.png') }}" alt="Tailwind"
                 class="absolute top-36 sm:top-28 left-10 sm:left-16 grayscale transition h-12 animate-glow" style="animation-delay: 2s;">
            <img src="{{ asset('images/logos/alpinejs.svg') }}" alt="Alpine.js"
                 class="absolute top-56 sm:top-40 left-1/3 grayscale transition h-12 animate-glow" style="animation-delay: 3s;">
            <img src="{{ asset('images/logos/python.svg') }}" alt="Python"
                 class="absolute top-28 sm:top-28 right-16 sm:right-20 grayscale transition h-12 animate-glow" style="animation-delay: 4s;">
            <img src="{{ asset('images/logos/git.svg') }}" alt="Git"
                 class="absolute top-76 sm:top-50 right-24 sm:right-28 grayscale transition h-12 animate-glow" style="animation-delay: 5s;">
            <img src="{{ asset('images/linux.png') }}" alt="Linux"
                 class="absolute bottom-4 sm:top-60 left-1/2 transform -translate-x-1/2 grayscale transition h-14 animate-glow" style="animation-delay: 6s;">
        </div>
        
        


    </div>
</section>

<style>
    @keyframes glow {
      0%, 100% {
        filter: grayscale(100%) brightness(1);
        opacity: 0.8;
      }
      50% {
        filter: grayscale(0%) brightness(1.6);
        opacity: 1;
      }
    }
    .animate-glow {
      animation: glow 6s ease-in-out infinite alternate;
    }
</style>
    
