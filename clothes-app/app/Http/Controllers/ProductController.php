<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  use App\Product;

class ProductController extends Controller
{
    public function index()
    {
      return view('product.index')
        ->with('products',Product::get());
    }

    public function show()
    {
      return viex('product.show')
       ->with('products',Product::find($id));
    }
}
