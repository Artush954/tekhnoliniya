<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;
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

        View::composer(['app.layouts.parts.header', 'app.layouts.parts.mobile_header'], function ($view) {
            $services = Cache::rememberForever('services', function () {
                return Service::orderBy('title', 'desc')->get();
            });
            $view->with('services', $services);
        });

        View::composer(['app.layouts.parts.header','services.view', 'products.categories', 'app.layouts.parts.mobile_header'], function ($view) {
            $category = Cache::rememberForever('category', function () {
                return Category::with('category')->get();
            });
            $view->with('category', $category);
        });
    }
}
