<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OurWorks;
use App\Models\Product;
use App\Models\Service;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index()
    {
        return view('products.categories');
    }

    /**
     * @param Request $request
     * @param $slug
     */
    public function subCategories(Request $request,$slug)
    {
        $category = Category::where('slug',$slug)->first();
        $subcategory = SubCategory::where('category_id',$category->id)->get();

        return view('products.subcategories', compact('subcategory','category'));
    }

}
