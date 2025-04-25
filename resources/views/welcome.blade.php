@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<main class="pt-20 lg:pt-0 bg-[#020617] text-white min-h-screen relative overflow-hidden">

    {{-- Contenedor hero section--}}
    <x-hero-section></x-hero-section>

    
    

    <x-about-me-section ></x-about-me-section>

    <x-my-skills></x-my-skills>

    {{-- Proyectos --}}
    
    
    


</main>
@endsection
