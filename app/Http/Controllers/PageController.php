<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Category;
use App\Models\OurWorks;
use App\Models\Product;
use App\Models\Service;
use App\Models\Size;
use App\Models\Slider;
use App\Models\SubCategory;
use App\Models\Thanks;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('title', 'asc')->get();
        $sliders = Slider::where('status', '1')
            ->orderBy('position', 'asc')
            ->get();
        return view('index', compact('sliders', 'products'));
    }

    public function about()
    {
        $about = AboutUs::with('gallery')->first();
        $thanks = Thanks::all();

        return view('about', compact('about', 'thanks'));
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
        $photo = OurWorks::with('service')->get();
        $service = Service::all();
        return view('ourworkpage', compact('photo', 'service'));
    }

    public function dostavka()
    {
        return view('deliver');
    }

    public function products()
    {
        return view('product-list');
    }

    public function productlist(Request $request, $slug, $id)
    {
        $products = Product::where('sub_category_id', '=', $id)->orderBy('title', 'asc')->get();

        $category = SubCategory::all();
        $size = Size::all();
        return view('category', compact('products','category','size'));
    }

    public function privacy()
    {
        return view('privacy');
    }

}
