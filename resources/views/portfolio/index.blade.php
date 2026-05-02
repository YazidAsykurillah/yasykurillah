@extends('layouts.app')

@section('content')
    <!-- Portfolio Hero -->
    <section class="min-h-[40vh] flex flex-col justify-end pt-32 pb-16 px-6 md:px-[60px] bg-light relative border-b border-[#242424]">
        <div class="max-w-[1600px] mx-auto w-full">
            <h1 class="font-heading text-5xl md:text-[7rem] leading-none tracking-tighter text-[#111111] mb-6">
                ALL PROJECTS<span class="text-[#FF6A00]">.</span>
            </h1>
            <p class="font-mono-custom text-[#A1A1A1] text-sm md:text-base max-w-2xl uppercase tracking-widest leading-loose">
                A COMPREHENSIVE ARCHIVE OF SYSTEMS, APPLICATIONS, AND DIGITAL PLATFORMS ENGINEERED FOR SCALE AND RELIABILITY.
            </p>
        </div>
    </section>

    <!-- Projects List -->
    <section class="py-24 px-6 md:px-[60px] bg-primary text-primary min-h-[50vh]">
        <div class="max-w-[1600px] mx-auto">
            <div class="flex flex-col">
                @forelse($portfolios as $portfolio)
                    <x-project-card 
                        :title="$portfolio->title" 
                        :description="$portfolio->description"
                        :tags="$portfolio->techStacks->pluck('name')->toArray()"
                        :slug="$portfolio->slug"
                        :index="$loop->iteration"
                    />
                @empty
                    <div class="py-12 font-mono-custom text-[#A1A1A1] uppercase tracking-widest text-center">
                        NO PROJECTS FOUND.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-32 px-6 md:px-[60px] bg-light text-[#111111] border-t border-[#242424] text-center">
        <div class="max-w-[1600px] mx-auto">
            <h2 class="font-heading text-4xl md:text-6xl tracking-tight mb-8">READY TO START?</h2>
            <p class="font-mono-custom text-[#111111]/70 mb-12 uppercase tracking-widest text-sm max-w-xl mx-auto">I'M CURRENTLY ACCEPTING NEW PROJECTS. LET'S DISCUSS YOUR ARCHITECTURAL NEEDS.</p>
            <a href="/#contact" class="inline-block border border-[#111111] hover:border-[#FF6A00] text-[#111111] hover:text-[#FF6A00] px-10 py-4 font-mono-custom text-xs uppercase tracking-widest transition-colors">
                INITIATE TRANSMISSION &nbsp;→
            </a>
        </div>
    </section>
@endsection
