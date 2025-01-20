<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id){
        $products = Product::where('category_id',$id)->get();


    return view('category',compact('products'));
    }
}
