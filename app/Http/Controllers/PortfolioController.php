<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        return view('portofolio.index');
    }

     public function show($slug)
    {
        return view('portfolio.show');
    }
}