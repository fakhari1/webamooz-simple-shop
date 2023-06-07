@extends('admin.layouts.app')


@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @include('admin.partials.__request-errors')

                <div class="row">

                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title mb-3">ایجاد محصول</h6>

                                <form class="forms-sample" method="post" action="{{ route('admin.products.store') }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <input type="text" class="form-control" name="name"
                                                   placeholder="نام محصول">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="slug" id="" class="form-control"
                                                   placeholder="اسلاگ محصول">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="category">دسته محصول:</label>
                                            <select name="category_id" id="category" class="form-select">
                                                <option disabled selected>انتخاب کنید</option>
                                                @foreach($categories->where('parent_id', null) as $key => $category)
                                                    @php $dash=''; @endphp

                                                    <option value="{{ $category->id }}">
                                                        {{ $category->title_fa }}
                                                    </option>

                                                    @if(count($category->children))
                                                        @include('admin.categories.__children',['children' => $category->children])
                                                    @endif

                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="category">برند محصول:</label>
                                            <select name="brand_id" id="brand" class="form-select">
                                                <option disabled selected>انتخاب کنید</option>
                                                @foreach($brands as $key => $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->title_fa }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="price">قیمت محصول:</label>
                                            <input type="text" name="price" id="price" class="form-control"
                                                   style="direction: ltr !important;">
                                        </div>
                                        <div class="col-6">
                                            <label for="file" class="form-label">تصویر محصول</label>
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="description">توضیحات:</label>
                                            <textarea name="description" id="description" cols="30" rows="10"
                                                      class="form-control"
                                                      style="resize: none">این یک متن تست است</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3 justify-content-end">
                                        <button type="submit" class="btn btn-success"
                                                style="max-width: 100px !important; margin-left: 10px;">ایجاد
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection


