<?php

use Illuminate\Support\Facades\Route;

Route::get('dashboard',function (){
    return view('admin.dashboard');
});

Route::get('/{page}/{id}/delete',function ($page, $id){
   return view('admin.layout.delete',compact('page','id'));
})->name('destroy');
Route::resources([
    'page'=>'PageController'
]);

//Route::get('our-works',function (){
//    return view('admin.dashboard');
//})->name('admin.ourWorks');



