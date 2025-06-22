<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Ana sayfa.
     */
    public function index(): View
    {
        $categories = Category::where('active', true)->orderBy('ordering')->get();
        $products = Product::with('category')->take(8)->get();

        return view('home', compact('categories', 'products'));
    }
}
