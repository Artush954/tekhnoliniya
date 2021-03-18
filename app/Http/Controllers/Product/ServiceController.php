<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OurWorks;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class ServiceController
 * @package App\Http\Controllers\Product
 */
class ServiceController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $services = Service::where('status', '1')->get();

        return view('services.index', compact('services'));
    }

    /**
     * @param $slug
     */
    public function show($slug)
    {
        $service = Service::with('serviceInfo')->where('slug', $slug)->first();
        $ourWorks = OurWorks::where('service_id',$service->id)->get();
        $product = Product::inRandomOrder()->limit(5)->get();

        return view ('services.view',compact('service','ourWorks','product'));

    }
}
