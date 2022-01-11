<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($cat, $product_id){
        $product = Product::where('id', $product_id)->first();

         return view('product.getProduct', [
            'product' => $product,
        ]);
    }

    public function getCategory(Request $request, $cat_alias){
        $cat = Category::where('alias', $cat_alias)->first();

        $paginate = 2;
        $products = Product::where('category_id', $cat->id)->paginate($paginate);

        if(isset($request->orderBy)){
            if($request->orderBy == 'price-low-high'){
                $products = Product::where('category_id', $cat->id)->orderBy('price')->paginate($paginate);
            }
        }
        if(isset($request->orderBy)){
            if($request->orderBy == 'price-high-low'){
                $products = Product::where('category_id', $cat->id)->orderBy('price', 'desc')->paginate($paginate);
            }
        }
        if(isset($request->orderBy)){
            if($request->orderBy == 'name-a-z'){
                $products = Product::where('category_id', $cat->id)->orderBy('price')->paginate($paginate);
            }
        }
        if(isset($request->orderBy)){
            if($request->orderBy == 'name-z-a'){
                $products = Product::where('category_id', $cat->id)->orderBy('title', 'desc')->paginate($paginate);
            }
        }

        if($request->ajax()){
            return view('ajax.ajax-sort', [
                'products' => $products,
            ])->render();
        }

        return view('categories.index', [
            'cat' => $cat,
            'products' => $products
        ]);
    }
}
