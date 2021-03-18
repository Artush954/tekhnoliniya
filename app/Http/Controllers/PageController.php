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
        $products = Product::inRandomOrder()->take(10)->get();
        $sliders = Slider::where('status', '1')
            ->orderBy('position', 'asc')
            ->get();

        $catalogs =  Category::select('title','slug','image')->orderBy('title','asc')->get();
        $topServices =  Service::select('title','slug','image')->orderBy('title','asc')->take(3)->get();

        return view('index', compact('sliders', 'products','catalogs','topServices'));
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

    public function privacy()
    {
        return view('privacy');
    }

}
