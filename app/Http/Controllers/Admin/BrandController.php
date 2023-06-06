<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandRequest;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::paginate(10);


        return view('admin.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }


    public function store(BrandRequest $request)
    {
        $directory = 'images' . DIRECTORY_SEPARATOR . 'brands';
        $file_name = $request->title_en ? $request->titlle_en . '.' . $request->file('file')->getClientOriginalExtension() : $request->file('file')->getClientOriginalName();

        $path = $path = $request
            ->file('file')
            ->storeAs('public' . DIRECTORY_SEPARATOR . $directory, $file_name);

        $data = [
            'title_fa' => $request->title_fa,
            'title_en' => $request->title_en ?? null,
            'image_url' => 'storage' . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $file_name,
        ];

        Brand::create($data);

        return redirect()->route('admin.brands.index')->with(['success_msg' => 'رکورد مورد نظر با موفقیت ایجاد شد.']);
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(BrandRequest $request, Brand $brand)
    {

    }

    public function destroy(Brand $brand)
    {

    }
}
