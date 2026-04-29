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
            background-color: #F9FAFB;
            color: #1F2937;
            margin: 0;
        }
        h1, h2, h3, h4, .font-heading {
            font-family: 'Space Grotesk', sans-serif;
        }

        .glass-card {
            background: #FFFFFF;
            border: 1px solid rgba(31, 41, 55, 0.1);
            will-change: transform, border-color, box-shadow;
        }
        
        .glass-card-hover {
            transition: transform 0.3s ease-out, border-color 0.3s ease-out, box-shadow 0.3s ease-out, background-color 0.3s ease-out;
        }
        
        .glass-card-hover:hover {
            border-color: #2563EB;
            box-shadow: 0 4px 20px rgba(31, 41, 55, 0.08);
            transform: translateY(-4px);
            background: #F9FAFB;
        }

        .text-accent-blue { color: #2563EB; }
    </style>
    @stack('styles')
</head>
<body class="antialiased relative">
    <!-- Ambient Background removed for light mode -->

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
