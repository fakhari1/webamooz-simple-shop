<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductGalleryRequest;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Product $product)
    {
        return view('admin.products.galleries.create', compact('product'));
    }


    public function store(ProductGalleryRequest $request, Product $product)
    {

        $product->addGallery($request);

        return redirect()->back()->with(['success_msg' => 'تصاویر با موفقیت آپلود شد']);
    }
}
