<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

Paginator::useBootstrapFive();

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(5);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obj = new Category;
        $obj->name = ucfirst($request['name']);
        $obj->hidden = $request['hidden'];
        $obj->save();
        return redirect(route('category.index'))->with('thongbao', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obj = Category::find($id);
        $obj->name = $request['name'];
        $obj->hidden = $request['hidden'];
        $obj->save();
        return redirect(route('category.index'))->with('thongbao', 'Cập nhập thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dem_sp = DB::table('products')->where('category_id', $id)->count();
        if ($dem_sp > 0) {
            return redirect(route('category.index'))->with('thongbao', 'Không thể xóa danh mục này!');
        }
        $category = Category::find($id);
        $category->delete();
        return redirect(route('category.index'))->with('thongbao', 'Xóa thành công');
    }
}
