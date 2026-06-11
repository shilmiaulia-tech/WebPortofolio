@extends('layouts.app')

@section('title', '404 — Page Not Found')

@section('content')
<div class="min-h-[70vh] flex items-center justify-center px-6">
    <div class="text-center" data-aos="fade-up">
        <p class="font-heading font-bold text-8xl text-secondary/20 mb-4">404</p>
        <h1 class="font-heading font-bold text-3xl text-dark mb-3">Page not found.</h1>
        <p class="text-dark/50 mb-8">Looks like this page took a creative detour.</p>
        <a href="{{ route('home') }}"
           class="inline-flex items-center gap-2 bg-secondary text-background font-semibold px-6 py-3 rounded-2xl hover:scale-105 transition-all">
            ← Back to Home
        </a>
    </div>
</div>
@endsection