@extends('layouts.app')


@section('content')
    <!-- Portfolio Hero -->
    <section class="min-h-[40vh] flex items-center justify-center relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-4 font-heading text-[#1F2937]">
                My <span class="text-[#2563EB]">Portfolio</span>
            </h1>
            <p class="text-[#1F2937]/70 max-w-2xl mx-auto leading-relaxed">
                Exploring the digital systems and projects I've launched across the development universe.
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
    <section class="py-24 border-t border-[#1F2937]/10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold font-heading text-[#1F2937] mb-6">Need a custom system built?</h2>
            <p class="text-[#1F2937]/70 mb-10">I'm currently accepting new projects. Let's discuss your architectural needs.</p>
            <a href="/#contact" class="inline-flex justify-center items-center px-10 py-4 text-base font-bold rounded bg-[#2563EB] text-white hover:bg-[#1D4ED8] shadow-sm hover:shadow-md transition-all duration-300">
                Start Mission
            </a>
        </div>
    </section>
@endsection
