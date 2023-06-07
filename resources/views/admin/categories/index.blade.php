@extends('admin.layouts.app')


@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @include('admin.partials.__request-errors')

                <div class="row">
                    @include('admin.categories.__list')

                    @include('admin.categories.__create')
                </div>
            </div>
        </div>
    </div>

@endsection

