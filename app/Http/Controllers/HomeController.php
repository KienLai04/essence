<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hotProducts = Product::where('status', 2)->limit(6)->get();
        $newProducts = Product::where('status', 1)->limit(6)->get();
        $categories = Category::all();
        $cart = session()->get('cart', []);
        return view('pages.home', compact('hotProducts', 'newProducts', 'categories', 'cart'));
    }

    

    
}
