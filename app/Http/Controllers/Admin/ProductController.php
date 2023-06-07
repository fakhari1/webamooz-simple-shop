<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::paginate(10);

        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.products.create', compact('categories', 'brands'));
    }


    public function store(ProductRequest $request)
    {
        $data = $request->only(['name', 'price', 'category_id', 'brand_id', 'description']);

        $data['slug'] = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);

        $directory = 'images' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR . $data['slug'];
        $file_name = $data['slug'] . '.' . $request->file('file')->getClientOriginalExtension();

        $request
            ->file('file')
            ->storeAs('public' . DIRECTORY_SEPARATOR . $directory, $file_name);

        $data['image_url'] = $directory . DIRECTORY_SEPARATOR . $file_name;


        Product::create($data);

        return redirect()->route('admin.products.index')->with(['success_msg' => 'رکورد جدید با موفقیت ایجاد شد.']);
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.products.edit', compact('product', 'categories', 'brands'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->only(['name', 'price', 'category_id', 'brand_id', 'description']);

        $data['slug'] = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);

        if ($request->hasFile('file')) {

            if (File::exists('storage' . DIRECTORY_SEPARATOR . $product->image_url)) {
                File::delete('storage' . DIRECTORY_SEPARATOR . $product->image_url);
            }

            $directory = 'images' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR . $data['slug'];
            $file_name = $data['slug'] . '.' . $request->file('file')->getClientOriginalExtension();

            $request
                ->file('file')
                ->storeAs('public' . DIRECTORY_SEPARATOR . $directory, $file_name);

            $data['image_url'] = $directory . DIRECTORY_SEPARATOR . $file_name;
        }

        $product->update($data);

        return redirect()->route('admin.products.index')->with(['success_msg' => 'رکورد جدید با موفقیت ایجاد شد.']);

    }

    public function destroy(Product $product)
    {
        if (File::exists('storage' . DIRECTORY_SEPARATOR . $product->image_url)) {
            File::delete('storage' . DIRECTORY_SEPARATOR . $product->image_url);
        }

        $product->delete();


        return redirect()->route('admin.products.index')->with(['success_msg' => 'رکورد مورد نظر با موفقیت حذف شد']);
    }
}
