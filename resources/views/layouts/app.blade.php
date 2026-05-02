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
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Be+Vietnam+Pro:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        :root {
            --bg-primary: #0F0F0F;
            --bg-secondary: #151515;
            --bg-light: #E8E6E1;
            --text-primary: #F5F5F5;
            --text-secondary: #A1A1A1;
            --border-custom: #242424;
            --accent-color: #FF6A00;
        }

        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            background-color: var(--bg-light);
            color: #111111;
            margin: 0;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Anton', sans-serif;
            text-transform: uppercase;
        }

        .font-mono-custom {
            font-family: 'IBM Plex Mono', monospace;
        }

        .bg-primary { background-color: var(--bg-primary); }
        .bg-secondary { background-color: var(--bg-secondary); }
        .bg-light { background-color: var(--bg-light); }
        
        .text-primary { color: var(--text-primary); }
        .text-secondary { color: var(--text-secondary); }
        .text-accent { color: var(--accent-color); }
        
        .border-custom { border-color: var(--border-custom); }

        ::selection {
            background-color: var(--accent-color);
            color: var(--bg-primary);
        }
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
