<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OurWorks;
use App\Models\Service;
use App\Models\SubCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{


    /**
     * @param Request $request
     * @param $slug
     */
    public function show(Request $request,$slug,$id)
    {
        $subcategory = SubCategory::where('category_id','=',$id)->get();

        return view('SubCategory_show', compact('subcategory'));
    }
}
