@extends('layouts.app')

@section('title', 'Experience — My Portfolio')

@section('content')

<section class="px-6 py-16">
    <div class="max-w-6xl mx-auto">

        {{-- Label --}}
        <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
            <div class="w-8 h-0.5 bg-secondary"></div>
            <p class="text-secondary text-sm font-semibold uppercase tracking-widest">Experience</p>
        </div>

        {{-- Headline --}}
        <div class="mb-16" data-aos="fade-up" data-aos-delay="50">
            <h1 class="font-heading font-bold text-5xl md:text-6xl text-dark leading-tight mb-4">
                Where I've <br>
                <span class="text-secondary">Been & Grown.</span>
            </h1>
            <p class="text-dark/50 text-lg max-w-xl">
                Internships, organizations, and freelance work that built my skillset.
            </p>
        </div>

        {{-- List Experience --}}
        <div class="flex flex-col gap-4">
            @foreach($experiences as $index => $exp)
            <div class="bg-white/40 backdrop-blur border border-white/60 rounded-3xl p-6 md:p-8 hover:scale-[1.01] hover:bg-white/60 transition-all duration-300"
                 data-aos="fade-up"
                 data-aos-delay="{{ $index * 75 }}">

                <div class="flex flex-col md:flex-row md:items-center gap-6">

                    {{-- Icon berdasarkan type --}}
                    @php
                        $icons = [
                            'Internship'  => '🏢',
                            'Freelance'   => '💻',
                            'Organisasi'  => '🤝',
                            'Community'   => '🌐',
                            'Academic Project' => '🎓',
                        ];
                        $icon = $icons[$exp->type] ?? '✦';
                    @endphp

                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center shrink-0 text-2xl">
                        {{ $icon }}
                    </div>

                    {{-- Info --}}
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-2 mb-1">
                            <h3 class="font-heading font-bold text-xl text-dark">
                                {{ $exp->position }}
                            </h3>
                            <span class="bg-accent/20 text-secondary text-xs font-medium px-2.5 py-0.5 rounded-full">
                                {{ $exp->type }}
                            </span>
                        </div>

                        <p class="text-secondary font-medium text-sm mb-3">
                            {{ $exp->company }}
                        </p>

                        @if($exp->description)
                        <p class="text-dark/50 text-sm leading-relaxed">
                            {{ $exp->description }}
                        </p>
                        @endif
                    </div>

                    {{-- Periode --}}
                    <div class="shrink-0 text-right">
                        <div class="bg-secondary/10 rounded-2xl px-4 py-3">
                            <p class="text-secondary font-semibold text-sm whitespace-nowrap">
                                {{ $exp->year_start }}
                            </p>
                            @if($exp->year_end)
                            <p class="text-dark/30 text-xs">—</p>
                            <p class="text-secondary font-semibold text-sm whitespace-nowrap">
                                {{ $exp->year_end }}
                            </p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
