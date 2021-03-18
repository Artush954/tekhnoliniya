<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);

       View::composer(['app.layouts.parts.header','app.layouts.parts.mobile_header'],function($view){
                $view->with('services', Service::orderBy('title','desc')->get() );
       });
       View::composer(['app.layouts.parts.header','products.categories','app.layouts.parts.mobile_header'],function($view){
                $view->with('category', Category::with('category')->get() );
       });
    }
}
