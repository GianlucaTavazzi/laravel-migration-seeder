<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index() {
        $all_products = Product::all();
        return view('products', ['prodotti' => $all_products]);
    }
}
