<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandRequest;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::paginate(10);


        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brands.create');
    }


    public function store(BrandRequest $request)
    {
        $directory = 'images' . DIRECTORY_SEPARATOR . 'brands';
        $file_name = $request->title_en ? Str::slug($request->title_en) . '.' . $request->file('file')->getClientOriginalExtension() : $request->file('file')->getClientOriginalName();

        $request
            ->file('file')
            ->storeAs('public' . DIRECTORY_SEPARATOR . $directory, $file_name);

        $data = [
            'title_fa' => $request->title_fa,
            'title_en' => $request->title_en ?? null,
            'image_url' => $directory . DIRECTORY_SEPARATOR . $file_name,
        ];

        Brand::create($data);

        return redirect()->route('admin.brands.index')->with(['success_msg' => 'رکورد مورد نظر با موفقیت ایجاد شد.']);
    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(BrandRequest $request, Brand $brand)
    {

        $data = [
            'title_fa' => $request->title_fa,
            'title_en' => $request->title_en ?? $brand->title_en,
        ];

        if ($request->hasFile('file')) {

            if (File::exists('storage' . DIRECTORY_SEPARATOR . $brand->image_url)) {
                File::delete('storage' . DIRECTORY_SEPARATOR . $brand->image_url);
            }

            $directory = 'images' . DIRECTORY_SEPARATOR . 'brands';
            $file_name = $request->title_en ? Str::slug($request->title_en) . '.' . $request->file('file')->getClientOriginalExtension() : $request->file('file')->getClientOriginalName();

            $path = $request
                ->file('file')
                ->storeAs('public' . DIRECTORY_SEPARATOR . $directory, $file_name);

            $data['image_url'] = $directory . DIRECTORY_SEPARATOR . $file_name;

        }

        $brand->update($data);


        return redirect()->route('admin.brands.index')->with(['success_msg' => 'رکورد مورد نظر با موفقیت بروزرسانی شد']);
    }

    public function destroy(Brand $brand)
    {

        if (File::exists('storage' . DIRECTORY_SEPARATOR . $brand->image_url)) {
            File::delete('storage' . DIRECTORY_SEPARATOR . $brand->image_url);
        }

        $brand->delete();


        return redirect()->route('admin.brands.index')->with(['success_msg' => 'رکورد مورد نظر با موفقیت حذف شد']);
    }
}
