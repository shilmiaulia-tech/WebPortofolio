<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations'; // ← tambahkan ini

    protected $fillable = [
        'school', 'degree', 'field',
        'year_start', 'year_end',
        'description', 'logo', 'order'
    ];
}