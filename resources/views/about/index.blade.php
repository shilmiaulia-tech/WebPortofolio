@extends('layouts.app')

@section('title', 'About — My Portfolio')

@section('content')

    {{-- ===== HERO ABOUT ===== --}}
    <section class="px-6 py-16">
        <div class="max-w-6xl mx-auto">

            {{-- Label --}}
            <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
                <div class="w-8 h-0.5 bg-secondary"></div>
                <p class="text-secondary text-sm font-semibold uppercase tracking-widest">About Me</p>
            </div>

            {{-- Grid: Teks + Card Foto --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                {{-- Kolom Kiri: Teks Utama --}}
                <div class="lg:col-span-2" data-aos="fade-right">
                    <h1 class="font-heading font-bold text-5xl md:text-6xl text-dark leading-tight mb-6">
                        Hi, I'm a <br>
                        <span class="text-secondary">Creative Mind</span> <br>
                        in the making.
                    </h1>
                    <p class="text-dark/60 text-lg leading-relaxed mb-4">
                        I'm a D3 Multimedia & Broadcasting student who's genuinely obsessed with
                        how visuals can tell stories, move people, and create connections. From video
                        production to graphic design, I love exploring it all.
                    </p>
                    <p class="text-dark/60 text-lg leading-relaxed">
                        When I'm not studying, you'll usually find me singing with my choir or actively competing in choral competitions.
                    </p>
                </div>

                {{-- Kolom Kanan: Info Card --}}
                <div class="flex flex-col gap-4" data-aos="fade-left" data-aos-delay="100">

                    {{-- Photo Card --}}
                    <div class="bg-secondary rounded-3xl aspect-square flex items-center justify-center overflow-hidden">
                        <img src="/shilmi%20gallery.jpeg" alt="Shilmi Portrait" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>

                    {{-- Quick Info --}}
                    <div class="bg-white/40 backdrop-blur border border-white/60 rounded-3xl p-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex justify-between items-center">
                                <span class="text-dark/40 text-sm">Status</span>
                                <span class="bg-accent/20 text-secondary text-xs font-semibold px-3 py-1 rounded-full">Open to work</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-dark/40 text-sm">Study</span>
                                <span class="text-dark text-sm font-medium">    D3 Teknologi Multimedia dan Broadcasting</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-dark/40 text-sm">Semester</span>
                                <span class="text-dark text-sm font-medium">4th</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-dark/40 text-sm">Based in</span>
                                <span class="text-dark text-sm font-medium">Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SKILLS SECTION ===== --}}
    <section class="px-6 py-12">
        <div class="max-w-6xl mx-auto">

            <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
                <div class="w-8 h-0.5 bg-secondary"></div>
                <p class="text-secondary text-sm font-semibold uppercase tracking-widest">What I Do</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                {{-- Skill Card --}}
                @php
                $skills = [
                    ['icon' => '✍️', 'title' => 'Creative', 'desc' => 'Brainstorming concepts, shaping narratives, and bringing big ideas to life. The creative room is my second home.', 'bg' => 'bg-secondary', 'text' => 'text-background', 'sub' => 'text-background/50'],
                    ['icon' => '🎨', 'title' => 'Graphic Design', 'desc' => 'Crafting visual identities and layouts that communicate without words.', 'bg' => 'bg-primary', 'text' => 'text-dark', 'sub' => 'text-dark/50'],
                    ['icon' => '📸', 'title' => 'Photography', 'desc' => 'Finding the right frame to freeze a moment worth keeping.', 'bg' => 'bg-white/40 border border-white/60', 'text' => 'text-dark', 'sub' => 'text-dark/40'],
                    ['icon' => '✍️', 'title' => 'Content Writing', 'desc' => 'Writing copy and captions that actually sound like a real human.', 'bg' => 'bg-accent', 'text' => 'text-white', 'sub' => 'text-white/60'],
                    ['icon' => '💻', 'title' => 'Web Design', 'desc' => 'Turning Figma mockups into clean, responsive websites.', 'bg' => 'bg-dark', 'text' => 'text-white', 'sub' => 'text-white/40'],
                    ['icon' => '📱', 'title' => 'Social Media', 'desc' => 'Planning content strategies and creating assets for digital platforms.', 'bg' => 'bg-white/40 border border-white/60', 'text' => 'text-dark', 'sub' => 'text-dark/40'],
                ];
                @endphp

                @foreach($skills as $index => $skill)
                <div class="{{ $skill['bg'] }} rounded-3xl p-6 hover:scale-[1.02] transition-all duration-300"
                     data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                    <span class="text-3xl mb-4 block">{{ $skill['icon'] }}</span>
                    <h3 class="font-heading font-bold text-lg {{ $skill['text'] }} mb-2">{{ $skill['title'] }}</h3>
                    <p class="{{ $skill['sub'] }} text-sm leading-relaxed">{{ $skill['desc'] }}</p>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- ===== FUN FACTS ===== --}}
    <section class="px-6 py-12 mb-8">
        <div class="max-w-6xl mx-auto">

            <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
                <div class="w-8 h-0.5 bg-secondary"></div>
                <p class="text-secondary text-sm font-semibold uppercase tracking-widest">Quick Facts</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @php
                $facts = [
                    ['number' => '4+', 'label' => 'Semesters of learning'],
                    ['number' => '10+', 'label' => 'Projects completed'],
                    ['number' => '3+', 'label' => 'Tools mastered'],
                    ['number' => '∞', 'label' => 'Cups of coffee'],
                ];
                @endphp

                @foreach($facts as $index => $fact)
                <div class="bg-white/40 backdrop-blur border border-white/60 rounded-3xl p-6 text-center hover:scale-[1.02] transition-all duration-300"
                     data-aos="fade-up" data-aos-delay="{{ $index * 75 }}">
                    <p class="font-heading font-bold text-4xl text-secondary mb-2">{{ $fact['number'] }}</p>
                    <p class="text-dark/50 text-sm">{{ $fact['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection