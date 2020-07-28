<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function getProduct($id)    
    {
        $product = Product::find($id);
        return view('single', ['product' => $product]);
    }
}
