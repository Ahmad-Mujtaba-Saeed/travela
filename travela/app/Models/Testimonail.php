<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonail extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'ImgName',
        'Location',
        'Comment',
        'Rating',
    ];

    protected $table = 'testimonial';
}
