@extends('layouts.app')

@section('title', 'Achievement - My Portfolio')

@section('content')

<section class="px-6 py-16">
    <div class="max-w-6xl mx-auto">

        {{-- Label --}}
        <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
            <div class="w-8 h-0.5 bg-secondary"></div>
            <p class="text-secondary text-sm font-semibold uppercase tracking-widest">Achievement</p>
        </div>

        {{-- Headline --}}
        <div class="mb-12" data-aos="fade-up" data-aos-delay="50">
            <h1 class="font-heading font-bold text-5xl md:text-6xl text-dark leading-tight mb-4">
                Shilmi's <br>
                <span class="text-secondary">Achievements.</span>
            </h1>
            <p class="text-dark/50 text-lg max-w-xl">
                Dokumentasi pencapaian dan momen prestasi.
            </p>
        </div>

        {{-- Achievement Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($achievements as $index => $achievement)
            <article class="bg-white/40 backdrop-blur border border-white/60 rounded-3xl overflow-hidden hover:scale-[1.01] hover:bg-white/60 transition-all duration-300"
                     data-aos="fade-up"
                     data-aos-delay="{{ $index * 75 }}">
                @if($achievement->certificate)
                <div class="aspect-[3/4] bg-secondary/10 overflow-hidden">
                    <img src="{{ $achievement->certificate }}"
                         alt="{{ $achievement->title }}"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
                @endif

                <div class="p-6">
                    <div class="flex flex-wrap items-center gap-2 mb-3">
                        <span class="bg-secondary/10 text-secondary text-xs font-semibold px-3 py-1 rounded-full">
                            {{ $achievement->level }}
                        </span>
                        <span class="text-dark/40 text-xs font-semibold">
                            {{ $achievement->year }}
                        </span>
                    </div>

                    <h2 class="font-heading font-bold text-xl md:text-2xl text-dark mb-2">
                        {{ $achievement->title }}
                    </h2>

                    <p class="text-secondary font-medium text-sm mb-3">
                        {{ $achievement->organizer }}
                    </p>

                    @if($achievement->description)
                    <p class="text-dark/50 text-sm leading-relaxed">
                        {{ $achievement->description }}
                    </p>
                    @endif
                </div>
            </article>
            @endforeach
        </div>

    </div>
</section>

@endsection
