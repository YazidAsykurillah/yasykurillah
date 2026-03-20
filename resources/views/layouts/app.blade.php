<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seo->title }}</title>
    <meta name="description" content="{{ $seo->description }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $seo->url }}">
    <meta property="og:title" content="{{ $seo->ogTitle }}">
    <meta property="og:description" content="{{ $seo->ogDescription }}">
    <meta property="og:image" content="{{ $seo->ogImage }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $seo->url }}">
    <meta property="twitter:title" content="{{ $seo->ogTitle }}">
    <meta property="twitter:description" content="{{ $seo->ogDescription }}">
    <meta property="twitter:image" content="{{ $seo->ogImage }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('abstract-logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0B0F19;
            color: #d1d5db;
            margin: 0;
        }
        h1, h2, h3, h4, .font-heading {
            font-family: 'Space Grotesk', sans-serif;
        }

        /* Subtle Starfield CSS Animation */
        .stars, .stars2, .stars3 {
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            pointer-events: none;
            z-index: 0;
            will-change: transform;
        }

        .stars {
            background-image: 
                radial-gradient(1px 1px at 20px 30px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(1px 1px at 40px 70px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(1.5px 1.5px at 50px 160px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(1px 1px at 90px 40px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 130px 80px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(1px 1px at 160px 120px, #ffffff, rgba(0,0,0,0));
            background-repeat: repeat;
            background-size: 200px 200px;
            animation: moveStars 100s linear infinite;
            opacity: 0.3;
        }

        .stars2 {
            background-image: 
                radial-gradient(1px 1px at 10px 10px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(1.5px 1.5px at 150px 150px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 60px 170px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(1.5px 1.5px at 170px 60px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 180px 110px, #ffffff, rgba(0,0,0,0));
            background-repeat: repeat;
            background-size: 300px 300px;
            animation: moveStars 150s linear infinite;
            opacity: 0.2;
        }

        .stars3 {
            background-image: 
                radial-gradient(1px 1px at 50px 50px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(1.5px 1.5px at 200px 200px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 150px 300px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 300px 150px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2.5px 2.5px at 350px 250px, #ffffff, rgba(0,0,0,0));
            background-repeat: repeat;
            background-size: 400px 400px;
            animation: moveStars 200s linear infinite;
            opacity: 0.1;
        }

        @keyframes moveStars {
            0% { transform: translateY(0) translateX(0); }
            100% { transform: translateY(-300px) translateX(300px); }
        }

        .glass-card {
            background: rgba(17, 24, 39, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.05);
            will-change: transform, border-color, box-shadow;
        }
        
        .glass-card-hover {
            transition: transform 0.3s ease-out, border-color 0.3s ease-out, box-shadow 0.3s ease-out, background-color 0.3s ease-out;
        }
        
        .glass-card-hover:hover {
            border-color: rgba(108, 99, 255, 0.3);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            transform: translateY(-4px);
            background: rgba(22, 30, 46, 0.95);
        }

        .text-neon-blue { color: #00D1FF; }
        .text-cosmic-purple { color: #6C63FF; }
        .text-star-gold { color: #FFB800; }
    </style>
    @stack('styles')
</head>
<body class="antialiased relative">
    
    <!-- Deep Space Starfield -->
    <div class="stars"></div>
    <div class="stars2"></div>
    <div class="stars3"></div>

    <!-- Nebula Ambient Backgrounds -->
    <div class="fixed top-[-20%] left-[-10%] w-[50%] h-[50%] bg-[#6C63FF] rounded-full blur-[150px] opacity-10 pointer-events-none z-0"></div>
    <div class="fixed bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-[#00D1FF] rounded-full blur-[150px] opacity-10 pointer-events-none z-0"></div>

    <!-- Main Content Container (Sticky Footer wrapper) -->
    <div class="relative z-10 min-h-screen flex flex-col">

        <x-navigation />

        <!-- Content Wrapper -->
        <div class="pt-24 md:pt-24 flex-grow">
            @yield('content')
        </div>

        <x-footer />

    </div>

    <!-- Mobile Menu Interactivity -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-link');
            
            if (menuBtn && mobileMenu) {
                let isMenuOpen = false;

                function toggleMenu() {
                    isMenuOpen = !isMenuOpen;
                    if (isMenuOpen) {
                        mobileMenu.classList.remove('hidden');
                        setTimeout(() => {
                            mobileMenu.classList.remove('scale-y-0', 'opacity-0');
                            mobileMenu.classList.add('scale-y-100', 'opacity-100');
                        }, 10);
                    } else {
                        mobileMenu.classList.remove('scale-y-100', 'opacity-100');
                        mobileMenu.classList.add('scale-y-0', 'opacity-0');
                        setTimeout(() => {
                            mobileMenu.classList.add('hidden');
                        }, 300);
                    }
                }

                menuBtn.addEventListener('click', toggleMenu);

                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        if(isMenuOpen) toggleMenu();
                    });
                });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
