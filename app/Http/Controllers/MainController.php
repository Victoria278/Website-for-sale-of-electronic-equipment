<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsFilterRequest;
use App\Category;
use App\Product;

class MainController extends Controller
{
    public function index(ProductsFilterRequest $request) {
        //$productsQuery = Product::query();
        $productsQuery = Product::with('category');

        if ($request->filled('price_from')) {
            $productsQuery->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $productsQuery->where('price', '<=', $request->price_to);
        }

        foreach (['hit', 'new', 'recommend'] as $field) {
            if ($request->has($field)) {
                $productsQuery->where($field, 1);
            }
        }

        $products = $productsQuery->paginate(6)->withPath("?" . $request->getQueryString());

        return view('index', compact('products'));
    }

    public function categories(){
    	$categories = Category::get();
    	return view('categories', compact('categories'));
    }

    public function category($code){
    	$category = Category::where('code', $code)->first();
    	return view('category', compact('category'));
    }

    // public function product($category, $product = null) {
    //     return view('product', ['product' => $product]);
    // }
    // public function product(Product $product)
    // {
    //     return view('product.show', compact('product'));
    // }
    // public function product($code){
    //     $product = Product::where('code', $code)->first();
    //     return view('product', compact('product'));
    // }
    public function product($category, $code) {
        $product = Product::where('code', $code)->first();
        return view('product', compact('product'));
    }
    
}