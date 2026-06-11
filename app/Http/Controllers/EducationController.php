<?php

namespace App\Http\Controllers;

use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        // Ambil semua data education, urutkan berdasarkan kolom 'order'
        $educations = Education::orderBy('order')->get();

        // Kirim data ke view dengan nama variabel 'educations'
        return view('education.index', compact('educations'));
    }
}