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
        'model',
        'count'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public static function getAll()
    {
        // Product::all()
        return self::all()->sortBy('created_at');
    }
}
