<!-- Navigation -->
<nav class="fixed left-0 right-0 z-50 top-0 transition-all duration-300 bg-[#F9FAFB]/90 backdrop-blur-md border-b border-[#1F2937]/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="font-heading font-bold text-2xl tracking-tight text-[#1F2937] flex items-center group">
                    <img src="{{ asset('abstract-logo.png') }}" alt="Developer Logo" class="w-8 h-8 mr-3 object-cover rounded-md shadow-sm group-hover:scale-110 group-hover:shadow-md transition-all duration-300" />
                    Yazid<span class="text-[#1F2937]/70 font-light">&nbsp;Asykurillah</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ request()->is('/') ? '#about' : '/#about' }}" class="text-sm font-medium text-[#1F2937]/70 hover:text-[#2563EB] transition-colors">About</a>
                <a href="{{ request()->is('/') ? '#services' : '/#services' }}" class="text-sm font-medium text-[#1F2937]/70 hover:text-[#2563EB] transition-colors">Services</a>
                <a href="/portfolio" class="text-sm font-medium {{ request()->is('portfolio') ? 'text-[#2563EB] border-b-2 border-[#2563EB]' : 'text-[#1F2937]/70' }} hover:text-[#2563EB] transition-colors">Portfolio</a>
                
                <a href="{{ asset('resume_yazid_asykurillah.pdf') }}" download class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-medium transition-all duration-300 rounded border border-[#2563EB] text-[#2563EB] hover:bg-[#2563EB] hover:text-white group">
                    Download Resume
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="ml-2 w-4 h-4 group-hover:translate-y-1 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-[#1F2937] hover:text-[#2563EB] focus:outline-none p-2">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#F9FAFB]/95 backdrop-blur-xl border-b border-[#1F2937]/10 absolute w-full top-20 left-0 shadow-lg origin-top transition-transform transform scale-y-0 opacity-0 relative z-40">
        <div class="px-6 pt-4 pb-8 space-y-3">
            <a href="{{ request()->is('/') ? '#about' : '/#about' }}" class="block px-4 py-3 text-base font-medium text-[#1F2937]/80 hover:text-[#2563EB] hover:bg-[#2563EB]/10 rounded-md transition-colors mobile-link">About</a>
            <a href="{{ request()->is('/') ? '#services' : '/#services' }}" class="block px-4 py-3 text-base font-medium text-[#1F2937]/80 hover:text-[#2563EB] hover:bg-[#2563EB]/10 rounded-md transition-colors mobile-link">Services</a>
            <a href="/portfolio" class="block px-4 py-3 text-base font-medium {{ request()->is('portfolio') ? 'text-[#2563EB] bg-[#2563EB]/10' : 'text-[#1F2937]/80' }} hover:text-[#2563EB] hover:bg-[#2563EB]/10 rounded-md transition-colors mobile-link">Portfolio</a>
            <a href="{{ asset('resume_yazid_asykurillah.pdf') }}" download class="flex items-center justify-center px-4 py-3 mt-6 text-center text-base font-medium rounded border border-[#2563EB] text-white bg-[#2563EB] shadow-sm mobile-link group">
                Download Resume
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="ml-2 w-5 h-5 group-hover:translate-y-1 transition-transform duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </a>
        </div>
    </div>
</nav>
