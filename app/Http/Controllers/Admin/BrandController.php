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
        $data = [
            'name' => $request->name,
            'image_url' => $request->file->getClientOriginalName()
        ];

        Brand::create($data);

        return view('admin.brands.index')->with(['success_msg' => 'رکورد مورد نظر با موفقیت ایجاد شد.']);
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
