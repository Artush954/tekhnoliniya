<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Orders\Biling;
use App\Orders\Orders;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    public function index($subCategory)
    {
        $subCategory = SubCategory::where('slug', $subCategory)->with('category')->first();
        $products = Product::where('sub_category_id', '=', $subCategory->id)->orderBy('title', 'asc')->paginate(16);
        $category = SubCategory::orderBy('title', 'asc')->get();

        return view('products.product-list', compact('subCategory', 'products', 'category'));
    }

    public function show($slug)
    {
//       $all = Product::all();
//
//       foreach ($all AS $item)
//       {
//           $filePath = public_path('/images/'.$item->image);
//
//           if (file_exists($filePath)){
//
//               $img = Image::make($filePath)->resize(420, 315);
//               $img->save(public_path('/images/thumb/'.$item->image));
//           }
//       }
//
//       dd($all);

        $product = Product::with('gallery')->where('slug', $slug)->first();
        $similarProducts = Product::where('id', '<>', $product->id)->inRandomOrder()->limit(6)->get();

        return view('products.show', compact('product', 'similarProducts'));
    }


    public function addOrder(Request $request)
    {

        try {
            $biling = new Biling();
            $biling->name = $request->name;
            $biling->email = $request->email;
            $biling->description = $request->desc;
            $biling->save();

            foreach ($request->data as $item){

                $order= new Orders();
                $order->product_id = $item['id'];
                $order->biling_id = $biling->id;
                $order->cut = $item['count'];
                $order->save();
            }


        }
        catch (\Exception $exception) {
            $response = [
                'status' => false,
                'message' => $exception->getMessage()
            ];
        }

    }

}
