@extends('layouts.app')

@section('title', 'Gallery — My Portfolio')

@section('content')

<section class="px-6 py-16">
    <div class="max-w-6xl mx-auto">

        {{-- Label --}}
        <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
            <div class="w-8 h-0.5 bg-secondary"></div>
            <p class="text-secondary text-sm font-semibold uppercase tracking-widest">Gallery</p>
        </div>

        {{-- Headline --}}
        <div class="mb-12" data-aos="fade-up" data-aos-delay="50">
            <h1 class="font-heading font-bold text-5xl md:text-6xl text-dark leading-tight mb-4">
                Captured <br>
                <span class="text-secondary">Moments.</span>
            </h1>
            <p class="text-dark/50 text-lg max-w-xl">
                A visual diary of events, projects, and everyday life.
            </p>
        </div>

        {{-- Masonry Grid --}}
        <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4" id="galleryGrid">
            @foreach($galleries as $index => $photo)
            <div class="gallery-item break-inside-avoid"
                 data-category="{{ $photo->category }}"
                 data-aos="fade-up"
                 data-aos-delay="{{ ($index % 4) * 50 }}">

                <div class="group relative rounded-2xl overflow-hidden cursor-pointer"
                     onclick="openLightbox('{{ $photo->image }}', '{{ $photo->title }}', '{{ $photo->caption }}')">

                    <img src="{{ $photo->image }}"
                         alt="{{ $photo->title }}"
                         class="w-full object-cover group-hover:scale-105 transition-all duration-500"
                         loading="lazy">

                    {{-- Overlay on hover --}}
                    <div class="absolute inset-0 bg-dark/0 group-hover:bg-dark/50 transition-all duration-300 flex items-end p-4">
                        <div class="translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <p class="text-white font-semibold text-sm">{{ $photo->title }}</p>
                            @if($photo->caption)
                            <p class="text-white/60 text-xs mt-0.5">{{ $photo->caption }}</p>
                            @endif
                        </div>
                    </div>

                    {{-- Category badge --}}
                    <div class="absolute top-3 left-3 bg-white/80 backdrop-blur rounded-lg px-2 py-0.5">
                        <span class="text-dark text-xs font-medium">{{ $photo->category }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Lightbox Modal --}}
<div id="lightbox"
     class="fixed inset-0 bg-dark/90 backdrop-blur-sm z-50 hidden items-center justify-center p-6"
     onclick="closeLightbox()">
    <div class="max-w-3xl w-full" onclick="event.stopPropagation()">
        <img id="lightboxImg" src="" alt="" class="w-full rounded-3xl object-contain max-h-[70vh]">
        <div class="mt-4 text-center">
            <p id="lightboxTitle" class="text-white font-heading font-bold text-xl"></p>
            <p id="lightboxCaption" class="text-white/50 text-sm mt-1"></p>
        </div>
        <button onclick="closeLightbox()"
                class="absolute top-6 right-6 text-white/50 hover:text-white text-3xl transition-colors">
            ✕
        </button>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Lightbox
    function openLightbox(src, title, caption) {
        document.getElementById('lightboxImg').src = src;
        document.getElementById('lightboxTitle').textContent = title;
        document.getElementById('lightboxCaption').textContent = caption;
        const lb = document.getElementById('lightbox');
        lb.classList.remove('hidden');
        lb.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        const lb = document.getElementById('lightbox');
        lb.classList.add('hidden');
        lb.classList.remove('flex');
        document.body.style.overflow = '';
    }

    // Tutup lightbox dengan tombol Escape
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeLightbox();
    });
</script>
@endsection
