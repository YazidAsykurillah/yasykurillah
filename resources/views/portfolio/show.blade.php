@extends('layouts.app')

@section('content')
    <!-- Project Detail Hero -->
    <section class="min-h-[50vh] flex flex-col justify-end pt-32 pb-16 px-6 md:px-[60px] bg-light relative border-b border-[#242424]">
        <div class="max-w-[1600px] mx-auto w-full">
            <nav class="mb-12 font-mono-custom text-[10px] uppercase tracking-widest text-[#A1A1A1]">
                <ol class="inline-flex items-center space-x-2">
                    <li><a href="/" class="hover:text-[#FF6A00] transition-colors">[ HOME ]</a></li>
                    <li>/</li>
                    <li><a href="{{ route('portfolio.index') }}" class="hover:text-[#FF6A00] transition-colors">[ PORTFOLIO ]</a></li>
                    <li>/</li>
                    <li class="text-[#111111]">[ {{ $portfolio->title }} ]</li>
                </ol>
            </nav>

            <h1 class="font-heading text-5xl md:text-[7rem] leading-none tracking-tighter text-[#111111] mb-6 uppercase">
                {{ $portfolio->title }}<span class="text-[#FF6A00]">.</span>
            </h1>
            
            <div class="flex flex-wrap gap-4 font-mono-custom text-xs uppercase tracking-widest text-[#111111]">
                @foreach($portfolio->techStacks as $stack)
                    <span class="border-b border-[#111111] pb-1">{{ $stack->name }}</span>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-24 px-6 md:px-[60px] bg-primary text-primary border-b border-[#242424]">
        <div class="max-w-[1600px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24">
                
                <!-- Project Info (Left - 8/12) -->
                <div class="lg:col-span-8 flex flex-col gap-16">
                    <div>
                        <h2 class="font-mono-custom text-[#A1A1A1] text-sm uppercase tracking-widest mb-8 pb-4 border-b border-[#242424]">
                            [ SYSTEM OVERVIEW ]
                        </h2>
                        <div class="prose prose-invert prose-sm max-w-none font-mono-custom text-[#F5F5F5]/70 leading-loose prose-headings:font-heading prose-headings:text-3xl prose-headings:text-[#F5F5F5] prose-headings:tracking-tighter prose-p:leading-loose prose-li:leading-loose prose-strong:text-[#FF6A00] prose-a:text-[#FF6A00] prose-a:no-underline prose-a:border-b prose-a:border-[#FF6A00]">
                            {!! $portfolio->description !!}
                        </div>
                    </div>

                    <!-- Project Gallery Slider -->
                    @if($portfolio->images->count() > 0)
                    <div>
                        <h2 class="font-mono-custom text-[#A1A1A1] text-sm uppercase tracking-widest mb-8 pb-4 border-b border-[#242424]">
                            [ VISUAL DOCUMENTATION ]
                        </h2>
                        
                        <div class="relative group/slider overflow-hidden border border-[#242424] bg-[#151515]">
                            <!-- Slider Container -->
                            <div id="project-slider" class="flex transition-transform duration-500 ease-out">
                                @foreach($portfolio->images as $image)
                                    <div class="min-w-full aspect-[16/9] relative p-4 md:p-8">
                                        <div class="w-full h-full border border-[#242424] relative overflow-hidden">
                                            <img src="{{ asset('storage/' . $image->path) }}" 
                                                 alt="{{ $portfolio->title }} Image" 
                                                 class="w-full h-full object-cover grayscale opacity-80 group-hover/slider:grayscale-0 group-hover/slider:opacity-100 transition-all duration-700">
                                            
                                            <!-- Technical crosshairs overlay -->
                                            <div class="absolute top-0 left-0 w-4 h-4 border-t border-l border-[#FF6A00] m-4 opacity-50"></div>
                                            <div class="absolute top-0 right-0 w-4 h-4 border-t border-r border-[#FF6A00] m-4 opacity-50"></div>
                                            <div class="absolute bottom-0 left-0 w-4 h-4 border-b border-l border-[#FF6A00] m-4 opacity-50"></div>
                                            <div class="absolute bottom-0 right-0 w-4 h-4 border-b border-r border-[#FF6A00] m-4 opacity-50"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Navigation Buttons -->
                            @if($portfolio->images->count() > 1)
                                <div class="absolute bottom-0 left-0 w-full p-4 md:p-8 flex justify-between items-end pointer-events-none">
                                    <div class="flex space-x-2 pointer-events-auto">
                                        <button id="prev-slide" class="w-10 h-10 flex items-center justify-center border border-[#242424] bg-[#0F0F0F] text-[#F5F5F5] hover:text-[#FF6A00] hover:border-[#FF6A00] transition-colors">
                                            &larr;
                                        </button>
                                        <button id="next-slide" class="w-10 h-10 flex items-center justify-center border border-[#242424] bg-[#0F0F0F] text-[#F5F5F5] hover:text-[#FF6A00] hover:border-[#FF6A00] transition-colors">
                                            &rarr;
                                        </button>
                                    </div>
                                    <div class="font-mono-custom text-[10px] text-[#A1A1A1] uppercase tracking-widest bg-[#0F0F0F] border border-[#242424] px-3 py-1 pointer-events-auto">
                                        IMG <span id="current-slide-num">1</span> / {{ $portfolio->images->count() }}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar (Right - 4/12) -->
                <div class="lg:col-span-4 flex flex-col gap-12">


                    <!-- Technological Stack -->
                    <div>
                        <h2 class="font-mono-custom text-[#A1A1A1] text-sm uppercase tracking-widest mb-8 pb-4 border-b border-[#242424]">
                            [ STACK ]
                        </h2>
                        <div class="flex flex-col gap-3 font-mono-custom text-sm uppercase text-[#F5F5F5]">
                            @foreach($portfolio->techStacks as $stack)
                                <div class="flex items-center gap-3">
                                    <span class="text-[#FF6A00]">+</span> {{ $stack->name }}
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-12">
                            <a href="/#contact" class="inline-block w-full text-center border border-[#F5F5F5] hover:border-[#FF6A00] text-[#F5F5F5] hover:text-[#FF6A00] px-8 py-4 font-mono-custom text-xs uppercase tracking-widest transition-colors">
                                REQUEST ACCESS &nbsp;→
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Footer -->
    <section class="py-12 bg-[#0F0F0F]">
        <div class="max-w-[1600px] mx-auto px-6 md:px-[60px] flex justify-between items-center font-mono-custom text-xs uppercase tracking-widest">
            <a href="{{ route('portfolio.index') }}" class="text-[#A1A1A1] hover:text-[#FF6A00] transition-colors border-b border-transparent hover:border-[#FF6A00] pb-1">
                &larr; &nbsp; RETURN TO ARCHIVE
            </a>
            
            <a href="#" class="text-[#A1A1A1] hover:text-[#FF6A00] transition-colors" onclick="window.scrollTo(0,0); return false;">
                [ BACK TO TOP ]
            </a>
        </div>
    </section>

    @if($portfolio->images->count() > 1)
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('project-slider');
            const prevBtn = document.getElementById('prev-slide');
            const nextBtn = document.getElementById('next-slide');
            const numDisplay = document.getElementById('current-slide-num');
            let currentSlide = 0;
            const slideCount = {{ $portfolio->images->count() }};

            function updateSlider() {
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                if(numDisplay) numDisplay.textContent = currentSlide + 1;
            }

            nextBtn.addEventListener('click', () => {
                currentSlide = (currentSlide + 1) % slideCount;
                updateSlider();
            });

            prevBtn.addEventListener('click', () => {
                currentSlide = (currentSlide - 1 + slideCount) % slideCount;
                updateSlider();
            });
        });
    </script>
    @endif
@endsection
