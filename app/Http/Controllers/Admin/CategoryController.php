<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index()
    {
        $categoriesWithPaginate = Category::simplePaginate(5);
        $categories = Category::all();

        return view('admin.categories.index', compact('categories', 'categoriesWithPaginate'));
    }


    public function store(CategoryRequest $request)
    {
        $data = [
            'title_fa' => $request->title_fa,
            'title_en' => $request->title_en,
        ];


        $data['parent_id'] = null;

        if (is_numeric($request->parent_id) && $request->parent_id > 0) {
            $data['parent_id'] = $request->parent_id;
        }

        Category::create($data);

        return redirect()->back()->with(['success_msg' => 'رکورد با موفقیت ایجاد شد']);
    }


    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.categories.edit', ['editCategory' => $category, 'categories' => $categories]);
    }

    public function update(Category $category, CategoryRequest $request)
    {
        $data = [
            'title_fa' => $request->title_fa,
            'title_en' => $request->title_en,
            'parent_id' => $request->parent_id ?? null
        ];

        $category->update($data);

        return redirect()->route('admin.categories.index')->with(['success_msg' => 'رکورد مورد نظر بروزرسانی شد']);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with(['success_msg' => 'رکورد مورد نظر با موفقیت حذف شد']);
    }
}
