<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index(){
        return view('products.index', ['products' => Product::all()]);
    }

    public function show($id){
        return view('products.show', ['product' => Product::findOrFail($id)]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        $product = new Product();

        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->price_user = $request->price_user;
        $product->price_3_opt = $request->price_3_opt;
        $product->price_8_opt = $request->price_8_opt;
        $product->price_dealer = $request->price_dealer;
        $product->price_vip = $request->price_vip;
        $product->category_id = $request->category_id;
        $product->stock = $request->stock;

        return (string) $product->save();
    }
}
