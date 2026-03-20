@extends('layouts.app')

@section('content')
    <!-- Project Detail Hero -->
    <section class="min-h-[50vh] flex items-center justify-center relative overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[#131722]/60 z-0"></div>
        
        @php
            $featuredImage = $portfolio->images->where('is_featured', true)->first() ?? $portfolio->images->first();
            $heroImage = $featuredImage ? asset('storage/' . $featuredImage->path) : 'https://placehold.co/1920x1080/111827/6C63FF?text=' . urlencode($portfolio->title);
        @endphp

        <div class="absolute inset-0 z-[-1] opacity-30">
            <img src="{{ $heroImage }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover blur-sm">
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center pt-20">
            <nav class="flex justify-center mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="text-xs font-semibold tracking-widest uppercase text-gray-400 hover:text-[#00D1FF] transition-colors">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-600 mx-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="{{ route('portfolio.index') }}" class="text-xs font-semibold tracking-widest uppercase text-gray-400 hover:text-[#00D1FF] transition-colors">Portfolio</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-600 mx-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="text-xs font-semibold tracking-widest uppercase text-[#00D1FF]">{{ $portfolio->title }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <h1 class="text-4xl md:text-7xl font-bold tracking-tight mb-6 font-heading text-white leading-tight">
                {{ $portfolio->title }}
            </h1>
            
            <div class="flex flex-wrap justify-center gap-3 mb-10">
                @foreach($portfolio->techStacks as $stack)
                    <span class="px-4 py-1.5 text-xs font-semibold tracking-wider uppercase text-[#00D1FF] border border-[#00D1FF]/30 bg-[#00D1FF]/5 rounded-full shadow-[0_0_15px_rgba(0,209,255,0.1)]">
                        {{ $stack->name }}
                    </span>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
                <!-- Project Info (Left - 2/3) -->
                <div class="lg:col-span-2 space-y-12">
                    <div class="glass-card rounded-2xl p-8 md:p-12 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-[#6C63FF]/5 blur-[60px] rounded-full"></div>
                        <h2 class="text-2xl font-bold font-heading text-white mb-8 flex items-center">
                            <span class="w-10 h-[1px] bg-[#6C63FF] mr-4"></span> Mission Briefing
                        </h2>
                        <div class="text-gray-400 prose prose-invert max-w-none leading-relaxed text-lg">
                            {!! $portfolio->description !!}
                        </div>
                    </div>

                    <!-- Project Gallery -->
                    <div class="space-y-8">
                        <h2 class="text-2xl font-bold font-heading text-white pl-4 flex items-center">
                            <span class="w-10 h-[1px] bg-[#00D1FF] mr-4"></span> Visual Documentation
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach($portfolio->images as $image)
                                <div class="glass-card rounded-2xl overflow-hidden group">
                                    <div class="aspect-[16/10] overflow-hidden">
                                        <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $portfolio->title }} Image" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Sidebar (Right - 1/3) -->
                <div class="space-y-8">
                    <!-- Project Stats -->
                    <div class="glass-card rounded-2xl p-8 border-t border-[#00D1FF]/30">
                        <h3 class="text-white font-bold font-heading mb-6 uppercase tracking-widest text-sm">System Parameters</h3>
                        <div class="space-y-6">
                            <div>
                                <span class="text-gray-500 text-xs font-semibold tracking-widest uppercase block mb-1">Status</span>
                                <span class="text-white flex items-center">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2 shadow-[0_0_8px_#22c55e]"></span>
                                    Deployed in Orbit
                                </span>
                            </div>
                            <div>
                                <span class="text-gray-500 text-xs font-semibold tracking-widest uppercase block mb-1">Deployment Date</span>
                                <span class="text-white">{{ $portfolio->created_at->format('M Y') }}</span>
                            </div>
                            <div>
                                <span class="text-gray-500 text-xs font-semibold tracking-widest uppercase block mb-1">Architecture</span>
                                <span class="text-white">Scalable Cloud Core</span>
                            </div>
                        </div>
                        
                        <div class="mt-10">
                            <a href="#contact" class="w-full inline-flex justify-center items-center px-6 py-4 text-sm font-bold rounded bg-transparent border border-[#6C63FF] text-white hover:bg-[#6C63FF] transition-all duration-300 uppercase tracking-widest shadow-[0_0_15px_rgba(108,99,255,0.2)]">
                                Request Access
                            </a>
                        </div>
                    </div>

                    <!-- Technology Constellation -->
                    <div class="glass-card rounded-2xl p-8 border-t border-[#6C63FF]/30">
                        <h3 class="text-white font-bold font-heading mb-6 uppercase tracking-widest text-sm">Technological Stack</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($portfolio->techStacks as $stack)
                                <span class="px-3 py-1 text-[10px] font-bold tracking-widest uppercase bg-white/5 border border-white/10 text-gray-300 rounded hover:border-[#6C63FF]/50 transition-colors">
                                    {{ $stack->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Footer -->
    <section class="py-12 border-t border-white/5 bg-[#0B0F19]/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16 flex justify-between items-center">
            <a href="{{ route('portfolio.index') }}" class="group flex items-center text-gray-400 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" /></svg>
                Return to Port
            </a>
            
            <div class="flex gap-4">
                <!-- Social or Action links can go here -->
            </div>
        </div>
    </section>
@endsection
