<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'Galleries'; // ← tambahkan ini
    protected $fillable = [
        'title', 'image', 'category',
        'caption', 'order'
    ];
}