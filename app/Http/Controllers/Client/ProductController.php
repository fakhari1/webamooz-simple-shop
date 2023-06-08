<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show(Product $product)
    {
        $brands = Brand::all();
        $parentCategories = Category::where('parent_id', null)->get();

        return view('client.products.details', compact('product', 'brands', 'parentCategories'));
    }

}
