<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $specialProducts = Product::query()->take(15)->get();

        return view('client.index', compact('specialProducts'));
    }
}
