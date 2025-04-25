<section id="sobre-mi" class="relative bg-[#020617] text-white py-28 px-6 lg:px-8 overflow-hidden">



    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-[minmax(0,auto)_1fr] gap-20 items-center">

        {{-- Imagen con glow --}}
        <div class="relative flex justify-center lg:justify-start sm:pl-6 md:px-12">
            <img src="{{ asset('images/yo.jpeg') }}" alt="Sergio Ortiz Garzon"
                 class="w-60 h-60 rounded-full animate-float-slow drop-shadow-xl" />
            <div class="absolute -inset-1 bg-cyan-400/20 rounded-full blur-2xl animate-ping -z-10"></div>
        </div>

        {{-- Texto descriptivo --}}
        <div class="relative space-y-6 pl-0 sm:pl-6 md:px-12 lg:pl-40">

            {{-- Fondo decorativo --}}
            <div class="absolute hidden lg:block -top-20 -left-20 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl"></div>
            <div class="absolute hidden lg:block top-40 -right-20 w-64 h-64 bg-teal-500/10 rounded-full blur-3xl"></div>
            
            <h2 class="text-4xl lg:text-5xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-500">
                Sobre mí
            </h2>

            <p class="text-lg text-gray-300 leading-relaxed">
                Soy <span class="text-cyan-300 font-semibold">Sergio Ortiz</span>, desarrollador <span class="text-blue-300 font-semibold">fullstack</span> con una profunda orientación a la creación de <span class="text-emerald-300 font-semibold">soluciones digitales eficientes</span>, escalables y centradas en el usuario. Mi experiencia se ha enfocado principalmente en el ecosistema de <span class="text-blue-400 font-semibold">Laravel</span>, donde he desarrollado desde <span class="text-pink-400 font-semibold">APIs robustas</span> hasta <span class="text-pink-400 font-semibold">sistemas completos de gestión</span>.
            </p>
            
            <p class="text-lg text-gray-300 leading-relaxed mt-6">
                Me apasiona <span class="text-emerald-300 font-semibold">automatizar procesos</span>, optimizar flujos de trabajo y conectar piezas clave de software para que las soluciones no solo funcionen bien, sino que sean <span class="text-amber-300 font-semibold">sostenibles a largo plazo</span>. He trabajado en proyectos que van desde <span class="text-blue-300 font-semibold">paneles de administración personalizados</span> hasta <span class="text-blue-300 font-semibold">herramientas para centros de contacto</span>, integrando diversas tecnologías modernas en el backend y frontend.
            </p>
            
            <p class="text-lg text-gray-300 leading-relaxed mt-6">
                En el desarrollo de interfaces y experiencias de usuario, aprovecho la flexibilidad de <span class="text-cyan-400 font-semibold">TailwindCSS</span> para construir diseños limpios y responsivos, y utilizo <span class="text-indigo-400 font-semibold">Alpine.js</span> para añadir interactividad de manera ligera y eficiente, manteniendo el enfoque en el rendimiento y la claridad del proyecto.
            </p>
            
            
            

            <p class="text-lg text-gray-300 leading-relaxed">
                Me enfoco en <span class="text-emerald-300 font-semibold">eficiencia</span>, <span class="text-amber-300 font-semibold">simplicidad</span> y <span class="text-pink-300 font-semibold">escalabilidad</span>. Desde sistemas internos hasta herramientas de contacto, cada línea de código busca resolver problemas reales.
            </p>

            {{-- Mini tarjetas tipo glass --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4">
                <div class="bg-white/5 backdrop-blur-sm p-6 rounded-xl border border-cyan-400/10 hover:scale-[1.02] transition shadow-md">
                    <h3 class="text-cyan-400 font-bold mb-3">¿Qué hago?</h3>
                    <ul class="list-disc list-inside text-sm text-gray-300 space-y-1">
                        <li>Backends sólidos en Laravel</li>
                        <li>Integraciones VoIP con Asterisk</li>
                        <li>Dashboards interactivos</li>
                        <li>Automatizaciones inteligentes</li>
                    </ul>
                </div>

                <div class="bg-white/5 backdrop-blur-sm p-6 rounded-xl border border-indigo-400/10 hover:scale-[1.02] transition shadow-md">
                    <h3 class="text-indigo-400 font-bold mb-3">¿Cómo lo hago?</h3>
                    <ul class="list-disc list-inside text-sm text-gray-300 space-y-1">
                        <li>Alpine.js, TailwindCSS, Python</li>
                        <li>Buenas prácticas y CI/CD</li>
                        <li>Escuchando al usuario final</li>
                        <li>Optimizando cada capa del sistema</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce flex flex-col items-center gap-2 ">
        <span class="text-gray-400 text-sm flex items-center gap-2">
            <i class="fas fa-mouse text-blue-400"></i> Skills
        </span>
        <i class="fas fa-chevron-down text-blue-400 text-xl"></i>
    </div>

</section>
