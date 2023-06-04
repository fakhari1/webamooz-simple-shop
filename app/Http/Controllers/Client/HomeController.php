<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $parentCategories = Category::where('parent_id', null)->get();


        return view('client.index', compact('parentCategories'));
    }
}
