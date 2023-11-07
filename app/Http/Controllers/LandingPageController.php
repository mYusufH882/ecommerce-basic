<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $produk = Product::all();
        $kategori = Category::all();

        return view('landing', compact('produk', 'kategori'));
    }
}
