@extends('layouts.app')

@section('content')
    <!-- 1. Hero Section (Entering the Universe) -->
    <section class="min-h-[90vh] flex items-center justify-center relative overflow-hidden">
        <!-- Glowing accent exactly behind the text -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-[#0B0F19] rounded-[100%] blur-[80px] z-0"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center px-4 py-1.5 mb-8 text-xs font-semibold tracking-widest uppercase rounded-full border border-[#00D1FF]/30 bg-[#00D1FF]/5 text-neon-blue shadow-[0_0_10px_rgba(0,209,255,0.2)]">
                <span class="relative flex h-2 w-2 mr-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#00D1FF] opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-[#00D1FF]"></span>
                </span>
                Full Stack Enginer
            </div>
            
            <h1 class="text-4xl md:text-6xl lg:text-6xl font-bold tracking-tight mb-8 font-heading text-white leading-tight">
                I Build Fast and Scalable<br class="hidden md:block" /><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#00D1FF] via-[#6C63FF] to-[#00D1FF] animate-gradient-x">Web Applications</span> From Idea to Production.
            </h1>
            
            <p class="mt-6 text-gray-400 max-w-2xl mx-auto leading-relaxed">
                Experienced in building business systems, dashboards, and API-driven platforms.
            </p>
            
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#projects" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 text-base font-medium rounded bg-[#6C63FF] text-white hover:bg-[#5a53e6] shadow-[0_0_20px_rgba(108,99,255,0.4)] hover:shadow-[0_0_30px_rgba(108,99,255,0.6)] transition-all duration-300">
                    View My Work
                </a>
                <a href="{{ request()->is('/') ? '#contact' : '/#contact' }}" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 text-base font-medium rounded text-white bg-transparent border border-white/20 hover:border-white/50 hover:bg-white/5 transition-all duration-300 group">
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
                <div class="absolute top-0 right-0 w-64 h-64 bg-[#6C63FF]/10 blur-[50px] rounded-full"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
                    <div>
                        <h2 class="text-[#00D1FF] font-semibold tracking-widest uppercase text-xs mb-3 flex items-center">
                            <span class="w-8 h-[1px] bg-[#00D1FF] mr-3"></span> System Architec & Full Stack Engineer
                        </h2>
                        <h3 class="text-3xl md:text-5xl font-bold font-heading mb-6 text-white">About Me</h3>
                        
                        <div class="space-y-6 text-gray-400 leading-relaxed">
                            <p>
                                I’m a Full Stack Engineer with 7+ years of experience building web applications that are not only functional, but also reliable and scalable. I enjoy turning ideas into real products whether it’s a simple website or a complex system with multiple workflows and integrations.
                            </p>
                            <p>
                                My focus is always the same: build solutions that are efficient, easy to use, and ready for real-world usage.
                            </p>
                        </div>
                    </div>

                    <!-- Developer Image Element (Abstract) -->
                    <div class="relative flex justify-center mt-10 lg:mt-0">
                        <div class="w-64 h-64 md:w-80 md:h-80 relative flex items-center justify-center">
                            <!-- Orbit rings -->
                            <div class="absolute inset-0 border border-white/10 rounded-full animate-[spin_30s_linear_infinite]"></div>
                            <div class="absolute inset-4 border border-[#00D1FF]/20 rounded-full animate-[spin_20s_linear_infinite_reverse]"></div>
                            <div class="absolute inset-8 border border-[#6C63FF]/30 rounded-full animate-[spin_40s_linear_infinite]"></div>
                            
                            <!-- Core Profile Image -->
                            <div class="w-32 h-32 rounded-full border-2 border-[#00D1FF] shadow-[0_0_30px_rgba(0,209,255,0.4)] overflow-hidden relative z-10 group bg-[#111827]">
                                <!-- A subtle color overlay to blend the image into the space theme -->
                                <div class="absolute inset-0 bg-[#6C63FF]/20 mix-blend-overlay z-20 pointer-events-none group-hover:bg-transparent transition-colors duration-500"></div>
                                <img src="{{ asset('yazid-asykurillah.png') }}" alt="Yazid Asykurillah" class="w-full h-full object-cover group-hover:scale-110 grayscale-[30%] contrast-[1.1] brightness-90 group-hover:grayscale-0 group-hover:brightness-100 transition-all duration-500 relative z-10" />
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
            <div class="text-center mb-16 border-b border-white/5 pb-6">
                <h2 class="text-[#00D1FF] font-semibold tracking-widest uppercase text-xs mb-3">Core Competencies</h2>
                <h3 class="text-4xl font-bold font-heading text-white">Services</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Web App Dev -->
                <div class="glass-card glass-card-hover transition-all duration-300 rounded-2xl p-8 relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#00D1FF] to-transparent opacity-50"></div>
                    <h4 class="text-xl font-bold font-heading mb-6 text-white flex items-center">
                        <svg class="w-5 h-5 mr-3 text-[#00D1FF]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>
                        Web Application Development
                    </h4>
                    <p class="text-gray-400 leading-relaxed">
                        Custom web platforms designed to support complex business workflows.
                    </p>
                </div>

                <!-- Backend System -->
                <div class="glass-card glass-card-hover transition-all duration-300 rounded-2xl p-8 relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#FFB800] to-transparent opacity-50"></div>
                    <h4 class="text-xl font-bold font-heading mb-6 text-white flex items-center">
                        <svg class="w-5 h-5 mr-3 text-[#FFB800]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" /></svg>
                        Backend System Architecture
                    </h4>
                    <p class="text-gray-400 leading-relaxed">
                        Scalable backend systems built for reliability and long-term growth.
                    </p>
                </div>

                <!-- API Dev -->
                <div class="glass-card glass-card-hover transition-all duration-300 rounded-2xl p-8 relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#6C63FF] to-transparent opacity-50"></div>
                    <h4 class="text-xl font-bold font-heading mb-6 text-white flex items-center">
                        <svg class="w-5 h-5 mr-3 text-[#6C63FF]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" /></svg>
                        API Development & Integration
                    </h4>
                    <p class="text-gray-400 leading-relaxed">
                        Secure APIs and seamless integrations between digital platforms.
                    </p>
                </div>

                <!-- SaaS Product -->
                <div class="glass-card glass-card-hover transition-all duration-300 rounded-2xl p-8 relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#00D1FF] to-transparent opacity-50"></div>
                    <h4 class="text-xl font-bold font-heading mb-6 text-white flex items-center">
                        <svg class="w-5 h-5 mr-3 text-[#00D1FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
                        SaaS Product Development
                    </h4>
                    <p class="text-gray-400 leading-relaxed">
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
                    <h2 class="text-[#00D1FF] font-semibold tracking-widest uppercase text-xs mb-3">Skills</h2>
                    <h3 class="text-4xl font-bold font-heading text-white mb-6">Tech Stack</h3>
                    <p class="text-gray-400 leading-relaxed mb-10">
                        Each skills orbits as its own planet in alignment with the system. Hover over any planet to pause its orbit and explore its role.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-[#FFB800] shadow-[0_0_8px_#FFB800] flex-shrink-0"></span>
                            <div>
                                <span class="text-white font-semibold text-sm">Backend</span>
                                <p class="text-gray-500 text-xs">Laravel · Node.js · PostgreSQL· MySQL</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-[#00D1FF] shadow-[0_0_8px_#00D1FF] flex-shrink-0"></span>
                            <div>
                                <span class="text-white font-semibold text-sm">Frontend</span>
                                <p class="text-gray-500 text-xs">React/Vue · Tailwind CSS · Livewire</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative flex items-center justify-center" style="height: 560px;">
                    <div class="absolute rounded-full border border-[#FFB800]/15 pointer-events-none" style="width: 480px; height: 480px;"></div>
                    <div class="absolute rounded-full border border-[#00D1FF]/15 pointer-events-none" style="width: 300px; height: 300px;"></div>

                    <div class="relative z-20 flex items-center justify-center">
                        <div class="absolute w-44 h-44 bg-[#6C63FF]/15 rounded-full blur-3xl animate-pulse"></div>
                        <div class="absolute w-32 h-32 bg-[#00D1FF]/10 rounded-full blur-2xl animate-pulse" style="animation-delay:1s;"></div>
                        <div class="w-24 h-24 rounded-full border-2 border-[#6C63FF]/70 shadow-[0_0_50px_rgba(108,99,255,0.5)] bg-[#0B0F19] flex items-center justify-center relative z-10">
                            <img src="{{ asset('abstract-logo.png') }}" alt="Core" class="w-14 h-14 object-contain opacity-90" />
                        </div>
                    </div>

                    <div id="p-laravel" class="absolute z-10 cursor-pointer group" style="width:72px; height:72px; top:50%; left:50%; margin-top:-36px; margin-left:-36px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#0B0F19]/90 backdrop-blur-md border border-[#FFB800]/30 rounded-xl p-3 text-center shadow-[0_0_30px_rgba(255,184,0,0.2)]">
                                <p class="text-[10px] text-gray-300 leading-tight">Elegant backend ecosystem.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#0B0F19] border-r border-b border-[#FFB800]/30 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#0B0F19] border-2 border-[#FFB800]/60 shadow-[0_0_20px_rgba(255,184,0,0.35)] flex flex-col items-center justify-center hover:shadow-[0_0_30px_rgba(255,184,0,0.65)] hover:border-[#FFB800] transition-all duration-300">
                            <span class="text-[#FFB800] font-bold text-xs font-heading">LRV</span>
                            <span class="text-gray-500 text-[9px] mt-0.5">Laravel</span>
                        </div>
                    </div>
                    <div id="p-node" class="absolute z-10 cursor-pointer group" style="width:72px; height:72px; top:50%; left:50%; margin-top:-36px; margin-left:-36px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#0B0F19]/90 backdrop-blur-md border border-[#FFB800]/30 rounded-xl p-3 text-center shadow-[0_0_30px_rgba(255,184,0,0.2)]">
                                <p class="text-[10px] text-gray-300 leading-tight">Fast and scalable real-time systems.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#0B0F19] border-r border-b border-[#FFB800]/30 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#0B0F19] border-2 border-[#FFB800]/60 shadow-[0_0_20px_rgba(255,184,0,0.35)] flex flex-col items-center justify-center hover:shadow-[0_0_30px_rgba(255,184,0,0.65)] hover:border-[#FFB800] transition-all duration-300">
                            <span class="text-[#FFB800] font-bold text-xs font-heading">NODE</span>
                            <span class="text-gray-500 text-[9px] mt-0.5">Node.js</span>
                        </div>
                    </div>
                    <div id="p-psql" class="absolute z-10 cursor-pointer group" style="width:72px; height:72px; top:50%; left:50%; margin-top:-36px; margin-left:-36px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#0B0F19]/90 backdrop-blur-md border border-[#FFB800]/30 rounded-xl p-3 text-center shadow-[0_0_30px_rgba(255,184,0,0.2)]">
                                <p class="text-[10px] text-gray-300 leading-tight">Advanced relational data modeling with.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#0B0F19] border-r border-b border-[#FFB800]/30 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#0B0F19] border-2 border-[#FFB800]/60 shadow-[0_0_20px_rgba(255,184,0,0.35)] flex flex-col items-center justify-center hover:shadow-[0_0_30px_rgba(255,184,0,0.65)] hover:border-[#FFB800] transition-all duration-300">
                            <span class="text-[#FFB800] font-bold text-xs font-heading">PSQL</span>
                            <span class="text-gray-500 text-[9px] mt-0.5">PostgreSQL</span>
                        </div>
                    </div>
                    <div id="p-mysql" class="absolute z-10 cursor-pointer group" style="width:72px; height:72px; top:50%; left:50%; margin-top:-36px; margin-left:-36px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#0B0F19]/90 backdrop-blur-md border border-[#FFB800]/30 rounded-xl p-3 text-center shadow-[0_0_30px_rgba(255,184,0,0.2)]">
                                <p class="text-[10px] text-gray-300 leading-tight">Reliable and high-performance data storage.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#0B0F19] border-r border-b border-[#FFB800]/30 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#0B0F19] border-2 border-[#FFB800]/60 shadow-[0_0_20px_rgba(255,184,0,0.35)] flex flex-col items-center justify-center hover:shadow-[0_0_30px_rgba(255,184,0,0.65)] hover:border-[#FFB800] transition-all duration-300">
                            <span class="text-[#FFB800] font-bold text-xs font-heading">MySQL</span>
                            <span class="text-gray-500 text-[9px] mt-0.5">MySQL</span>
                        </div>
                    </div>

                    <div id="p-react" class="absolute z-10 cursor-pointer group" style="width:68px; height:68px; top:50%; left:50%; margin-top:-34px; margin-left:-34px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#0B0F19]/90 backdrop-blur-md border border-[#00D1FF]/30 rounded-xl p-3 text-center shadow-[0_0_30px_rgba(0,209,255,0.2)]">
                                <p class="text-[10px] text-gray-300 leading-tight">Dynamic and reactive interfaces.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#0B0F19] border-r border-b border-[#00D1FF]/30 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#0B0F19] border-2 border-[#00D1FF]/60 shadow-[0_0_20px_rgba(0,209,255,0.35)] flex flex-col items-center justify-center hover:shadow-[0_0_30px_rgba(0,209,255,0.65)] hover:border-[#00D1FF] transition-all duration-300">
                            <span class="text-[#00D1FF] font-bold text-xs font-heading">RCT</span>
                            <span class="text-gray-500 text-[9px] mt-0.5">React/Vue</span>
                        </div>
                    </div>
                    <div id="p-tailwind" class="absolute z-10 cursor-pointer group" style="width:68px; height:68px; top:50%; left:50%; margin-top:-34px; margin-left:-34px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#0B0F19]/90 backdrop-blur-md border border-[#00D1FF]/30 rounded-xl p-3 text-center shadow-[0_0_30px_rgba(0,209,255,0.2)]">
                                <p class="text-[10px] text-gray-300 leading-tight">Ultra-modern designs.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#0B0F19] border-r border-b border-[#00D1FF]/30 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#0B0F19] border-2 border-[#00D1FF]/60 shadow-[0_0_20px_rgba(0,209,255,0.35)] flex flex-col items-center justify-center hover:shadow-[0_0_30px_rgba(0,209,255,0.65)] hover:border-[#00D1FF] transition-all duration-300">
                            <span class="text-[#00D1FF] font-bold text-xs font-heading">TWD</span>
                            <span class="text-gray-500 text-[9px] mt-0.5">Tailwind</span>
                        </div>
                    </div>
                    <div id="p-livewire" class="absolute z-10 cursor-pointer group" style="width:68px; height:68px; top:50%; left:50%; margin-top:-34px; margin-left:-34px;">
                        <!-- Popup -->
                        <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-40 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-20 group-hover:-top-20">
                            <div class="bg-[#0B0F19]/90 backdrop-blur-md border border-[#00D1FF]/30 rounded-xl p-3 text-center shadow-[0_0_30px_rgba(0,209,255,0.2)]">
                                <p class="text-[10px] text-gray-300 leading-tight">Bridging backend and frontend in real-time.</p>
                            </div>
                            <div class="w-2 h-2 bg-[#0B0F19] border-r border-b border-[#00D1FF]/30 rotate-45 absolute -bottom-1 left-1/2 -translate-x-1/2"></div>
                        </div>
                        <div class="w-full h-full rounded-full bg-[#0B0F19] border-2 border-[#00D1FF]/60 shadow-[0_0_20px_rgba(0,209,255,0.35)] flex flex-col items-center justify-center hover:shadow-[0_0_30_#00D1FF/60] hover:border-[#00D1FF] transition-all duration-300">
                            <span class="text-[#00D1FF] font-bold text-xs font-heading">LWR</span>
                            <span class="text-gray-500 text-[9px] mt-0.5">Livewire</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Projects (Planetary System) -->
    <section id="projects" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
            <div class="text-center mb-16 border-b border-white/5 pb-6">
                <h2 class="text-[#00D1FF] font-semibold tracking-widest uppercase text-xs mb-3">Key Project</h2>
                <h3 class="text-4xl font-bold font-heading text-white">Selected Portfolio</h3>
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
                <a href="/portfolio" class="inline-flex items-center px-10 py-4 text-sm font-bold tracking-widest uppercase rounded bg-transparent border-2 border-[#00D1FF] text-[#00D1FF] hover:bg-[#00D1FF] hover:text-[#0B0F19] shadow-[0_0_15px_rgba(0,209,255,0.2)] hover:shadow-[0_0_30px_rgba(0,209,255,0.4)] transition-all duration-300 group">
                    Explore Full Portfolio
                    <svg class="ml-3 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. Development Process (Mission Control) -->
    <section id="process" class="py-24 relative overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[#1A1F2E]/80 rounded-full blur-[100px] z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-[#FFB800] font-semibold tracking-widest uppercase text-xs mb-3">How I Work</h2>
                <h3 class="text-4xl font-bold font-heading text-white">My Workflow</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-0">
                <!-- Step 1 -->
                <div class="relative pt-6 md:pt-0">
                    <div class="hidden md:block absolute top-[28px] left-[50%] w-full h-[1px] bg-white/10 border-t border-dashed border-white/20"></div>
                    <div class="flex flex-col items-center relative z-10">
                        <div class="w-14 h-14 rounded-full bg-[#0B0F19] border border-[#6C63FF]/50 flex items-center justify-center text-[#6C63FF] mb-6 shadow-[0_0_15px_rgba(108,99,255,0.2)]">
                            01
                        </div>
                        <h4 class="text-white font-bold font-heading mb-2">Discovery</h4>
                        <p class="text-gray-500 text-sm text-center px-4">Scanning parameters and understanding user needs.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative pt-6 md:pt-0">
                    <div class="hidden md:block absolute top-[28px] left-[50%] w-full h-[1px] bg-white/10 border-t border-dashed border-white/20"></div>
                    <div class="flex flex-col items-center relative z-10">
                        <div class="w-14 h-14 rounded-full bg-[#0B0F19] border border-[#00D1FF]/50 flex items-center justify-center text-[#00D1FF] mb-6 shadow-[0_0_15px_rgba(0,209,255,0.2)]">
                            02
                        </div>
                        <h4 class="text-white font-bold font-heading mb-2">Architecture</h4>
                        <p class="text-gray-500 text-sm text-center px-4">Designing the robust system structure and topology.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative pt-6 md:pt-0">
                    <div class="hidden md:block absolute top-[28px] left-[50%] w-full h-[1px] bg-white/10 border-t border-dashed border-white/20"></div>
                    <div class="flex flex-col items-center relative z-10">
                        <div class="w-14 h-14 rounded-full bg-[#0B0F19] border border-[#FFB800]/50 flex items-center justify-center text-[#FFB800] mb-6 shadow-[0_0_15px_rgba(255,184,0,0.2)]">
                            03
                        </div>
                        <h4 class="text-white font-bold font-heading mb-2">Development</h4>
                        <p class="text-gray-500 text-sm text-center px-4">Engineering scalable features in isolation.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative pt-6 md:pt-0">
                    <div class="flex flex-col items-center relative z-10">
                        <div class="w-14 h-14 rounded-full bg-[#0B0F19] border border-white/50 flex items-center justify-center text-white mb-6 shadow-[0_0_15px_rgba(255,255,255,0.1)]">
                            04
                        </div>
                        <h4 class="text-white font-bold font-heading mb-2">Optimization</h4>
                        <p class="text-gray-500 text-sm text-center px-4">Tuning application performance for orbital deployment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Experience (Exploration Timeline) -->
    <section class="py-24 border-t border-white/5 relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 relative z-10">
                <h2 class="text-[#6C63FF] font-semibold tracking-widest uppercase text-xs mb-3">Experience</h2>
                <h3 class="text-4xl font-bold font-heading text-white">Work Experience</h3>
            </div>

            <!-- Vertical Line -->
            <div class="absolute left-1/2 -translate-x-1/2 w-[1px] h-full bg-white/5 hidden md:block top-[180px] bottom-24"></div>

            <div class="space-y-12">
                <!-- Item 1 (Right Side) -->
                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="hidden md:block w-[47%]"></div>
                    <div class="absolute left-1/2 -translate-x-1/2 flex items-center justify-center w-8 h-8 rounded-full bg-[#0B0F19] border border-white/10 hidden md:flex z-10">
                        <div class="w-2 h-2 rounded-full bg-[#6C63FF] shadow-[0_0_10px_#6C63FF]"></div>
                    </div>
                    <div class="w-full md:w-[47%]">
                        <div class="bg-[#131722] hover:bg-[#161b28] transition-colors border border-white/5 rounded-2xl p-8">
                            <div class="text-[#6C63FF] font-semibold text-sm tracking-wider uppercase mb-3">2023 - PRESENT</div>
                            <h4 class="text-white font-bold text-2xl mb-1">Senior Full Stack Developer</h4>
                            <div class="text-gray-400 text-md mb-6">Bit Maker Automation.</div>
                            <p class="text-gray-400 leading-relaxed">Leading the development team and mentoring junior developers in modern web technologies.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2 (Left Side) -->
                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="w-full md:w-[47%] text-left md:text-right order-2 md:order-1">
                        <div class="bg-[#131722] hover:bg-[#161b28] transition-colors border border-white/5 rounded-2xl p-8 text-left">
                            <div class="text-[#00D1FF] font-semibold text-sm tracking-wider uppercase mb-3 text-left">2020 - 2023</div>
                            <h4 class="text-white font-bold text-2xl mb-1 text-left">Backend Engineer</h4>
                            <div class="text-gray-400 text-md mb-6 text-left">Bit Maker Automation</div>
                            <p class="text-gray-400 leading-relaxed text-left">Architected high-performance APIs and managed complex database migrations for high-traffic ERP platforms.</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 -translate-x-1/2 flex items-center justify-center w-8 h-8 rounded-full bg-[#0B0F19] border border-white/10 hidden md:flex z-10 order-1 md:order-2">
                        <div class="w-2 h-2 rounded-full bg-[#00D1FF] shadow-[0_0_10px_#00D1FF]"></div>
                    </div>
                    <div class="hidden md:block w-[47%] order-3"></div>
                </div>

                <!-- Item 3 (Right Side) -->
                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="hidden md:block w-[47%]"></div>
                    <div class="absolute left-1/2 -translate-x-1/2 flex items-center justify-center w-8 h-8 rounded-full bg-[#0B0F19] border border-white/10 hidden md:flex z-10">
                        <div class="w-2 h-2 rounded-full bg-white shadow-[0_0_10px_rgba(255,255,255,0.5)]"></div>
                    </div>
                    <div class="w-full md:w-[47%]">
                        <div class="bg-[#131722] hover:bg-[#161b28] transition-colors border border-white/5 rounded-2xl p-8">
                            <div class="text-white/50 font-semibold text-sm tracking-wider uppercase mb-3">2019 - 2020</div>
                            <h4 class="text-white font-bold text-2xl mb-1">Junior Explorer</h4>
                            <div class="text-gray-400 text-md mb-6">Cosmic Web Agency</div>
                            <p class="text-gray-400 leading-relaxed">Began coding backend automation scripts and exploring PHP fundamentals before adopting the Laravel framework.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Contact Section (Send Transmission) -->
    <section id="contact" class="py-24 border-t border-white/5 relative overflow-hidden">
        <!-- Background nebula gradient -->
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full h-1/2 bg-gradient-to-t from-[#6C63FF]/10 to-transparent blur-[50px] z-0"></div>

        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-4xl md:text-4xl font-bold font-heading text-white mb-4">Let’s Build Something Great</h2>
            <p class="text-gray-400 mb-12">
                I’m available for freelance projects and remote opportunities. If you have an idea or need help building a system, feel free to reach out.
            </p>

            <div class="glass-card p-8 md:p-12 rounded-2xl text-left border-t border-[#6C63FF]/30 shadow-[0_-10px_40px_rgba(108,99,255,0.1)]">
                @if(session('success'))
                    <div class="mb-8 p-4 bg-green-500/10 border border-green-500/30 rounded-xl text-green-400 flex items-center shadow-[0_0_15px_rgba(34,197,94,0.1)] animate-pulse">
                        <svg class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-8 p-4 bg-red-500/10 border border-red-500/30 rounded-xl text-red-400 shadow-[0_0_15px_rgba(239,68,68,0.1)]">
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
                            <label for="name" class="block text-xs font-semibold tracking-widest uppercase text-gray-400 mb-2">Callsign (Name)</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-[#0B0F19] border @error('name') border-red-500/50 @else border-white/10 @enderror rounded px-4 py-3 text-white focus:outline-none focus:border-[#00D1FF] focus:ring-1 focus:ring-[#00D1FF] transition-colors" placeholder="Commander Shepard" required>
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-semibold tracking-widest uppercase text-gray-400 mb-2">Comms Link (Email)</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-[#0B0F19] border @error('email') border-red-500/50 @else border-white/10 @enderror rounded px-4 py-3 text-white focus:outline-none focus:border-[#00D1FF] focus:ring-1 focus:ring-[#00D1FF] transition-colors" placeholder="shepard@normandy.com" required>
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-xs font-semibold tracking-widest uppercase text-gray-400 mb-2">Transmission Details</label>
                        <textarea id="message" name="message" rows="5" class="w-full bg-[#0B0F19] border @error('message') border-red-500/50 @else border-white/10 @enderror rounded px-4 py-3 text-white focus:outline-none focus:border-[#00D1FF] focus:ring-1 focus:ring-[#00D1FF] transition-colors resize-none" placeholder="We need to build a system that..." required>{{ old('message') }}</textarea>
                    </div>
                    
                    <button type="submit" class="w-full inline-flex justify-center items-center px-8 py-4 text-base font-bold rounded bg-transparent border-2 border-[#6C63FF] text-white hover:bg-[#6C63FF] shadow-[0_0_15px_rgba(108,99,255,0.3)] hover:shadow-[0_0_30px_rgba(108,99,255,0.6)] transition-all duration-300 uppercase tracking-widest">
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
