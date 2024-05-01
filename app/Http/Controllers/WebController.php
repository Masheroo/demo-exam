<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebController extends Controller
{
    public function about()
    {
        $products = Product::all()->take(5);
        return view('about.about', [
            'products' => $products
        ]);
    }
}
