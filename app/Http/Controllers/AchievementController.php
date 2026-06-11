<?php

namespace App\Http\Controllers;

use App\Models\Achievement;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('order')->get();

        return view('achievement.index', compact('achievements'));
    }
}