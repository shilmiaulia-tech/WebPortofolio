<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'Experiences'; // ← tambahkan ini
    protected $fillable = [
        'company', 'position', 'type',
        'year_start', 'year_end',
        'description', 'order'
    ];
}