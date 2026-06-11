<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- AOS Animation Library --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Tailwind Custom Config --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#F3CA52',
                        background: '#F6E9B2',
                        secondary: '#0A6847',
                        accent: '#7ABA78',
                        dark: '#1a1a1a',
                    },
                    fontFamily: {
                        heading: ['Space Grotesk', 'sans-serif'],
                        body: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    borderRadius: {
                        '2xl': '1rem',
                        '3xl': '1.5rem',
                        '4xl': '2rem',
                    }
                }
            }
        }
    </script>

    {{-- Custom CSS Global --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #F6E9B2;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1a1a1a;
        }

        /* Scrollbar custom */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #F6E9B2;
        }
        ::-webkit-scrollbar-thumb {
            background: #0A6847;
            border-radius: 10px;
        }

        /* Page transition */
        .page-transition {
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    {{-- Slot untuk CSS tambahan per halaman --}}
    @yield('styles')
</head>

<body class="page-transition">

    {{-- ===== NAVBAR ===== --}}
    <nav class="fixed top-0 left-0 right-0 z-50 px-6 py-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-secondary/90 backdrop-blur-md rounded-2xl px-6 py-3 flex items-center justify-between">

                <a href="{{ route('home') }}"
                   class="font-heading font-bold text-base sm:text-xl text-primary tracking-tight">
                    Shilmi's Web Profile
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden md:flex items-center gap-1">
                    <a href="{{ route('home') }}"
                       class="nav-link px-4 py-2 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('home') ? 'text-primary bg-white/10' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                       class="nav-link px-4 py-2 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('about') ? 'text-primary bg-white/10' : '' }}">
                        About
                    </a>
                    <a href="{{ route('education') }}"
                       class="nav-link px-4 py-2 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('education') ? 'text-primary bg-white/10' : '' }}">
                        Education
                    </a>
                    <a href="{{ route('portfolio') }}"
                       class="nav-link px-4 py-2 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('portfolio*') ? 'text-primary bg-white/10' : '' }}">
                        Portfolio
                    </a>
                    <a href="{{ route('contact') }}"
                       class="ml-2 px-5 py-2 bg-primary text-dark rounded-xl text-sm font-semibold hover:bg-primary/90 transition-all duration-200 hover:scale-105">
                        Contact
                    </a>
                </div>

                {{-- Mobile Hamburger Button --}}
                <button id="menuBtn"
                        class="md:hidden flex flex-col gap-1.5 p-2"
                        onclick="toggleMenu()">
                    <span class="w-5 h-0.5 bg-background transition-all duration-300" id="bar1"></span>
                    <span class="w-5 h-0.5 bg-background transition-all duration-300" id="bar2"></span>
                    <span class="w-5 h-0.5 bg-background transition-all duration-300" id="bar3"></span>
                </button>
            </div>

            {{-- Mobile Menu --}}
            <div id="mobileMenu"
                 class="hidden md:hidden mt-2 bg-secondary/95 backdrop-blur-md rounded-2xl px-6 py-4 flex flex-col gap-2">
                <a href="{{ route('home') }}"
                   class="px-4 py-3 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all">
                    Home
                </a>
                <a href="{{ route('about') }}"
                   class="px-4 py-3 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all">
                    About
                </a>
                <a href="{{ route('education') }}"
                   class="px-4 py-3 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all">
                    Education
                </a>
                <a href="{{ route('achievement') }}"
                   class="px-4 py-3 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all">
                    Achievement
                </a>
                <a href="{{ route('portfolio') }}"
                   class="px-4 py-3 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all">
                    Portfolio
                </a>
                <a href="{{ route('experience') }}"
                   class="px-4 py-3 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all">
                    Experience
                </a>
                <a href="{{ route('gallery') }}"
                   class="px-4 py-3 rounded-xl text-sm font-medium text-background/80 hover:text-primary hover:bg-white/10 transition-all">
                    Gallery
                </a>
                <a href="{{ route('contact') }}"
                   class="px-4 py-3 bg-primary text-dark rounded-xl text-sm font-semibold text-center hover:bg-primary/90 transition-all">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    {{-- ===== KONTEN HALAMAN ===== --}}
    {{-- Inilah tempat konten setiap halaman akan "disuntikkan" --}}
    <main class="pt-24">
        @yield('content')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-secondary mt-20 px-6 py-12">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start gap-8">

                {{-- Brand --}}
                <div>
                    <p class="font-heading font-bold text-2xl text-primary mb-2">Shilmi's Web Profile</p>
                    <p class="text-background/60 text-sm max-w-xs">
                        Creative student exploring the intersection of technology and visual storytelling.
                    </p>
                </div>

                {{-- Quick Links --}}
                <div class="flex gap-12">
                    <div>
                        <p class="text-background/40 text-xs font-semibold uppercase tracking-widest mb-3">Pages</p>
                        <div class="flex flex-col gap-2">
                            <a href="{{ route('about') }}" class="text-background/70 text-sm hover:text-primary transition-colors">About</a>
                            <a href="{{ route('portfolio') }}" class="text-background/70 text-sm hover:text-primary transition-colors">Portfolio</a>
                            <a href="{{ route('gallery') }}" class="text-background/70 text-sm hover:text-primary transition-colors">Gallery</a>
                        </div>
                    </div>
                    <div>
                        <p class="text-background/40 text-xs font-semibold uppercase tracking-widest mb-3">More</p>
                        <div class="flex flex-col gap-2">
                            <a href="{{ route('education') }}" class="text-background/70 text-sm hover:text-primary transition-colors">Education</a>
                            <a href="{{ route('experience') }}" class="text-background/70 text-sm hover:text-primary transition-colors">Experience</a>
                            <a href="{{ route('contact') }}" class="text-background/70 text-sm hover:text-primary transition-colors">Contact</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="border-t border-background/10 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-background/40 text-xs">
                    © {{ date('Y') }} Shilmi's Web Profile. Built with Laravel & ❤️
                </p>
                <div class="flex gap-4">
                    <a href="#" class="text-background/40 text-xs hover:text-primary transition-colors">Instagram</a>
                    <a href="#" class="text-background/40 text-xs hover:text-primary transition-colors">LinkedIn</a>
                    <a href="#" class="text-background/40 text-xs hover:text-primary transition-colors">Behance</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- AOS Animation Script --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 600,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50,
        });

        // Mobile menu toggle
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            const bar1 = document.getElementById('bar1');
            const bar2 = document.getElementById('bar2');
            const bar3 = document.getElementById('bar3');

            menu.classList.toggle('hidden');

            // Animasi hamburger → X
            if (!menu.classList.contains('hidden')) {
                bar1.style.transform = 'translateY(8px) rotate(45deg)';
                bar2.style.opacity = '0';
                bar3.style.transform = 'translateY(-8px) rotate(-45deg)';
            } else {
                bar1.style.transform = '';
                bar2.style.opacity = '';
                bar3.style.transform = '';
            }
        }
    </script>

    {{-- Slot untuk script tambahan per halaman --}}
    @yield('scripts')

</body>
</html>
