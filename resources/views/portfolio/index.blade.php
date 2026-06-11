@extends('layouts.app')

@section('title', 'Portfolio — My Portfolio')

@section('content')

<section class="px-6 py-16">
    <div class="max-w-6xl mx-auto">

        {{-- Label --}}
        <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
            <div class="w-8 h-0.5 bg-secondary"></div>
            <p class="text-secondary text-sm font-semibold uppercase tracking-widest">Portfolio</p>
        </div>

        {{-- Headline --}}
        <div class="mb-12" data-aos="fade-up" data-aos-delay="50">
            <h1 class="font-heading font-bold text-5xl md:text-6xl text-dark leading-tight mb-4">
                Selected <br>
                <span class="text-secondary">Works.</span>
            </h1>
            <p class="text-dark/50 text-lg max-w-xl">
                A collection of projects across video, design, photography, and web.
            </p>
        </div>

        {{-- Grid Portfolio --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="portfolioGrid">
            @foreach($portfolios as $index => $item)

            @php
                $typeIcons = [
                    'youtube'   => '▶',
                    'instagram' => '◈',
                    'behance'   => '✦',
                    'website'   => '↗',
                    'image'     => '◻',
                    'pdf'       => '⬡',
                ];
                $icon = $typeIcons[$item->type] ?? '✦';

                $typeBg = [
                    'youtube'   => 'bg-red-500',
                    'instagram' => 'bg-pink-500',
                    'behance'   => 'bg-blue-600',
                    'website'   => 'bg-secondary',
                    'image'     => 'bg-accent',
                    'pdf'       => 'bg-orange-500',
                ];
                $bg = $typeBg[$item->type] ?? 'bg-dark';
            @endphp

            <div class="portfolio-card group"
                 data-category="{{ $item->category }}"
                 data-aos="fade-up"
                 data-aos-delay="{{ $index * 50 }}">

                <a href="{{ route('portfolio.show', $item->slug) }}"
                   class="block bg-white/40 backdrop-blur border border-white/60 rounded-3xl overflow-hidden hover:scale-[1.02] hover:shadow-lg transition-all duration-300">

                    {{-- Thumbnail area --}}
                    <div class="h-48 bg-gradient-to-br from-secondary/20 to-accent/20 relative flex items-center justify-center overflow-hidden">
                        {{-- Type badge --}}
                        <div class="absolute top-4 right-4 {{ $bg }} text-white text-xs font-bold px-3 py-1.5 rounded-xl uppercase tracking-wider">
                            {{ $item->type }}
                        </div>

                        {{-- Icon besar --}}
                        <span class="text-6xl opacity-20 font-heading font-bold text-secondary">
                            {{ $icon }}
                        </span>

                        {{-- Category --}}
                        <div class="absolute bottom-4 left-4 bg-white/80 backdrop-blur rounded-xl px-3 py-1">
                            <span class="text-dark text-xs font-semibold">{{ $item->category }}</span>
                        </div>
                    </div>

                    {{-- Info --}}
                    <div class="p-6">
                        <h3 class="font-heading font-bold text-lg text-dark mb-2 group-hover:text-secondary transition-colors">
                            {{ $item->title }}
                        </h3>
                        <p class="text-dark/50 text-sm leading-relaxed line-clamp-2">
                            {{ $item->description }}
                        </p>
                        <div class="mt-4 flex items-center gap-1 text-secondary text-sm font-medium">
                            <span>View project</span>
                            <span class="group-hover:translate-x-1 transition-transform inline-block">→</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection

@section('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endsection
