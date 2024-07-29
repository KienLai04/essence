<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        view()->share('categories', $categories);
    }
    public function showProduct(Product $id, Request $request)
    {
        // Lấy danh mục đầu tiên của sản phẩm
        $category = $id->category()->first();

        // Kiểm tra nếu sản phẩm có danh mục liên kết
        if ($category) {
            // Lấy các sản phẩm liên quan (cùng danh mục) trừ sản phẩm hiện tại
            $relatedProducts = $category->products()
                ->where('id', '!=', $id->id)
                ->take(4)
                ->get();
        } else {
            // Nếu sản phẩm không có danh mục, trả về một collection rỗng
            $relatedProducts = collect();
        }

        return view('pages.product-detail', ['detail' => $id, 'relatedProducts' => $relatedProducts]);
    }

    public function showProductByCategory(request $request)
    {
        $products = Product::where('category_id', $request->id)->paginate(9);
        $cate_name = Category::find($request->id);
        Paginator::useBootstrapFive();
        return view('pages.category', compact('products', 'cate_name'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $result = Product::where('name', 'LIKE', "%{$query}%")->paginate(9);
        Paginator::useBootstrapFive();
        return view('pages.search', compact('result', 'query'));
    }

    public function addtoCart(Request $request, $id_sp = 0, $soluong=1)
    {
        
    }

    public function showCart(Request $request)
    {
        
        return view('pages.cart');
    }

    public function deleteCart(Request $request, $id)
    {
        
    }
}
