<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Http\Requests\registerValid;

class UserController extends Controller
{
    public function loginForm()
    {
        $categories = Category::all();
        return view('pages.login', compact('categories'));
    }

    public function login(Request $request)
    {
        if (auth()->guard('web')
            ->attempt(['email' => $request['email'], 'password' => $request['password']])
        ) {
            $user = auth()->guard('web')->user();
            return redirect()->intended('/');
        } else return back()->with('thongbao', 'Email, Password không đúng');
    }
    public function registerForm()
    {
        $categories = Category::all();
        return view('pages.register', compact('categories'));
    }

    public function register(registerValid $request)
    {
        $u = new User;
        $u->email = strtolower(trim(strip_tags($request['email'])));
        $u->name = trim(strip_tags($request['name']));
        $u->password = trim(strip_tags(\Hash::make($request['mk1'])));
        $u->diachi = trim(strip_tags($request['diachi']));
        $u->dienthoai = trim(strip_tags($request['dienthoai']));
        $u->save();
        $id_user  = $u->id;
        if (auth()->guard('web')->attempt(['email' => $request['email'], 'password' => $request['mk1']])) {
            return redirect('/login')->with('thongbao', "Đăng ký hoàn tất!");
        } else return back()->with('thongbao', 'Đăng ký không thành công');
    }

    public function logout()
    {
        auth()->guard('web')->logout();
        return redirect('/login')->with('thongbao', 'Bạn đã thoát thành công');
    }
}
