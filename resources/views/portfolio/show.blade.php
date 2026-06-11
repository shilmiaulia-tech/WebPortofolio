@extends('layouts.app')

@section('title', $portfolio->title . ' — Portfolio')

@section('content')

<section class="px-6 py-16">
    <div class="max-w-4xl mx-auto">

        {{-- Back button --}}
        <a href="{{ route('portfolio') }}"
           class="inline-flex items-center gap-2 text-dark/50 hover:text-secondary transition-colors mb-8 group"
           data-aos="fade-up">
            <span class="group-hover:-translate-x-1 transition-transform inline-block">←</span>
            Back to Portfolio
        </a>

        {{-- Header --}}
        <div class="mb-8" data-aos="fade-up" data-aos-delay="50">
            <div class="flex flex-wrap items-center gap-3 mb-4">
                <span class="bg-secondary/10 text-secondary text-sm font-semibold px-3 py-1 rounded-full">
                    {{ $portfolio->category }}
                </span>
                <span class="bg-dark/10 text-dark text-sm font-medium px-3 py-1 rounded-full uppercase">
                    {{ $portfolio->type }}
                </span>
            </div>

            <h1 class="font-heading font-bold text-4xl md:text-5xl text-dark leading-tight mb-4">
                {{ $portfolio->title }}
            </h1>

            <p class="text-dark/60 text-lg leading-relaxed">
                {{ $portfolio->description }}
            </p>
        </div>

        {{-- Content Area — berdasarkan type --}}
        <div class="mb-12" data-aos="fade-up" data-aos-delay="100">

            @if($portfolio->type === 'youtube' && $portfolio->external_url)
                {{-- Embed YouTube --}}
                @php
                    // Konversi URL YouTube biasa jadi embed URL
                    preg_match('/(?:v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $portfolio->external_url, $matches);
                    $videoId = $matches[1] ?? null;
                @endphp

                @if($videoId)
                <div class="rounded-3xl overflow-hidden bg-dark aspect-video">
                    <iframe
                        src="https://www.youtube.com/embed/{{ $videoId }}"
                        class="w-full h-full"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>
                @endif

            @elseif($portfolio->type === 'instagram' && $portfolio->external_url)
                {{-- Link ke Instagram --}}
                <div class="bg-gradient-to-br from-pink-500/10 to-purple-500/10 border border-pink-200 rounded-3xl p-10 text-center">
                    <div class="text-5xl mb-4">◈</div>
                    <p class="text-dark/60 mb-6">This project is hosted on Instagram.</p>
                    <a href="{{ $portfolio->external_url }}"
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-purple-600 text-white font-semibold px-6 py-3 rounded-2xl hover:scale-105 transition-all">
                        View on Instagram ↗
                    </a>
                </div>

            @elseif($portfolio->type === 'behance' && $portfolio->external_url)
                {{-- Link ke Behance --}}
                <div class="bg-blue-50 border border-blue-200 rounded-3xl p-10 text-center">
                    <div class="text-5xl mb-4">✦</div>
                    <p class="text-dark/60 mb-6">This project is hosted on Behance.</p>
                    <a href="{{ $portfolio->external_url }}"
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-blue-600 text-white font-semibold px-6 py-3 rounded-2xl hover:scale-105 transition-all">
                        View on Behance ↗
                    </a>
                </div>

            @elseif($portfolio->type === 'website' && $portfolio->external_url)
                {{-- Link ke Website --}}
                <div class="bg-secondary/5 border border-secondary/20 rounded-3xl p-10 text-center">
                    <div class="text-5xl mb-4">↗</div>
                    <p class="text-dark/60 mb-6">This project is a live website.</p>
                    <a href="{{ $portfolio->external_url }}"
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-secondary text-background font-semibold px-6 py-3 rounded-2xl hover:scale-105 transition-all">
                        Visit Website ↗
                    </a>
                </div>

            @else
                {{-- Fallback --}}
                <div class="bg-white/40 border border-white/60 rounded-3xl p-10 text-center">
                    <p class="text-dark/40">No preview available for this project.</p>
                </div>
            @endif

        </div>

        {{-- Other Projects --}}
        @if($others->count() > 0)
        <div data-aos="fade-up">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-8 h-0.5 bg-secondary"></div>
                <p class="text-secondary text-sm font-semibold uppercase tracking-widest">Other Projects</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach($others as $other)
                <a href="{{ route('portfolio.show', $other->slug) }}"
                   class="bg-white/40 backdrop-blur border border-white/60 rounded-2xl p-5 hover:scale-[1.02] hover:bg-white/60 transition-all duration-300 group">
                    <span class="text-xs text-dark/40 uppercase tracking-wider">{{ $other->category }}</span>
                    <h4 class="font-heading font-bold text-dark mt-1 group-hover:text-secondary transition-colors">
                        {{ $other->title }}
                    </h4>
                    <p class="text-secondary text-xs mt-2 font-medium">View →</p>
                </a>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

@endsection