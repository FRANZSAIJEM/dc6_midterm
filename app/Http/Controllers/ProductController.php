<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();

        return Inertia::render('Product/Index', [
            'products' => $products,
        ]);
    }
}
