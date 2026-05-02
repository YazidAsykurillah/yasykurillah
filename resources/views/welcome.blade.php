@extends('layouts.app')

@section('content')
    <!-- 1. Hero Section -->
    <section class="min-h-screen pt-12 pb-24 px-6 md:px-[60px] bg-light relative overflow-hidden flex flex-col justify-center">
        <div class="max-w-[1600px] mx-auto w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 items-center">
                
                <!-- Left: Huge Typography -->
                <div class="lg:col-span-7 flex flex-col justify-center">
                    <h1 class="font-heading text-[11vw] lg:text-[8rem] leading-[0.85] tracking-tighter text-[#111111] m-0 p-0">
                        FULL STACK<br/>ENGINEER
                    </h1>
                    
                    <div class="mt-12 md:mt-24 font-mono-custom text-sm text-[#111111] space-y-2 uppercase tracking-widest relative">
                        <div class="w-6 h-[2px] bg-[#FF6A00] mb-6"></div>
                        <p>Back End Development</p>
                        <p>Front End Development</p>
                    </div>
                </div>

                <!-- Right: Portrait & Metadata -->
                <div class="lg:col-span-5 flex flex-col h-full justify-center">
                    <div class="hidden lg:block mb-12 font-mono-custom text-xs text-[#111111] uppercase tracking-widest max-w-sm">
                        <p class="leading-relaxed">
                            I build scalable web application that solve real business problem.
                            <br><br>
                            Specialized in Laravel, API integration, and real-time systems
                        </p>
                    </div>
                    
                    <div class="relative w-full aspect-[4/5] max-w-md mx-auto lg:mx-0 overflow-hidden bg-[#111111]">
                        <img src="{{ asset('yazid-asykurillah.png') }}" alt="Yazid Asykurillah" class="w-full h-full object-cover grayscale opacity-90 hover:opacity-100 transition-opacity duration-500" />
                    </div>

                    <div class="mt-8 flex justify-between md:justify-start md:space-x-24 font-mono-custom text-xs text-[#111111] uppercase tracking-widest">
                        <div>
                            <p class="text-[#A1A1A1] mb-1">[ BASED IN ]</p>
                            <p>INDONESIA</p>
                        </div>
                        <div>
                            <p class="text-[#A1A1A1] mb-1">[ AVAILABLE FOR ]</p>
                            <p>REMOTE WORK</p>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="mt-24 md:mt-32 flex justify-between items-center font-mono-custom text-[10px] uppercase tracking-widest text-[#111111]">
                <a href="#projects" class="hover:text-[#FF6A00] transition-colors">SCROLL TO EXPLORE &nbsp;↓</a>
                <a href="mailto:yasykurillah@gmail.com" class="hidden md:block hover:text-[#FF6A00] transition-colors">yasykurillah@gmail.com</a>
                <p>[ &copy; {{ date('Y') }} ]</p>
            </div>
        </div>
    </section>

    <!-- 2. Selected Work -->
    <section id="projects" class="py-32 px-6 md:px-[60px] bg-primary text-primary">
        <div class="max-w-[1600px] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-24 border-b border-[#242424] pb-8">
                <div>
                    <p class="font-mono-custom text-[#FF6A00] text-sm uppercase tracking-widest mb-6">SELECTED WORK <span class="ml-2">+</span></p>
                    <h2 class="font-heading text-5xl md:text-7xl leading-none tracking-tight">BUILDING Applications<br/>THAT DRIVE IMPACT</h2>
                </div>
                <a href="/portfolio" class="font-mono-custom text-xs uppercase tracking-widest text-[#F5F5F5] hover:text-[#FF6A00] transition-colors mt-8 md:mt-0">
                    VIEW ALL PROJECTS &nbsp;→
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Decorative / Abstract visual on left -->
                <div class="hidden lg:block lg:col-span-5">
                    <div class="w-full aspect-[4/3] border border-[#242424] bg-[#151515] flex items-center justify-center p-8 relative overflow-hidden">
                        <!-- Abstract System Graphic -->
                        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white to-transparent"></div>
                        <div class="w-full h-full border border-[#242424]/50 relative">
                            <div class="absolute top-1/2 left-0 w-full h-[1px] bg-[#242424]"></div>
                            <div class="absolute top-0 left-1/2 w-[1px] h-full bg-[#242424]"></div>
                            <div class="absolute top-1/2 left-1/2 w-32 h-32 -mt-16 -ml-16 border border-[#FF6A00] rounded-full flex items-center justify-center">
                                <div class="w-2 h-2 bg-[#FF6A00] rounded-full animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects List -->
                <div class="lg:col-span-7 flex flex-col">
                    @forelse($portfolios as $portfolio)
                        <x-project-card 
                            :title="$portfolio->title" 
                            :description="$portfolio->description"
                            :tags="$portfolio->techStacks->pluck('name')->toArray()"
                            :slug="$portfolio->slug"
                            :index="$loop->iteration"
                        />
                    @empty
                        <div class="py-12 border-t border-[#242424] font-mono-custom text-[#A1A1A1] uppercase">
                            NO PROJECTS FOUND.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- 3. About & Expertise -->
    <section id="about" class="py-32 px-6 md:px-[60px] bg-light relative border-b border-[#242424]">
        <div class="max-w-[1600px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24">
                
                <!-- About Info -->
                <div class="lg:col-span-5">
                    <p class="font-mono-custom text-[#FF6A00] text-sm uppercase tracking-widest mb-6">ABOUT ME <span class="ml-2">+</span></p>
                    <h2 class="font-heading text-5xl md:text-6xl leading-[0.95] tracking-tight text-[#111111] mb-8">
                        I'M YAZID,<br/>A FULL STACK ENGINEER.
                    </h2>
                    
                    <div class="font-mono-custom text-sm text-[#111111]/80 space-y-6 leading-loose">
                        <p>
                            WITH 7+ YEARS OF EXPERIENCE, I DESIGN AND DEVELOP SCALABLE WEB APPLICATIONS, BUSINESS SYSTEMS, AND API-DRIVEN PLATFORMS USING LARAVEL AND MODERN WEB TECHNOLOGIES.
                        </p>
                        <p>
                            SPECIALIZED IN LARAVEL, API INTEGRATION, AND REAL-TIME SYSTEMS. I HAVE A PROVEN TRACK RECORD OF IMPROVING OPERATIONAL EFFICIENCY, AUTOMATING WORKFLOWS, AND DELIVERING HIGH-IMPACT BUSINESS SOLUTIONS.
                        </p>
                    </div>

                    <a href="{{ asset('resume_yazid_asykurillah.pdf') }}" download class="inline-block mt-12 font-mono-custom text-xs uppercase tracking-widest text-[#111111] hover:text-[#FF6A00] transition-colors border-b border-[#111111] hover:border-[#FF6A00] pb-1">
                        DOWNLOAD RESUME &nbsp;→
                    </a>
                </div>

                <!-- Stats & Expertise -->
                <div id="expertise" class="lg:col-span-7">
                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-[#242424] border border-[#242424]">
                        <div class="bg-light p-8 flex flex-col justify-between aspect-square">
                            <svg class="w-6 h-6 text-[#111111] mb-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            <div>
                                <div class="font-heading text-5xl text-[#111111] mb-2">7+</div>
                                <div class="font-mono-custom text-[10px] uppercase tracking-widest text-[#111111]/60">YEARS<br/>EXPERIENCE</div>
                            </div>
                        </div>
                        <div class="bg-light p-8 flex flex-col justify-between aspect-square">
                            <svg class="w-6 h-6 text-[#111111] mb-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                            <div>
                                <div class="font-heading text-5xl text-[#111111] mb-2">20+</div>
                                <div class="font-mono-custom text-[10px] uppercase tracking-widest text-[#111111]/60">PROJECTS<br/>DELIVERED</div>
                            </div>
                        </div>
                        <div class="bg-light p-8 flex flex-col justify-between aspect-square">
                            <svg class="w-6 h-6 text-[#111111] mb-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                            <div>
                                <div class="font-heading text-5xl text-[#111111] mb-2">3</div>
                                <div class="font-mono-custom text-[10px] uppercase tracking-widest text-[#111111]/60">INDUSTRY<br/>FOCUS</div>
                            </div>
                        </div>
                        <div class="bg-light p-8 flex flex-col justify-between aspect-square">
                            <svg class="w-6 h-6 text-[#111111] mb-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                            <div>
                                <div class="font-heading text-5xl text-[#111111] mb-2">10+</div>
                                <div class="font-mono-custom text-[10px] uppercase tracking-widest text-[#111111]/60">TECHNOLOGIES<br/>MASTERED</div>
                            </div>
                        </div>
                    </div>

                    <!-- Services List -->
                    <div class="mt-16 space-y-8 font-mono-custom text-sm uppercase">
                        <div class="flex flex-col md:flex-row md:justify-between border-b border-[#242424] pb-4 group">
                            <span class="text-[#111111] font-bold group-hover:text-[#FF6A00] transition-colors">01. WEB APPLICATION DEV</span>
                            <span class="text-[#111111]/60 mt-2 md:mt-0 max-w-xs md:text-right">CUSTOM PLATFORMS DESIGNED TO SUPPORT COMPLEX WORKFLOWS.</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between border-b border-[#242424] pb-4 group">
                            <span class="text-[#111111] font-bold group-hover:text-[#FF6A00] transition-colors">02. SYSTEM ARCHITECTURE</span>
                            <span class="text-[#111111]/60 mt-2 md:mt-0 max-w-xs md:text-right">SCALABLE BACKEND SYSTEMS BUILT FOR RELIABILITY.</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between border-b border-[#242424] pb-4 group">
                            <span class="text-[#111111] font-bold group-hover:text-[#FF6A00] transition-colors">03. API INTEGRATION</span>
                            <span class="text-[#111111]/60 mt-2 md:mt-0 max-w-xs md:text-right">SECURE APIS AND SEAMLESS CROSS-PLATFORM INTEGRATIONS.</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between border-b border-[#242424] pb-4 group">
                            <span class="text-[#111111] font-bold group-hover:text-[#FF6A00] transition-colors">04. SAAS PRODUCT DEV</span>
                            <span class="text-[#111111]/60 mt-2 md:mt-0 max-w-xs md:text-right">END-TO-END ENGINEERING FOR MODERN SAAS PRODUCTS.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-32 px-6 md:px-[60px] bg-primary text-primary border-b border-[#242424]">
        <div class="max-w-[1600px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24">
                <div class="lg:col-span-5">
                    <p class="font-mono-custom text-[#FF6A00] text-sm uppercase tracking-widest mb-6">SKILLS MATRIX <span class="ml-2">+</span></p>
                    <h2 class="font-heading text-5xl md:text-6xl leading-[0.95] tracking-tight text-[#F5F5F5] mb-8">
                        TECHNOLOGIES<br/>& TOOLS.
                    </h2>
                </div>
                <div class="lg:col-span-7 flex flex-col justify-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-16 font-mono-custom text-sm uppercase">
                        <!-- Category 1 -->
                        <div>
                            <div class="text-[#A1A1A1] mb-6 pb-2 border-b border-[#242424]">[ LANGUAGES & FRAMEWORKS ]</div>
                            <ul class="space-y-4 text-[#F5F5F5]">
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> PHP / LARAVEL</li>
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> JAVASCRIPT</li>
                            </ul>
                        </div>
                        <!-- Category 2 -->
                        <div>
                            <div class="text-[#A1A1A1] mb-6 pb-2 border-b border-[#242424]">[ FRONTEND ]</div>
                            <ul class="space-y-4 text-[#F5F5F5]">
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> REACT</li>
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> TAILWIND CSS / BOOTSTRAP</li>
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> JQUERY</li>
                            </ul>
                        </div>
                        <!-- Category 3 -->
                        <div>
                            <div class="text-[#A1A1A1] mb-6 pb-2 border-b border-[#242424]">[ DATABASES ]</div>
                            <ul class="space-y-4 text-[#F5F5F5]">
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> MYSQL</li>
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> POSTGRESQL</li>
                            </ul>
                        </div>
                        <!-- Category 4 -->
                        <div>
                            <div class="text-[#A1A1A1] mb-6 pb-2 border-b border-[#242424]">[ ARCHITECTURE & TOOLS ]</div>
                            <ul class="space-y-4 text-[#F5F5F5]">
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> REST APIS / WEB SERVICES</li>
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> MVC ARCHITECTURE</li>
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> REAL-TIME SYSTEMS</li>
                                <li class="flex items-center"><span class="text-[#FF6A00] mr-3">+</span> GIT VERSION CONTROL</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Contact -->
    <section id="contact" class="py-32 px-6 md:px-[60px] bg-primary text-primary relative">
        <div class="max-w-[1600px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div>
                    <h2 class="font-heading text-[5rem] md:text-[7rem] leading-[0.85] tracking-tighter mb-8">
                        LET'S BUILD<br/>SOMETHING<br/>IMPACTFUL.
                    </h2>
                </div>

                <div class="flex flex-col justify-end">
                    <div class="font-mono-custom text-sm text-[#A1A1A1] uppercase tracking-widest leading-loose mb-12 max-w-md">
                        I'M OPEN TO NEW OPPORTUNITIES AND EXCITING PROJECTS. IF YOU NEED ENGINEERING EXPERTISE, LET'S CREATE SOMETHING GREAT TOGETHER.
                    </div>
                    
                    @if(session('success'))
                        <div class="mb-8 p-4 border border-[#FF6A00] text-[#FF6A00] font-mono-custom text-xs uppercase tracking-widest">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-8 p-4 border border-red-500 text-red-500 font-mono-custom text-xs uppercase tracking-widest">
                            PLEASE CORRECT THE ERRORS BELOW.
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}#contact" method="POST" class="space-y-8 font-mono-custom text-sm">
                        @csrf
                        <div class="hidden">
                            <input type="text" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="border-b border-[#242424]">
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-transparent border-none px-0 py-3 text-primary focus:outline-none focus:border-none focus:ring-0 placeholder-[#A1A1A1] uppercase tracking-widest" placeholder="[ NAME ]" required>
                            </div>
                            <div class="border-b border-[#242424]">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-transparent border-none px-0 py-3 text-primary focus:outline-none focus:border-none focus:ring-0 placeholder-[#A1A1A1] uppercase tracking-widest" placeholder="[ EMAIL ]" required>
                            </div>
                        </div>
                        <div class="border-b border-[#242424]">
                            <textarea id="message" name="message" rows="1" class="w-full bg-transparent border-none px-0 py-3 text-primary focus:outline-none focus:border-none focus:ring-0 placeholder-[#A1A1A1] uppercase tracking-widest resize-none" placeholder="[ PROJECT DETAILS ]" required oninput="this.style.height = '';this.style.height = this.scrollHeight + 'px'">{{ old('message') }}</textarea>
                        </div>
                        
                        <button type="submit" class="font-mono-custom text-xs uppercase tracking-widest text-[#F5F5F5] hover:text-[#FF6A00] transition-colors border border-[#F5F5F5] hover:border-[#FF6A00] px-8 py-4 inline-block mt-4 bg-transparent cursor-pointer">
                            Send Message &nbsp;→
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
