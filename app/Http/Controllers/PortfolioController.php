<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        // Ambil semua portfolio, urutkan by order
        $portfolios = Portfolio::orderBy('order')->get();

        // Ambil semua kategori unik untuk filter
        $categories = Portfolio::select('category')
                        ->distinct()
                        ->pluck('category');

        return view('portfolio.index', compact('portfolios', 'categories'));
    }

    public function show($slug)
    {
        // Cari portfolio berdasarkan slug
        // firstOrFail() = kalau tidak ketemu, otomatis tampilkan 404
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();

        // Ambil portfolio lain sebagai rekomendasi (selain yang sedang dibuka)
        $others = Portfolio::where('slug', '!=', $slug)
                    ->orderBy('order')
                    ->take(3)
                    ->get();

        return view('portfolio.show', compact('portfolio', 'others'));
    }
}