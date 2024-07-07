<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomDeal extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Email',
        'Date',
        'Package',
        'Persons',
        'Kids',
        'SpecialRequest',
        'Price',
        'Accepted'
    ];

    protected $table = 'CustomDeal';
}
