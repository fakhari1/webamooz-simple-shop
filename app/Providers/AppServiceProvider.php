<?php

namespace App\Providers;

use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Schema::defaultStringLength(191);
    }

    public function boot(): void
    {
        $brands = Brand::all();
        $parentCategories = Category::where('parent_id', null)->get();

        view()->composer(['client.products.details', 'client.index'], function ($view) use($brands, $parentCategories) {
            return $view->with([
                'brands' => $brands,
                'parentCategories' => $parentCategories
            ]);
        });

    }
}
