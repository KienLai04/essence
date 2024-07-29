<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


Paginator::useBootstrapFive();

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        $products->load('category');
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'price' => 'required|integer',
            'category_id' => 'required|integer',
            'status' => 'required|integer',
            'hidden' => 'required|integer',
        ]);

        if (request()->hasFile('img')) {
            $tenFile = 'upload/' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('upload'), $tenFile);
            $validatedData['img'] = $tenFile;
            $product = Product::create($validatedData);
        }

        return redirect(route('product.index'))->with('thongbao', 'Thêm sản phẩm mới thành công!');
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
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'price' => 'required|integer',
            'category_id' => 'required|integer',
            'status' => 'required|integer',
            'hidden' => 'required|integer',
        ]);

        $product = Product::find($id);
        
        if(request()->hasFile('img')){
            $tenFile = 'upload/'.time().'.' . $request->img->extension();
            $request->img->move(public_path('upload'), $tenFile);
            $validatedData['img'] = $tenFile;

            $imgPath = "upload/".$product->img;
            if(file_exists($imgPath)){
                unlink($imgPath);
            }
        }

        $product->update($validatedData);

        return redirect(route('product.index'))->with('thongbao', 'Cập nhập thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $cokhong = Product::where('id', $id)->exists();
        if ($cokhong == false) {
            $request->session()->flash('thongbao', 'Sản phẩm không tồn tại');
            return redirect('admin/product');
        }
        Product::where('id', $id)->delete();
        $request->session()->flash('thongbao', 'Đã xóa sản phẩm');
        return redirect('admin/product');
    }
}
