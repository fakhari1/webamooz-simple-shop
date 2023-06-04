@extends('admin.layouts.app')


@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @include('admin.partials.__request-errors')

                <div class="row">
                    @include('admin.category.__list')

                    @include('admin.category.__create')
                </div>
            </div>
        </div>
    </div>

@endsection

