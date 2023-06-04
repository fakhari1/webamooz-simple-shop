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

                                <form class="forms-sample" method="post" action="{{ route('admin.brands.store') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="name"
                                                   placeholder="نام برند">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="file" class="form-label">تصویر برند</label>
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-end">
                                        <button type="submit" class="btn btn-success">ایجاد</button>
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


