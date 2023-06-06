<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $parentCategories = Category::where('parent_id', null)->get();
        $brands = Brand::all();

        return view('client.index', compact('parentCategories', 'brands'));
    }
}
