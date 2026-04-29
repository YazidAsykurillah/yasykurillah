@extends('layouts.app')

@section('content')
    <!-- 1. Hero Section (Entering the Universe) -->
    <section class="min-h-[90vh] flex items-center justify-center relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center px-4 py-1.5 mb-8 text-xs font-semibold tracking-widest uppercase rounded-full border border-[#2563EB]/20 bg-[#2563EB]/5 text-[#2563EB] shadow-sm">
                <span class="relative flex h-2 w-2 mr-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#2563EB] opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-[#2563EB]"></span>
                </span>
                Full Stack Engineer
            </div>
            
            <h1 class="text-4xl md:text-6xl lg:text-6xl font-bold tracking-tight mb-8 font-heading text-[#1F2937] leading-tight">
                I Build Scalable<br class="hidden md:block" /><span class="text-[#2563EB]"> Web Applications</span> From Idea to Production.
            </h1>
            
            <p class="mt-6 text-[#1F2937]/70 max-w-2xl mx-auto leading-relaxed">
                Experienced in building business systems, dashboards, and API-driven platforms.
            </p>
            
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#projects" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 text-base font-medium rounded bg-[#2563EB] text-white hover:bg-[#1D4ED8] shadow-sm hover:shadow-md transition-all duration-300">
                    View My Work
                </a>
                <a href="{{ request()->is('/') ? '#contact' : '/#contact' }}" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 text-base font-medium rounded text-[#1F2937] bg-transparent border border-[#1F2937]/20 hover:border-[#2563EB] hover:text-[#2563EB] transition-all duration-300 group">
                    Contact Me
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 2. About Section -->
    <section id="about" class="py-24 relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card rounded-2xl p-8 md:p-12 relative overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
                    <div>
                        <h2 class="text-[#2563EB] font-semibold tracking-widest uppercase text-xs mb-3 flex items-center">
                            <span class="w-8 h-[1px] bg-[#2563EB] mr-3"></span> System Architec & Full Stack Engineer
                        </h2>
                        <h3 class="text-3xl md:text-5xl font-bold font-heading mb-6 text-[#1F2937]">About Me</h3>
                        
                        <div class="space-y-2 text-[#1F2937]/70 leading-relaxed">
                            <p>
                                Full Stack Engineer with 5+ years of experience building web applications, ERP systems, and data-driven platforms.
                            </p>
                            <p>
                                Specialized in Laravel, API integration, and real-time systems. Proven track record of improving operational efficiency, automating workflows, and delivering high-impact business solutions.
                            </p>
                            <p>
                                Experienced in end-to-end software development lifecycle (SDLC) and cross-functional collaboration.
                            </p>
                        </div>
                    </div>

                    <!-- Developer Image Element -->
                    <div class="relative flex justify-center mt-10 lg:mt-0">
                        <div class="w-64 h-64 md:w-80 md:h-80 relative flex items-center justify-center">
                            <!-- Orbit rings -->
                            <div class="absolute inset-0 border border-[#1F2937]/10 rounded-full animate-[spin_30s_linear_infinite]"></div>
                            <div class="absolute inset-4 border border-[#2563EB]/20 rounded-full animate-[spin_20s_linear_infinite_reverse]"></div>
                            <div class="absolute inset-8 border border-[#1F2937]/10 rounded-full animate-[spin_40s_linear_infinite]"></div>
                            
                            <!-- Core Profile Image -->
                            <div class="w-32 h-32 rounded-full border border-[#1F2937]/20 shadow-sm overflow-hidden relative z-10 group bg-white">
                                <img src="{{ asset('yazid-asykurillah.png') }}" alt="Yazid Asykurillah" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500 relative z-10" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 border-b border-[#1F2937]/10 pb-6">
                <h2 class="text-[#2563EB] font-semibold tracking-widest uppercase text-xs mb-3">Core Competencies</h2>
                <h3 class="text-4xl font-bold font-heading text-[#1F2937]">Services</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Web App Dev -->
                <div class="glass-card glass-card-hover transition-all duration-300 rounded-2xl p-8 relative overflow-hidden group">
                    <h4 class="text-xl font-bold font-heading mb-6 text-[#1F2937] flex items-center">
                        <svg class="w-5 h-5 mr-3 text-[#2563EB]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>
                        Web Application Development
                    </h4>
                    <p class="text-[#1F2937]/70 leading-relaxed">
                        Custom web platforms designed to support complex business workflows.
                    </p>
                </div>

                <!-- Backend System -->
                <div class="glass-card glass-card-hover transition-all duration-300 rounded-2xl p-8 relative overflow-hidden group">
                    <h4 class="text-xl font-bold font-heading mb-6 text-[#1F2937] flex items-center">
                        <svg class="w-5 h-5 mr-3 text-[#2563EB]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" /></svg>
                        Backend System Architecture
                    </h4>
                    <p class="text-[#1F2937]/70 leading-relaxed">
                        Scalable backend systems built for reliability and long-term growth.
                    </p>
                </div>

                <!-- API Dev -->
                <div class="glass-card glass-card-hover transition-all duration-300 rounded-2xl p-8 relative overflow-hidden group">
                    <h4 class="text-xl font-bold font-heading mb-6 text-[#1F2937] flex items-center">
                        <svg class="w-5 h-5 mr-3 text-[#2563EB]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" /></svg>
                        API Development & Integration
                    </h4>
                    <p class="text-[#1F2937]/70 leading-relaxed">
                        Secure APIs and seamless integrations between digital platforms.
                    </p>
                </div>

                <!-- SaaS Product -->
                <div class="glass-card glass-card-hover transition-all duration-300 rounded-2xl p-8 relative overflow-hidden group">
                    <h4 class="text-xl font-bold font-heading mb-6 text-[#1F2937] flex items-center">
                        <svg class="w-5 h-5 mr-3 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
                        SaaS Product Development
                    </h4>
                    <p class="text-[#1F2937]/70 leading-relaxed">
                        End-to-end development for modern SaaS platforms.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Tech Stack (Technology Constellation) -->
    <section id="stack" class="py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-[#2563EB] font-semibold tracking-widest uppercase text-xs mb-3">Skills</h2>
                    <h3 class="text-4xl font-bold font-heading text-[#1F2937] mb-6">Tech Stack</h3>
                    <p class="text-[#1F2937]/70 leading-relaxed mb-10">
                        Each skills orbits as its own planet in alignment with the system. Hover over any planet to pause its orbit and explore its role.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-[#2563EB] flex-shrink-0"></span>
                            <div>
                                <span class="text-[#1F2937] font-semibold text-sm">Backend</span>
                                <p class="text-[#1F2937]/60 text-xs">Laravel · Node.js · PostgreSQL· MySQL</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-[#2563EB] flex-shrink-0"></span>
                            <div>
                                <span class="text-[#1F2937] font-semibold text-sm">Frontend</span>
                                <p class="text-[#1F2937]/60 text-xs">React/Vue · Tailwind CSS · Livewire</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative flex items-center justify-center" style="height: 560px;">
                    <div class="absolute rounded-full border border-[#1F2937]/10 pointer-events-none" style="width: 480px; height: 480px;"></div>
                    <div class="absolute rounded-full border border-[#1F2937]/10 pointer-events-none" style="width: 300px; height: 300px;"></div>

                    <div class="relative z-20 flex items-center justify-center">
                        <div class="w-24 h-24 rounded-full border border-[#1F2937]/10 shadow-sm bg-[#FFFFFF] flex items-center justify-center relative z-10">
                            <img src="{{ asset('abstract-logo.png') }}" alt="Core" class="w-14 h-14 object-contain opacity-90" />
                        </div>
                    </div>

                    <div id="p-laravel" class="absolute z-10 cursor-pointer group" style="width:72px; height:72px; top:50%; left:50%; margin-top:-36px; margin-left:-36px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#FFFFFF] backdrop-blur-md border border-[#1F2937]/10 rounded-xl p-3 text-center shadow-sm">
                                <p class="text-[10px] text-[#1F2937]/70 leading-tight">Elegant backend ecosystem.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#FFFFFF] border-r border-b border-[#1F2937]/10 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 shadow-sm flex flex-col items-center justify-center hover:shadow-md hover:border-[#2563EB] transition-all duration-300">
                            <span class="text-[#1F2937] font-bold text-xs font-heading">LRV</span>
                            <span class="text-[#1F2937]/60 text-[9px] mt-0.5">Laravel</span>
                        </div>
                    </div>
                    <div id="p-node" class="absolute z-10 cursor-pointer group" style="width:72px; height:72px; top:50%; left:50%; margin-top:-36px; margin-left:-36px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#FFFFFF] backdrop-blur-md border border-[#1F2937]/10 rounded-xl p-3 text-center shadow-sm">
                                <p class="text-[10px] text-[#1F2937]/70 leading-tight">Fast and scalable real-time systems.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#FFFFFF] border-r border-b border-[#1F2937]/10 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 shadow-sm flex flex-col items-center justify-center hover:shadow-md hover:border-[#2563EB] transition-all duration-300">
                            <span class="text-[#1F2937] font-bold text-xs font-heading">NODE</span>
                            <span class="text-[#1F2937]/60 text-[9px] mt-0.5">Node.js</span>
                        </div>
                    </div>
                    <div id="p-psql" class="absolute z-10 cursor-pointer group" style="width:72px; height:72px; top:50%; left:50%; margin-top:-36px; margin-left:-36px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#FFFFFF] backdrop-blur-md border border-[#1F2937]/10 rounded-xl p-3 text-center shadow-sm">
                                <p class="text-[10px] text-[#1F2937]/70 leading-tight">Advanced relational data modeling with.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#FFFFFF] border-r border-b border-[#1F2937]/10 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 shadow-sm flex flex-col items-center justify-center hover:shadow-md hover:border-[#2563EB] transition-all duration-300">
                            <span class="text-[#1F2937] font-bold text-xs font-heading">PSQL</span>
                            <span class="text-[#1F2937]/60 text-[9px] mt-0.5">PostgreSQL</span>
                        </div>
                    </div>
                    <div id="p-mysql" class="absolute z-10 cursor-pointer group" style="width:72px; height:72px; top:50%; left:50%; margin-top:-36px; margin-left:-36px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#FFFFFF] backdrop-blur-md border border-[#1F2937]/10 rounded-xl p-3 text-center shadow-sm">
                                <p class="text-[10px] text-[#1F2937]/70 leading-tight">Reliable and high-performance data storage.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#FFFFFF] border-r border-b border-[#1F2937]/10 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 shadow-sm flex flex-col items-center justify-center hover:shadow-md hover:border-[#2563EB] transition-all duration-300">
                            <span class="text-[#1F2937] font-bold text-xs font-heading">MySQL</span>
                            <span class="text-[#1F2937]/60 text-[9px] mt-0.5">MySQL</span>
                        </div>
                    </div>

                    <div id="p-react" class="absolute z-10 cursor-pointer group" style="width:68px; height:68px; top:50%; left:50%; margin-top:-34px; margin-left:-34px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#FFFFFF] backdrop-blur-md border border-[#1F2937]/10 rounded-xl p-3 text-center shadow-sm">
                                <p class="text-[10px] text-[#1F2937]/70 leading-tight">Dynamic and reactive interfaces.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#FFFFFF] border-r border-b border-[#1F2937]/10 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 shadow-sm flex flex-col items-center justify-center hover:shadow-md hover:border-[#2563EB] transition-all duration-300">
                            <span class="text-[#1F2937] font-bold text-xs font-heading">RCT</span>
                            <span class="text-[#1F2937]/60 text-[9px] mt-0.5">React/Vue</span>
                        </div>
                    </div>
                    <div id="p-tailwind" class="absolute z-10 cursor-pointer group" style="width:68px; height:68px; top:50%; left:50%; margin-top:-34px; margin-left:-34px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#FFFFFF] backdrop-blur-md border border-[#1F2937]/10 rounded-xl p-3 text-center shadow-sm">
                                <p class="text-[10px] text-[#1F2937]/70 leading-tight">Ultra-modern designs.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#FFFFFF] border-r border-b border-[#1F2937]/10 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 shadow-sm flex flex-col items-center justify-center hover:shadow-md hover:border-[#2563EB] transition-all duration-300">
                            <span class="text-[#1F2937] font-bold text-xs font-heading">TWD</span>
                            <span class="text-[#1F2937]/60 text-[9px] mt-0.5">Tailwind</span>
                        </div>
                    </div>
                    <div id="p-livewire" class="absolute z-10 cursor-pointer group" style="width:68px; height:68px; top:50%; left:50%; margin-top:-34px; margin-left:-34px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#FFFFFF] backdrop-blur-md border border-[#1F2937]/10 rounded-xl p-3 text-center shadow-sm">
                                <p class="text-[10px] text-[#1F2937]/70 leading-tight">Bridging backend and frontend in real-time.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#FFFFFF] border-r border-b border-[#1F2937]/10 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 shadow-sm flex flex-col items-center justify-center hover:shadow-md hover:border-[#2563EB] transition-all duration-300">
                            <span class="text-[#1F2937] font-bold text-xs font-heading">LWR</span>
                            <span class="text-[#1F2937]/60 text-[9px] mt-0.5">Livewire</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Projects (Planetary System) -->
    <section id="projects" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
            <div class="text-center mb-16 border-b border-[#1F2937]/10 pb-6">
                <h2 class="text-[#2563EB] font-semibold tracking-widest uppercase text-xs mb-3">Key Project</h2>
                <h3 class="text-4xl font-bold font-heading text-[#1F2937]">Selected Portfolio</h3>
            </div>

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

            <div class="mt-16 text-center">
                <a href="/portfolio" class="inline-flex items-center px-10 py-4 text-sm font-bold tracking-widest uppercase rounded bg-transparent border-2 border-[#2563EB] text-[#2563EB] hover:bg-[#2563EB] hover:text-[#FFFFFF] shadow-sm hover:shadow-md transition-all duration-300 group">
                    Explore Full Portfolio
                    <svg class="ml-3 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. Development Process -->
    <section id="process" class="py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-[#2563EB] font-semibold tracking-widest uppercase text-xs mb-3">How I Work</h2>
                <h3 class="text-4xl font-bold font-heading text-[#1F2937]">My Workflow</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-0">
                <!-- Step 1 -->
                <div class="relative pt-6 md:pt-0">
                    <div class="hidden md:block absolute top-[28px] left-[50%] w-full h-[1px] bg-[#1F2937]/10 border-t border-dashed border-[#1F2937]/20"></div>
                    <div class="flex flex-col items-center relative z-10">
                        <div class="w-14 h-14 rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 flex items-center justify-center text-[#2563EB] mb-6 shadow-sm">
                            01
                        </div>
                        <h4 class="text-[#1F2937] font-bold font-heading mb-2">Discovery</h4>
                        <p class="text-[#1F2937]/60 text-sm text-center px-4">Collect informations and understanding user needs.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative pt-6 md:pt-0">
                    <div class="hidden md:block absolute top-[28px] left-[50%] w-full h-[1px] bg-[#1F2937]/10 border-t border-dashed border-[#1F2937]/20"></div>
                    <div class="flex flex-col items-center relative z-10">
                        <div class="w-14 h-14 rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 flex items-center justify-center text-[#2563EB] mb-6 shadow-sm">
                            02
                        </div>
                        <h4 class="text-[#1F2937] font-bold font-heading mb-2">Architecture</h4>
                        <p class="text-[#1F2937]/60 text-sm text-center px-4">Designing the system structure and topology.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative pt-6 md:pt-0">
                    <div class="hidden md:block absolute top-[28px] left-[50%] w-full h-[1px] bg-[#1F2937]/10 border-t border-dashed border-[#1F2937]/20"></div>
                    <div class="flex flex-col items-center relative z-10">
                        <div class="w-14 h-14 rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 flex items-center justify-center text-[#2563EB] mb-6 shadow-sm">
                            03
                        </div>
                        <h4 class="text-[#1F2937] font-bold font-heading mb-2">Development</h4>
                        <p class="text-[#1F2937]/60 text-sm text-center px-4">Engineering scalable features.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative pt-6 md:pt-0">
                    <div class="flex flex-col items-center relative z-10">
                        <div class="w-14 h-14 rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 flex items-center justify-center text-[#2563EB] mb-6 shadow-sm">
                            04
                        </div>
                        <h4 class="text-[#1F2937] font-bold font-heading mb-2">Optimization</h4>
                        <p class="text-[#1F2937]/60 text-sm text-center px-4">Tuning application performance for deployment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Experience Section-->
    <section class="py-24 border-t border-[#1F2937]/10 relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 relative z-10">
                <h2 class="text-[#2563EB] font-semibold tracking-widest uppercase text-xs mb-3">Experience</h2>
                <h3 class="text-4xl font-bold font-heading text-[#1F2937]">Work Experience</h3>
            </div>

            <!-- Vertical Line -->
            <div class="absolute left-1/2 -translate-x-1/2 w-[1px] h-full bg-[#1F2937]/10 hidden md:block top-[180px] bottom-24"></div>

            <div class="space-y-12">
                <!-- Item 1 (Right Side) -->
                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="hidden md:block w-[47%]"></div>
                    <div class="absolute left-1/2 -translate-x-1/2 flex items-center justify-center w-8 h-8 rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 hidden md:flex z-10">
                        <div class="w-2 h-2 rounded-full bg-[#2563EB] shadow-sm"></div>
                    </div>
                    <div class="w-full md:w-[47%]">
                        <div class="bg-[#FFFFFF] hover:bg-[#F9FAFB] transition-colors border border-[#1F2937]/10 rounded-2xl p-8">
                            <div class="text-[#2563EB] font-semibold text-sm tracking-wider uppercase mb-3">2019 - PRESENT</div>
                            <h4 class="text-[#1F2937] font-bold text-2xl mb-1">Full Stack Engineer</h4>
                            <div class="text-[#1F2937]/60 text-md mb-3">Bit Maker Automation.</div>
                            <p class="text-[#1F2937]/70 leading-relaxed">Developed web applications with Laravel framework from backend to frontend.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2 (Left Side) -->
                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="w-full md:w-[47%] text-left md:text-right order-2 md:order-1">
                        <div class="bg-[#FFFFFF] hover:bg-[#F9FAFB] transition-colors border border-[#1F2937]/10 rounded-2xl p-8 text-left">
                            <div class="text-[#2563EB] font-semibold text-sm tracking-wider uppercase mb-3 text-left">2016 - 2019</div>
                            <h4 class="text-[#1F2937] font-bold text-2xl mb-1 text-left">Web Developer</h4>
                            <div class="text-[#1F2937]/60 text-md mb-3 text-left">Prime Strategy Indonesia</div>
                            <p class="text-[#1F2937]/70 leading-relaxed text-left">Developed wordpress plugins and web application with Laravel framework.</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 -translate-x-1/2 flex items-center justify-center w-8 h-8 rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 hidden md:flex z-10 order-1 md:order-2">
                        <div class="w-2 h-2 rounded-full bg-[#2563EB] shadow-sm"></div>
                    </div>
                    <div class="hidden md:block w-[47%] order-3"></div>
                </div>

                <!-- Item 3 (Right Side) -->
                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="hidden md:block w-[47%]"></div>
                    <div class="absolute left-1/2 -translate-x-1/2 flex items-center justify-center w-8 h-8 rounded-full bg-[#FFFFFF] border border-[#1F2937]/10 hidden md:flex z-10">
                        <div class="w-2 h-2 rounded-full bg-[#2563EB] shadow-sm"></div>
                    </div>
                    <div class="w-full md:w-[47%]">
                        <div class="bg-[#FFFFFF] hover:bg-[#F9FAFB] transition-colors border border-[#1F2937]/10 rounded-2xl p-8">
                            <div class="text-[#1F2937]/50 font-semibold text-sm tracking-wider uppercase mb-3">2016</div>
                            <h4 class="text-[#1F2937] font-bold text-2xl mb-1">Junior Explorer</h4>
                            <div class="text-[#1F2937]/60 text-md mb-3"></div>
                            <p class="text-[#1F2937]/70 leading-relaxed">Began coding backend automation scripts and exploring PHP fundamentals before adopting the Laravel framework.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Contact Section (Send Transmission) -->
    <section id="contact" class="py-24 border-t border-[#1F2937]/10 relative overflow-hidden">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-4xl md:text-4xl font-bold font-heading text-[#1F2937] mb-4">Let’s Build Something Great</h2>
            <p class="text-[#1F2937]/70 mb-12">
                I’m available for freelance projects and remote opportunities. If you have an idea or need help building a system, feel free to reach out.
            </p>

            <div class="glass-card p-8 md:p-12 rounded-2xl text-left border-t border-[#1F2937]/10 shadow-sm">
                @if(session('success'))
                    <div class="mb-8 p-4 bg-[#FFFFFF] border border-[#1F2937]/20 rounded-xl text-[#2563EB] flex items-center shadow-sm">
                        <svg class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-8 p-4 bg-[#FFFFFF] border border-[#1F2937]/20 rounded-xl text-[#1F2937] shadow-sm">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}#contact" method="POST" class="space-y-6">
                    @csrf
                    <!-- Honeypot Spam Protection -->
                    <div class="hidden">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-xs font-semibold tracking-widest uppercase text-[#1F2937]/60 mb-2">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-[#FFFFFF] border @error('name') border-red-500 @else border-[#1F2937]/20 @enderror rounded px-4 py-3 text-[#1F2937] focus:outline-none focus:border-[#2563EB] focus:ring-1 focus:ring-[#2563EB] transition-colors" placeholder="Commander Shepard" required>
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-semibold tracking-widest uppercase text-[#1F2937]/60 mb-2">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-[#FFFFFF] border @error('email') border-red-500 @else border-[#1F2937]/20 @enderror rounded px-4 py-3 text-[#1F2937] focus:outline-none focus:border-[#2563EB] focus:ring-1 focus:ring-[#2563EB] transition-colors" placeholder="shepard@normandy.com" required>
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-xs font-semibold tracking-widest uppercase text-[#1F2937]/60 mb-2">Your Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full bg-[#FFFFFF] border @error('message') border-red-500 @else border-[#1F2937]/20 @enderror rounded px-4 py-3 text-[#1F2937] focus:outline-none focus:border-[#2563EB] focus:ring-1 focus:ring-[#2563EB] transition-colors resize-none" placeholder="We need to build a system that..." required>{{ old('message') }}</textarea>
                    </div>
                    
                    <button type="submit" class="w-full inline-flex justify-center items-center px-8 py-4 text-base font-bold rounded border-2 border-[#2563EB] text-[#2563EB] hover:bg-[#2563EB] hover:text-[#FFFFFF] shadow-sm hover:shadow-md transition-all duration-300 uppercase tracking-widest">
                        Contact Me
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
(function () {
    const OUTER_R = 240, INNER_R = 150;
    const OUTER_SPEED =  360 / 35; // deg/s clockwise
    const INNER_SPEED = -360 / 25; // deg/s counter-clockwise

    let outerPaused = false, innerPaused = false;
    let outerDeg = -90, innerDeg = 90;
    let lastTs = null;

    const outer = [
        { el: null, id: 'p-laravel',  offset: 0   },
        { el: null, id: 'p-node',     offset: 90  },
        { el: null, id: 'p-psql',     offset: 180 },
        { el: null, id: 'p-mysql',    offset: 270 },
    ];
    const inner = [
        { el: null, id: 'p-react',    offset: 0   },
        { el: null, id: 'p-tailwind', offset: 120 },
        { el: null, id: 'p-livewire', offset: 240 },
    ];

    function init() {
        outer.forEach(p => {
            p.el = document.getElementById(p.id);
            if (p.el) {
                p.el.addEventListener('mouseenter', () => outerPaused = true);
                p.el.addEventListener('mouseleave', () => outerPaused = false);
            }
        });
        inner.forEach(p => {
            p.el = document.getElementById(p.id);
            if (p.el) {
                p.el.addEventListener('mouseenter', () => innerPaused = true);
                p.el.addEventListener('mouseleave', () => innerPaused = false);
            }
        });
        requestAnimationFrame(tick);
    }

    function tick(ts) {
        const dt = lastTs ? Math.min((ts - lastTs) / 1000, 0.05) : 0;
        lastTs = ts;
        if (!outerPaused) outerDeg += OUTER_SPEED * dt;
        if (!innerPaused) innerDeg += INNER_SPEED * dt;
        outer.forEach(p => {
            if (!p.el) return;
            const rad = (outerDeg + p.offset) * Math.PI / 180;
            const x = OUTER_R * Math.cos(rad);
            const y = OUTER_R * Math.sin(rad);
            p.el.style.transform = `translate(${x}px, ${y}px)`;
        });
        inner.forEach(p => {
            if (!p.el) return;
            const rad = (innerDeg + p.offset) * Math.PI / 180;
            const x = INNER_R * Math.cos(rad);
            const y = INNER_R * Math.sin(rad);
            p.el.style.transform = `translate(${x}px, ${y}px)`;
        });
        requestAnimationFrame(tick);
    }
    init();
})();
</script>
@endpush
