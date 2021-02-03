<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function cart()
    {
        return view('cart');
    }
    public function category()
    {
        return view('category');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function contact()
    {
        return view('contact');
    }
    public function product()
    {
        return view('product-page');
    }
    public function ourwork()
    {
        return view('ourworkpage');
    }
    public function dostavka()
    {
        return view('deliver');
    }
    public function products()
    {
        return view('product-list');
    }

    public function uslugi()
    {
        return view('uslugi');
    }
}
