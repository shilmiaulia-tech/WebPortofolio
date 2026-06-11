<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('order')->get();

        // Ambil semua kategori unik untuk filter
        $categories = Gallery::select('category')
                        ->distinct()
                        ->pluck('category');

        return view('gallery.index', compact('galleries', 'categories'));
    }
}