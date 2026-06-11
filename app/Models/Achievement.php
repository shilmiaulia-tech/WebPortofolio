<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = 'achievements'; // ← tambahkan ini
    protected $fillable = [
        'title', 'organizer', 'year',
        'level', 'description', 'certificate', 'order'
    ];
}