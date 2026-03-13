@extends('layouts.app')

@section('title', 'Portfolio | Yazid Asykurillah')

@section('content')
    <!-- Portfolio Hero -->
    <section class="min-h-[40vh] flex items-center justify-center relative overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-[#0B0F19] rounded-[100%] blur-[80px] z-0"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-4 font-heading text-white">
                Planetary <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#00D1FF] via-[#6C63FF] to-[#00D1FF]">Portfolio</span>
            </h1>
            <p class="text-gray-400 max-w-2xl mx-auto leading-relaxed">
                Exploring the digital systems and stellar projects I've launched across the development universe.
            </p>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-project-card 
                    title="Enterprise CRM" 
                    description="A comprehensive customer relationship management platform utilized to track thousands of daily client interactions."
                    image="https://placehold.co/800x600/111827/6C63FF?text=Project+Mockup"
                    :tags="['Laravel', 'Vue SPA']"
                />

                <x-project-card 
                    title="Fintech SaaS" 
                    description="A high-frequency trading analytics dashboard delivering real-time metric visualization over WebSockets."
                    image="https://placehold.co/800x600/111827/00D1FF?text=Project+Mockup"
                    :tags="['Laravel', 'React']"
                />

                <x-project-card 
                    title="Logic Orbit" 
                    description="An open-source visualization tool for mapping complex backend dependencies and database schema relationships."
                    image="https://placehold.co/800x600/111827/FFB800?text=Logic+Orbit"
                    :tags="['TypeScript', 'D3.js', 'GraphQL']"
                />
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 border-t border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold font-heading text-white mb-6">Need a custom system built?</h2>
            <p class="text-gray-400 mb-10">I'm currently accepting new projects. Let's discuss your architectural needs.</p>
            <a href="/#contact" class="inline-flex justify-center items-center px-10 py-4 text-base font-bold rounded bg-[#6C63FF] text-white hover:bg-[#5a53e6] shadow-[0_0_20px_rgba(108,99,255,0.4)] transition-all duration-300">
                Start Mission
            </a>
        </div>
    </section>
@endsection
