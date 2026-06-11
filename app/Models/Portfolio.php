<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'Portfolios'; // ← tambahkan ini
    protected $fillable = [
        'title', 'slug', 'description',
        'thumbnail', 'category', 'type',
        'external_url', 'order'
    ];
}