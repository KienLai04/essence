<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalProducts = Product::count();
        return view('admin.dashboard', compact('totalCategories', 'totalProducts'));
    }

    public function loginForm()
    {
        $categories = Category::all();
        return view('admin.login', compact('categories'));
    }

    public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password']])) 
        {
            $user = auth()->guard('admin')->user();
            if ($user->role == 1) return redirect('admin/');
            else return back()->with('thongbao', 'Bạn không đủ quyền');
        } 
        else return back()->with('thongbao', 'Email, Password không đúng');
    }

    public function registerForm()
    {
        $categories = Category::all();
        return view('pages.register', compact('categories'));
    }

    public function register(Request $request)
    {
    }

    public function logout( Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect(route('loginForm'))->with('thongbao','Bạn đã thoát admin');
    }
}
