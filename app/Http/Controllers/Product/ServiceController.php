<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OurWorks;
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

        return view('services', compact('services'));
    }

    /**
     * @param Request $request
     * @param $slug
     */
    public function show(Request $request,$slug,$id)
    {
        $services = Service::where('slug', $slug)->with('serviceInfo')->first();
        $photo =OurWorks::where('service_id',$id)->get();
        $catalog =  Category::all();
        return view ('service-show',compact('services','photo','catalog'));

    }
}
