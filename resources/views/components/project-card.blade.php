@props(['image', 'title', 'description', 'tags' => [], 'github' => null, 'link' => null, 'pageTitle' => null, 'himagelg' => 'auto', 'himagexl' => 'auto'])

{{-- 
    Este componente se utiliza para mostrar información sobre un proyecto específico, incluyendo su imagen, título, descripción y enlaces a GitHub y una vista previa.

{{-- Componente de tarjeta de proyecto --}}
{{-- Este componente se utiliza para mostrar información sobre un proyecto específico, incluyendo su imagen, título, descripción y enlaces a GitHub y una vista previa. --}}

{{-- Estructura del componente --}}
{{-- Se utiliza Tailwind CSS para el diseño y la apariencia visual. --}}

<article class="flex flex-col md:flex-row gap-8 group">
    <div class="w-full md:w-1/2 ">
        <div class="relative w-full h-64 md:h-96 lg:h-104 overflow-hidden rounded-lg shadow-lg group-hover:scale-[1.02] transition-transform duration-300 border border-gray-900 bg-blue-200 sm:h-104 min-h-[310px]">
    
            {{-- Iconos de escritorio al fondo --}}
            <div class="absolute top-4 left-1 flex flex-col gap-5 text-center text-sm text-gray-800 font-semibold z-0">
                
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/desk/carpeta-mac-48.png') }}" alt="Files-mac" class="w-12 h-12">
                    <span>Proyectos</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/desk/notes_icon.svg') }}" alt="Notes-mac" class="w-12 h-12">
                    <span>Notas</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/desk/discord.png') }}" alt="Discord" class="w-12 h-12">
                    <span>Discord</span>
                </div>
            </div>
    
            {{-- Contenido de ventana navegador --}}
            <div class="px-8 py-8 relative z-10 p-30">
                <div class="overflow-hidden rounded-xl bg-gray-800 shadow-md w-full max-w-3xl mx-auto">
                    {{-- Barra navegador --}}
                    <div class="flex items-center bg-gray-800 px-5 pt-2">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        </div>
                        <div class="bg-gray-900 px-4 py-1 rounded-t-lg flex items-center gap-2 ml-2 border-b-2 border-gray-700 ml-4">
                            <i class="fas fa-code text-gray-400"></i>
                            <span class="text-sm text-gray-300 truncate">{{ $pageTitle }}</span>
                            <span class="text-gray-500 ml-2 text-sm">x</span>
                        </div>
                        <div class="pl-2 text-gray-400 text-lg">
                            +
                        </div>
                    </div>
    
                    {{-- Imagen principal --}}
                    <div class="relative overflow-hidden">
                        <img src="{{ asset($image) }}" alt="{{ $title }}"
                             class="w-full h-40 lg:h-{{$himagelg}} xl:h-{{$himagexl}} md:h-70 max-h-72 object-cover transition duration-500 group-hover:scale-105"
                             loading="lazy">
                    </div>
                </div>
            </div>
    
            {{-- Barra de tareas al fondo --}}
            <div class="absolute bottom-0 w-full h-12 bg-gray-800"></div>
            <div class="absolute bottom-0 left-0 w-full h-12 bg-gray-800 flex justify-center items-center px-4 gap-6 z-0">
                <div class="flex items-center gap-6 bg-gray-800 px-6 py-2 rounded-t-xl z-20">
                    <img src="{{ asset('images/desk/spotify.svg') }}" alt="Spotify" class="w-6 h-6">
                    <img src="{{ asset('images/desk/safari.svg') }}" alt="Safari" class="w-8 h-8 flex items-center gap-2 text-gray-400 bg-blue-200/20 rounded-lg p-1">
                    <img src="{{ asset('images/desk/visual-studio-code.svg') }}" alt="VSCode" class="w-6 h-6">
                    <img src="{{ asset('images/desk/app-store.svg') }}" alt="App Store" class="w-6 h-6">
                    <img src="{{ asset('images/desk/gmail-icon.svg') }}" alt="Gmail" class="w-6 h-6">
                </div>
            </div>
            
            
    
        </div>
    </div>
    
    
    <div class="md:w-1/2 md:max-w-lg">
        <h3 class="text-2xl font-bold text-white mb-2">{{ $title }}</h3>
        <ul class="flex flex-wrap mb-4 gap-2">
            @foreach ($tags as $tag)
                <li class="flex items-center gap-2 text-xs px-3 py-1 rounded-full {{ $tag['class'] }}">
                    @if (isset($tag['icon']))
                        <img src="{{ asset($tag['icon']) }}" alt="{{ $tag['name'] }}" class="w-6 h-6">
                    @endif
                    {{ $tag['name'] }}
                </li>
            @endforeach
        </ul>
        
        <p class="text-gray-400">{{ $description }}</p>
        <div class="flex mt-4 gap-4">
            @if ($github)
                <a href="{{ $github }}" target="_blank" class="text-white bg-gray-800 hover:bg-gray-600 px-4 py-2 rounded flex items-center gap-2">
                    <img src="{{asset('images/logos/github.svg')}}" alt="Github" class="w-6 h-6"> Código
                </a>
            @endif
            @if ($link)
                <a href="{{ $link }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-500 px-4 py-2 rounded flex items-center gap-2">
                    <i class="fas fa-external-link-alt"></i> Preview
                </a>
            @endif
        </div>
    </div>
</article>
