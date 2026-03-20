@extends('layouts.app')


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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
            <div class="flex flex-wrap justify-center gap-8">
                @foreach($portfolios as $portfolio)
                    @php
                        $featuredImage = $portfolio->images->where('is_featured', true)->first() ?? $portfolio->images->first();
                        $imagePath = $featuredImage ? asset('storage/' . $featuredImage->path) : 'https://placehold.co/800x600/111827/6C63FF?text=No+Image';
                    @endphp
                    <div class="w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.33%-1.5rem)] max-w-sm">
                        <x-project-card 
                            :title="$portfolio->title" 
                            :description="$portfolio->description"
                            :image="$imagePath"
                            :tags="$portfolio->techStacks->pluck('name')->toArray()"
                            :slug="$portfolio->slug"
                        />
                    </div>
                @endforeach
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
