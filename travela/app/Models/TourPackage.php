<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'Location',
        'Cost',
        'ImgName',
        'CategoryID',
        'Days',
        'ShortDescription',
        'DetailedDescription',
        'Rating',
    ];

    protected $table = 'tourPackage';

    public function TourCategory()
    {
        return $this->belongsTo(TourCategory::class, 'CategoryID');
    }
}
