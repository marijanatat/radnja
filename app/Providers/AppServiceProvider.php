<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('*', function($view){
            $categories = Cache::rememberForever('categories', function () {
                return Category::get()->toTree();
            }); 

            $view->with('categories', $categories);
        });
    }
}
