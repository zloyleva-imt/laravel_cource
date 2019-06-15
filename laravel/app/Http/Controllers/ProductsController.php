<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('products.index', ['products' => Product::all()]);
    }

    /**
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('products.show', ['product' => Product::findOrFail($id)]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * @param $id
     * @return View
     */
    public function edit($id): View
    {
        return view('products.edit', ['product' => Product::findOrFail($id)]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $product = new Product();

        $product->create(array_merge($request->all(), ['slug' => Str::slug($request->name)]));
        return redirect()->route('products.index');
    }

    /**
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update($id,Request $request): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $product->update(array_merge($request->all(), ['slug' => Str::slug($request->name)]));
        return redirect()->route('products.index');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('products.index');
    }
}
