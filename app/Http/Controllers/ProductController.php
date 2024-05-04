<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAll()
    {
        $products = Product::getAll();
        $categories = Category::all();

        return view('catalog.catalog', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function getOne(Product $product)
    {
        return view('catalog.product', [
            'product' => $product
        ]);
    }

    // public function getOne(string $product)
    // {
    //     $product = Product::find($product);

    //     return view('catalog.product', [
    //         'product' => $product
    //     ]);
    // }
}
