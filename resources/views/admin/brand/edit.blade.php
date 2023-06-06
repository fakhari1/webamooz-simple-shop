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

                                <h6 class="card-title mb-3">ایجاد برند</h6>

                                <form class="forms-sample" method="post"
                                      action="{{ route('admin.brands.update', $brand->id) }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="title_fa"
                                                   value="{{ $brand->title_fa }}"
                                                   placeholder="نام برند">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <input type="text" name="title_en" id="" class="form-control"
                                                   value="{{ $brand->title_en }}"
                                                   placeholder="نام انگلیسی برند">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6 mx-auto">
                                            <div class="border-1 rounded w-100">
                                                <img src="{{ '\storage\\' . $brand->image_url }}"
                                                     alt="{{ $brand->title_en }}_img"
                                                     style="max-width: 100% !important;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="file" class="form-label">تصویر برند</label>
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>

                                    <div class="row mb-3 justify-content-end">
                                        <button type="submit" class="btn btn-warning"
                                                style="max-width: 100px !important; margin-left: 10px;">ویرایش
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


