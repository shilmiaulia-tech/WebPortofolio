@extends('layouts.app')

@section('title', 'Education — My Portfolio')

@section('content')

<section class="px-6 py-16">
    <div class="max-w-6xl mx-auto">

        {{-- Label --}}
        <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
            <div class="w-8 h-0.5 bg-secondary"></div>
            <p class="text-secondary text-sm font-semibold uppercase tracking-widest">Education</p>
        </div>

        {{-- Headline --}}
        <div class="mb-16" data-aos="fade-up" data-aos-delay="50">
            <h1 class="font-heading font-bold text-5xl md:text-6xl text-dark leading-tight mb-4">
                My Learning <br>
                <span class="text-secondary">Journey.</span>
            </h1>
            <p class="text-dark/50 text-lg max-w-xl">
                Every school and campus that shaped how I think, create, and grow.
            </p>
        </div>

        {{-- Timeline Education --}}
        <div class="relative">

            {{-- Garis vertikal timeline --}}
            <div class="absolute left-6 md:left-8 top-0 bottom-0 w-0.5 bg-secondary/20"></div>

            <div class="flex flex-col gap-8">
                @foreach($educations as $index => $edu)
                <div class="relative pl-16 md:pl-20"
                     data-aos="fade-up"
                     data-aos-delay="{{ $index * 100 }}">

                    {{-- Dot timeline --}}
                    <div class="absolute left-4 md:left-6 top-6 w-4 h-4 rounded-full border-2 border-secondary bg-background"></div>

                    {{-- Card --}}
                    <div class="bg-white/40 backdrop-blur border border-white/60 rounded-3xl p-6 md:p-8 hover:scale-[1.01] transition-all duration-300">

                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">

                            {{-- Info Utama --}}
                            <div class="flex-1">
                                {{-- Badge Jenjang --}}
                                <span class="inline-block bg-secondary/10 text-secondary text-xs font-semibold px-3 py-1 rounded-full mb-3">
                                    {{ $edu->degree }}
                                </span>

                                <h2 class="font-heading font-bold text-xl md:text-2xl text-dark mb-1">
                                    {{ $edu->school }}
                                </h2>

                                @if($edu->field)
                                <p class="text-secondary font-medium text-sm mb-3">
                                    {{ $edu->field }}
                                </p>
                                @endif

                                @if($edu->description)
                                <p class="text-dark/50 text-sm leading-relaxed">
                                    {{ $edu->description }}
                                </p>
                                @endif
                            </div>

                            {{-- Tahun --}}
                            <div class="shrink-0">
                                <div class="bg-secondary rounded-2xl px-4 py-3 text-center">
                                    <p class="text-background/60 text-xs mb-0.5">Period</p>
                                    <p class="text-primary font-bold text-sm whitespace-nowrap">
                                        {{ $edu->year_start }} — {{ $edu->year_end }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

@endsection
