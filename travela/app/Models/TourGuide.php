<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    use HasFactory;


    protected $fillable = [
        'Name',
        'ImgName',
        'flink',
        'tlink',
        'ilink',
        'llink'
    ];

    protected $table = 'tourGuides';
}
