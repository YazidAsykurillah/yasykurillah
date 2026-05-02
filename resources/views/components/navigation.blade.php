<!-- Navigation -->
<nav id="navbar" class="fixed left-0 right-0 z-50 top-0 transition-all duration-300 bg-transparent py-8">
    <div class="max-w-[1600px] mx-auto px-6 md:px-[60px]">
        <div class="flex justify-between items-center">
            <!-- Logo area -->
            <div class="flex-shrink-0 flex flex-col">
                <a href="/" class="font-heading font-bold text-xl md:text-2xl tracking-tight text-[#111111] leading-none hover:text-[#FF6A00] transition-colors">
                    YAZID
                </a>
                <a href="/" class="font-heading font-bold text-xl md:text-2xl tracking-tight text-[#111111] leading-none hover:text-[#FF6A00] transition-colors mt-1 flex items-center gap-1">
                    ASYKURILLAH <span class="text-[#FF6A00] text-3xl leading-[0] mb-2">.</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-12 font-mono-custom text-sm font-medium text-[#111111]">
                <a href="{{ request()->is('/') ? '#about' : '/#about' }}" class="hover:text-[#FF6A00] transition-colors tracking-widest uppercase">[ ABOUT ]</a>
                <a href="{{ request()->is('/') ? '#projects' : '/#projects' }}" class="hover:text-[#FF6A00] transition-colors tracking-widest uppercase">[ WORK ]</a>
                <a href="{{ request()->is('/') ? '#expertise' : '/#expertise' }}" class="hover:text-[#FF6A00] transition-colors tracking-widest uppercase">[ EXPERTISE ]</a>
                <a href="{{ request()->is('/') ? '#contact' : '/#contact' }}" class="hover:text-[#FF6A00] transition-colors tracking-widest uppercase flex items-center gap-1">[ CONTACT ] <span class="text-[#FF6A00]">+</span></a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-[#111111] hover:text-[#FF6A00] focus:outline-none p-2 font-mono-custom tracking-widest uppercase text-sm font-bold">
                    [ MENU ]
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#0F0F0F] absolute w-full top-full left-0 origin-top transition-transform transform scale-y-0 opacity-0 relative z-40 border-t border-[#242424]">
        <div class="px-6 py-12 space-y-8 flex flex-col items-center">
            <a href="{{ request()->is('/') ? '#about' : '/#about' }}" class="block font-mono-custom text-lg tracking-widest uppercase text-[#F5F5F5] hover:text-[#FF6A00] transition-colors mobile-link">[ ABOUT ]</a>
            <a href="{{ request()->is('/') ? '#projects' : '/#projects' }}" class="block font-mono-custom text-lg tracking-widest uppercase text-[#F5F5F5] hover:text-[#FF6A00] transition-colors mobile-link">[ WORK ]</a>
            <a href="{{ request()->is('/') ? '#expertise' : '/#expertise' }}" class="block font-mono-custom text-lg tracking-widest uppercase text-[#F5F5F5] hover:text-[#FF6A00] transition-colors mobile-link">[ EXPERTISE ]</a>
            <a href="{{ request()->is('/') ? '#contact' : '/#contact' }}" class="block font-mono-custom text-lg tracking-widest uppercase text-[#F5F5F5] hover:text-[#FF6A00] transition-colors mobile-link">[ CONTACT ]</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.remove('bg-transparent', 'py-8');
                navbar.classList.add('bg-[#E8E6E1]/95', 'backdrop-blur-md', 'py-4', 'border-b', 'border-[#242424]/10');
            } else {
                navbar.classList.add('bg-transparent', 'py-8');
                navbar.classList.remove('bg-[#E8E6E1]/95', 'backdrop-blur-md', 'py-4', 'border-b', 'border-[#242424]/10');
            }
        });
    });
</script>
