<section id="proyectos" class="bg-[#020617] text-white py-24 px-6 sm:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl sm:text-5xl font-extrabold bg-gradient-to-r from-cyan-400 to-blue-500 text-transparent bg-clip-text pb-4">
            Mis proyectos
        </h2>

        <div class="flex flex-col gap-16">

            <x-project-card
                pageTitle="AZZU"
                image="images/projects/nexoAgents.png"
                himagelg="70"
                himagexl="70"
                title="NexoAgents - Control y monitoreo de agentes"
                description="Sistema integral de control y monitoreo de agentes, diseñado para optimizar operaciones de atención y gestión en tiempo real. Desarrollado utilizando tecnologías modernas como Laravel y react, permitiendo interacciones fluidas, actualizaciones en vivo y una experiencia de usuario ligera y responsiva. Actualmente, más de 1,000 agentes están siendo gestionados y monitoreados activamente a través de esta plataforma, asegurando eficiencia, trazabilidad y control total en los procesos internos."
                :tags="[
                    ['name' => 'Laravel', 'class' => 'bg-red-900 text-white', 'icon' => 'images/logos/laravel.svg'],
                    ['name' => 'Tailwind CSS', 'class' => 'bg-cyan-700 text-white', 'icon' => 'images/logos/tailwind.png'],
                    ['name' => 'React', 'class' => 'bg-blue-400 text-white', 'icon' => 'images/logos/react.png']
                ]"
                
                github="https://github.com/chechojgb/AZZU"
            />

            <x-project-card
            pageTitle="eclipse"
            image="images/projects/eclipse.png"
            himagelg="70"
            himagexl="auto"
            title="Eclipse - Jogo"
            description="Videojuego de rol desarrollado en Unity, donde los jugadores pueden explorar un mundo abierto, completar misiones y enfrentarse a enemigos. El juego cuenta con un sistema de combate dinámico y una narrativa envolvente."
            :tags="[
                ['name' => 'C#', 'class' => 'bg-violet-700 text-white', 'icon' => 'images/logos/c--4.svg'],
                ['name' => 'JavaScript', 'class' => 'bg-yellow-500 text-white', 'icon' => 'images/logos/javascript.svg'],
                ['name' => 'Unity', 'class' => 'bg-gray-800 text-white' , 'icon' => 'images/logos/unity.svg'],

            ]"
            github="https://github.com/chechojgb/eclipse"

        />

            <x-project-card
            pageTitle="decroche"
            image="images/projects/decroche.png"
            himagelg="70"
            himagexl="70"
            title="DeCroche - Tienda de productos"
            description="Tienda de productos de crochet. Desarrollado con Laravel construido con varias APIs de comercio. La plataforma permite a los usuarios explorar una amplia gama de productos hechos a mano, agregar artículos al carrito y realizar compras de manera segura. Además, cuenta con un sistema de gestión de inventario y pedidos para los administradores, asegurando una experiencia fluida tanto para los clientes como para los propietarios de la tienda."
            :tags="[
                ['name' => 'Laravel', 'class' => 'bg-rose-900 text-white', 'icon' => 'images/logos/laravel.svg'],
                ['name' => 'php', 'class' => 'bg-indigo-800 text-white', 'icon' => 'images/logos/php.svg'],
                ['name' => 'JavaScript', 'class' => 'bg-yellow-500 text-white', 'icon' => 'images/logos/javascript.svg'],
            ]"
            github="https://github.com/chechojgb/laravel-DC"

        />
        </div>
    </div>
</section>