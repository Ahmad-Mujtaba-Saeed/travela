<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'Type',
        'ImgName',
        'description',
    ];

    protected $table = 'tourCategory';

    public function TourPackages()
    {
        return $this->hasMany(TourPackage::class, 'CategoryID');
    }
}
