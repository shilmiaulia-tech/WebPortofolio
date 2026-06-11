@extends('layouts.app')

@section('title', 'Contact — My Portfolio')

@section('content')

    {{-- ===== HERO CONTACT ===== --}}
    <section class="px-6 py-16">
        <div class="max-w-6xl mx-auto">

            {{-- Label --}}
            <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
                <div class="w-8 h-0.5 bg-secondary"></div>
                <p class="text-secondary text-sm font-semibold uppercase tracking-widest">Contact</p>
            </div>

            {{-- Headline --}}
            <div class="max-w-2xl mb-16" data-aos="fade-up" data-aos-delay="50">
                <h1 class="font-heading font-bold text-5xl md:text-6xl text-dark leading-tight mb-4">
                    Let's make <br>
                    <span class="text-secondary">something</span> <br>
                    together.
                </h1>
                <p class="text-dark/50 text-lg">
                    Whether it's a project, collaboration, or just a friendly hello —
                    my inbox is always open.
                </p>
            </div>

            {{-- Grid: Form + Info --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                {{-- Kolom Kiri: Contact Info --}}
                <div class="flex flex-col gap-4" data-aos="fade-right">

                    {{-- Email Card --}}
                    <div class="bg-secondary rounded-3xl p-6">
                        <p class="text-background/40 text-xs uppercase tracking-widest mb-2">Email</p>
                        <p class="text-primary font-semibold text-lg">hello@yourname.com</p>
                        <p class="text-background/40 text-xs mt-1">Usually replies within 24h</p>
                    </div>

                    {{-- Social Media --}}
                    <div class="bg-white/40 backdrop-blur border border-white/60 rounded-3xl p-6">
                        <p class="text-dark/40 text-xs uppercase tracking-widest mb-4">Social Media</p>
                        <div class="flex flex-col gap-3">
                            @php
                            $socials = [
                                ['platform' => 'Instagram', 'handle' => '@yourhandle', 'bg' => 'bg-pink-100', 'text' => 'text-pink-600'],
                                ['platform' => 'LinkedIn', 'handle' => 'Your Name', 'bg' => 'bg-blue-100', 'text' => 'text-blue-600'],
                                ['platform' => 'Behance', 'handle' => 'yourname', 'bg' => 'bg-indigo-100', 'text' => 'text-indigo-600'],
                            ];
                            @endphp

                            @foreach($socials as $social)
                            <div class="flex items-center justify-between">
                                <span class="text-dark/60 text-sm">{{ $social['platform'] }}</span>
                                <span class="{{ $social['bg'] }} {{ $social['text'] }} text-xs font-medium px-3 py-1 rounded-full">
                                    {{ $social['handle'] }}
                                </span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Availability --}}
                    <div class="bg-primary rounded-3xl p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2.5 h-2.5 bg-secondary rounded-full animate-pulse"></span>
                            <span class="text-dark font-semibold text-sm">Currently Available</span>
                        </div>
                        <p class="text-dark/60 text-sm leading-relaxed">
                            Open for freelance projects, internships, and creative collaborations.
                        </p>
                    </div>
                </div>

                {{-- Kolom Kanan: Contact Form --}}
                <div class="lg:col-span-2" data-aos="fade-left" data-aos-delay="100">
                    <div class="bg-white/40 backdrop-blur border border-white/60 rounded-3xl p-8">
                        <h2 class="font-heading font-bold text-2xl text-dark mb-6">Send a Message</h2>

                        <form action="#" method="HEAD" class="flex flex-col gap-5">
                            @csrf

                            {{-- Name + Email --}}
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-dark/50 text-sm font-medium block mb-2">Your Name</label>
                                    <input type="text"
                                           placeholder="John Doe"
                                           class="w-full bg-white/60 border border-white/80 rounded-2xl px-4 py-3 text-dark placeholder-dark/30 focus:outline-none focus:border-secondary/50 focus:bg-white transition-all">
                                </div>
                                <div>
                                    <label class="text-dark/50 text-sm font-medium block mb-2">Email Address</label>
                                    <input type="email"
                                           placeholder="john@example.com"
                                           class="w-full bg-white/60 border border-white/80 rounded-2xl px-4 py-3 text-dark placeholder-dark/30 focus:outline-none focus:border-secondary/50 focus:bg-white transition-all">
                                </div>
                            </div>

                            {{-- Subject --}}
                            <div>
                                <label class="text-dark/50 text-sm font-medium block mb-2">Subject</label>
                                <input type="text"
                                       placeholder="What's this about?"
                                       class="w-full bg-white/60 border border-white/80 rounded-2xl px-4 py-3 text-dark placeholder-dark/30 focus:outline-none focus:border-secondary/50 focus:bg-white transition-all">
                            </div>

                            {{-- Message --}}
                            <div>
                                <label class="text-dark/50 text-sm font-medium block mb-2">Message</label>
                                <textarea rows="5"
                                          placeholder="Hi! I'd love to collaborate on..."
                                          class="w-full bg-white/60 border border-white/80 rounded-2xl px-4 py-3 text-dark placeholder-dark/30 focus:outline-none focus:border-secondary/50 focus:bg-white transition-all resize-none"></textarea>
                            </div>

                            {{-- Submit --}}
                            <button type="submit"
                                    class="w-full bg-secondary text-background font-semibold py-4 rounded-2xl hover:bg-secondary/90 hover:scale-[1.01] transition-all duration-200">
                                Send Message ↗
                            </button>

                            <p class="text-dark/30 text-xs text-center">
                                This form is for display only — functionality coming soon.
                            </p>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection