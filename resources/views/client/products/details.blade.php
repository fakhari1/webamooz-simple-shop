@extends('client.layouts.app')

@section('content')

    @include('client.partials.__header')



    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>



    @include('client.partials.__footer')

@endsection

@if(Illuminate\Support\Facades\Route::is('client.products.show'))
@section('script')
    <script>
        $(window).on('load', function () {
            $('.categories_menu_toggle').hide();
        });
    </script>
@endsection
@endif
