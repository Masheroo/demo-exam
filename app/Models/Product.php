<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'country_creator',
        'release_date',
        'model'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
