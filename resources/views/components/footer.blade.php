<footer class="bg-[#0B0F19] border-t border-white/5 pt-20 pb-10 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16 items-start">
            <!-- Brand & Mission -->
            <div class="space-y-6">
                <a href="/" class="font-heading font-bold text-2xl tracking-tight text-white flex items-center group">
                    <img src="{{ asset('abstract-logo.png') }}" alt="Logo" class="w-8 h-8 mr-3 object-cover rounded-md" />
                    Yazid<span class="text-gray-500 font-light">&nbsp;Asykurillah</span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
                    Building the next generation of digital infrastructure through scalable architecture and intuitive engineering.
                </p>
            </div>

            <!-- Navigation (Center) -->
            <div class="md:text-center">
                <h4 class="text-white font-bold text-sm tracking-widest uppercase mb-6">Navigation</h4>
                <ul class="space-y-2">
                    <li><a href="{{ request()->is('/') ? '#about' : '/#about' }}" class="text-gray-500 hover:text-[#00D1FF] transition-colors text-sm">About</a></li>
                    <li><a href="{{ request()->is('/') ? '#services' : '/#services' }}" class="text-gray-500 hover:text-[#00D1FF] transition-colors text-sm">Services</a></li>
                    <li><a href="/portfolio" class="text-gray-500 hover:text-[#00D1FF] transition-colors text-sm">Portfolio</a></li>
                    <li><a href="{{ request()->is('/') ? '#contact' : '/#contact' }}" class="text-gray-500 hover:text-[#00D1FF] transition-colors text-sm">Contact</a></li>
                </ul>
            </div>

            <!-- Social Icons (Right) -->
            <div class="md:text-right flex flex-col md:items-end space-y-6">
                <h4 class="text-white font-bold text-sm tracking-widest uppercase">Social Presence</h4>
                <div class="flex items-center space-x-6">
                    <a href="https://github.com" target="_blank" class="text-gray-500 hover:text-white transition-all duration-300 transform hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.73.084-.73 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.43.372.823 1.102.823 2.222 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/yazid-asykurillah-bb76b9117" target="_blank" class="text-gray-500 hover:text-white transition-all duration-300 transform hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-center">
            <p class="text-xs text-gray-600">&copy; {{ date('Y') }} Yazid Asykurillah</p>
            <div class="flex items-center space-x-6">
                <span class="inline-flex items-center text-[10px] text-gray-600 uppercase tracking-tighter">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-2"></span> System Status: Online
                </span>
                <a href="#" class="text-xs text-gray-600 hover:text-white transition-colors">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>
