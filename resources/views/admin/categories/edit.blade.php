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

                                <h6 class="card-title mb-3">ویرایش دسته {{ $editCategory->title_fa }}</h6>

                                <form class="forms-sample" method="post"
                                      action="{{ route('admin.categories.update', $editCategory->id) }}">
                                    @csrf
                                    @method('patch')
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="title_fa"
                                                   value="{{ $editCategory->title_fa }}" required
                                                   placeholder="نام دسته بندی">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="title_en"
                                                   value="{{ $editCategory->title_en }}"
                                                   placeholder="نام انگلیسی دسته بندی">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="parent_id"
                                               class="col-sm-3 col-form-label">دسته پدر</label>
                                        <div class="col-sm-9">
                                            <select name="parent_id" id="parent_id" class="form-select">
                                                <option disabled selected>انتخاب کنید</option>
                                                <option value="{{ null }}">دسته والد</option>
                                                @foreach($categories as $key => $category)
                                                    @php $dash=''; @endphp

                                                    <option value="{{ $category->id }}" @if($category->id == $editCategory->parent_id) selected @endif>
                                                        {{ $category->title_fa }}
                                                    </option>

                                                    @if(count($category->children))
                                                        @include('admin.categories.__children',['children' => $category->children, 'editCategory' => $editCategory])
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3 align-items-end">
                                        <button type="submit" class="btn btn-warning">ویرایش</button>
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

