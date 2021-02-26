<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function productpage($id){
       $product= Product::with('gallery')->where('id',$id)->first();
        $randomproduct = Product::inRandomOrder()->limit(6)->get();
       return view('Product-Page',compact('product','randomproduct'));
   }
}
