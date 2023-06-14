@extends('admin.layouts.app')

@section('head')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
@endsection
@section('content')

    <div class="main-content">
        <div class="page-content pb-1">
            <div class="container-fluid">
                @include('admin.partials.__request-errors')

                <div class="row">

                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title mb-3">ایجاد گالری تصویر برای محصول {{ $product->name }}</h6>

                                <form class="forms-sample dropzone" method="post"
                                      action="{{ route('admin.products.galleries.store', $product) }}"
                                      id="form"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <input type="file" name="file" id="file" required multiple>
                                    </div>
                                </form>

                                <div class="row mb-3 mt-3 justify-content-end">
                                    <button type="button" class="btn btn-success"
                                            onclick="document.querySelector('#form').submit()"
                                            style="max-width: 100px !important; margin-left: 10px;">ایجاد
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="row bg-white px-3 text-center mb-3 mx-4 rounded p-3" style="border: 1px solid #d7d7d7;">
            <h4 class="mb-0">
                لیست تصاویر محصول: <u>{{ $product->galleries()->count() }}</u> عدد تصویر
            </h4>
        </div>

        <div class="page-content pt-0">
            <div class="container-fluid px-3">
                <div class="row w-75 mx-auto">
                    @foreach($product->galleries as $key => $file)
                        <div class="col-12 col-lg-4 col-md-3 grid-margin stretch-card">
                            <div class="card border-2 rounded" style="border-color: #858585 !important;">
                                <img src="{{ $file->image_icon }}" alt="">
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
@endsection
