<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $pageTitle = "Product Dashboard";
        return view('Product.index', compact('pageTitle'));
    }

    public function productPost(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();

        return back();
    }

    public function productView()
    {
        $pageTitle = "product details";
        $products = Product::all();
        return view('Product.list', compact('pageTitle', 'products'));
    }

    public function productEdit($id)
    {
        $pageTitle = "Product Edit";
        $products = Product::findOrFail($id);
        return view('Product.edit', compact('pageTitle', 'products'));
    }

    public function productUpdate(Request $request, $id)
    {

        // dd($request->all());
        $products = Product::find($id);

        $products->name = $request->name;
        $products->quantity = $request->quantity;
        $products->price = $request->price;

        $products->save();

        return back();
    }

    public function productDelete($id)
    {
        $product = Product::find($id);

        $product->delete();
        return back();
    }
}
