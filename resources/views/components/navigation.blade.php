<!-- Navigation -->
<nav class="fixed left-0 right-0 z-50 top-0 transition-all duration-300 bg-[#0B0F19]/60 backdrop-blur-md border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="font-heading font-bold text-2xl tracking-tight text-white flex items-center group">
                    <img src="{{ asset('abstract-logo.png') }}" alt="Developer Logo" class="w-8 h-8 mr-3 object-cover rounded-md shadow-[0_0_10px_rgba(108,99,255,0.4)] group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(0,209,255,0.6)] transition-all duration-300" />
                    Yazid<span class="text-gray-500 font-light">&nbsp;Asykurillah</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ request()->is('/') ? '#about' : '/#about' }}" class="text-sm font-medium text-gray-400 hover:text-white transition-colors">About</a>
                <a href="{{ request()->is('/') ? '#services' : '/#services' }}" class="text-sm font-medium text-gray-400 hover:text-white transition-colors">Services</a>
                <a href="/portfolio" class="text-sm font-medium {{ request()->is('portfolio') ? 'text-white border-b border-[#6C63FF]' : 'text-gray-400' }} hover:text-white transition-colors">Portfolio</a>
                
                <a href="{{ asset('resume_yazid_asykurillah.pdf') }}" download class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-medium transition-all duration-300 rounded border border-[#6C63FF]/50 text-white hover:bg-[#6C63FF]/10 shadow-[0_0_15px_rgba(108,99,255,0.2)] hover:shadow-[0_0_25px_rgba(108,99,255,0.4)] group">
                    Download Resume
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="ml-2 w-4 h-4 group-hover:translate-y-1 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-400 hover:text-white focus:outline-none p-2">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#0B0F19]/95 backdrop-blur-xl border-b border-white/5 absolute w-full top-20 left-0 shadow-lg origin-top transition-transform transform scale-y-0 opacity-0 relative z-40">
        <div class="px-6 pt-4 pb-8 space-y-3">
            <a href="{{ request()->is('/') ? '#about' : '/#about' }}" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-white hover:bg-[#6C63FF]/10 rounded-md transition-colors mobile-link">About</a>
            <a href="{{ request()->is('/') ? '#services' : '/#services' }}" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-white hover:bg-[#6C63FF]/10 rounded-md transition-colors mobile-link">Services</a>
            <a href="/portfolio" class="block px-4 py-3 text-base font-medium {{ request()->is('portfolio') ? 'text-white bg-[#6C63FF]/10' : 'text-gray-300' }} hover:text-white hover:bg-[#6C63FF]/10 rounded-md transition-colors mobile-link">Portfolio</a>
            <a href="{{ asset('resume_yazid_asykurillah.pdf') }}" download class="flex items-center justify-center px-4 py-3 mt-6 text-center text-base font-medium rounded border border-[#6C63FF]/50 text-white bg-[#6C63FF]/10 shadow-[0_0_15px_rgba(108,99,255,0.2)] mobile-link group">
                Download Resume
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="ml-2 w-5 h-5 group-hover:translate-y-1 transition-transform duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </a>
        </div>
    </div>
</nav>
