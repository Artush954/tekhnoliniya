<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return redirect('admin/dashboard');
});

Route::get('dashboard',function (){
    return view('admin.dashboard');
});

Route::get('/{page}/{id}/delete',function ($page, $id){
   return view('admin.layout.delete',compact('page','id'));
})->name('destroy');

Route::post('product/remove/image',"ProductController@removeImage");
Route::post('about/remove/image',"AboutController@removeImage");

Route::resources([
    'page'=>'PageController',
    'service'=>'ServicesController',
    'category'=>'CategoryController',
    'slider'=>'SliderController',
    'ourwork'=>'OurworkController',
    'subcategory'=>'SubCategoryController',
    'product'=>'ProductController',
    'size'=>'SizeController',
    'servicesInfo'=>'ServicesInfoController',
    'thank'=>'ThanksController',
    'about'=>'AboutController',
]);

//Route::get('our-works',function (){
//    return view('admin.dashboard');
//})->name('admin.ourWorks');



