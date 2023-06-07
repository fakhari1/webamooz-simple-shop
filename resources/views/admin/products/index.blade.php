@extends('admin.layouts.app')


@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title mb-3">لیست محصولات</h6>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table align-middle datatable dt-responsive table-check nowrap"
                                                            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                                            <thead>
                                                            <tr class="bg-transparent">
                                                                <th style="width: 30px;">

                                                                    <div class="form-check font-size-16">
                                                                        <input type="checkbox" name="check"
                                                                               class="form-check-input" id="checkAll">
                                                                        <label class="form-check-label"
                                                                               for="checkAll"></label>
                                                                    </div>
                                                                </th>
                                                                <th>#</th>
                                                                <th>نام محصول</th>
                                                                <th>تصویر محصول</th>
                                                                <th>قیمت (ریال)</th>
                                                                <th>دسته محصول</th>
                                                                <th>برند محصول</th>
                                                                <th style="width: 90px;">عملیات و امکانات</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @forelse($products as $key => $product)

                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check font-size-16">
                                                                            <input type="checkbox"
                                                                                   class="form-check-input">
                                                                            <label class="form-check-label"></label>
                                                                        </div>
                                                                    </td>

                                                                    <td style="text-align: center !important; max-width: 30px !important;">
                                                                        <a
                                                                            href="javascript: void(0);"
                                                                            class="text-dark fw-medium">
                                                                            {{ $product->id }}
                                                                        </a></td>
                                                                    <td>
                                                                        {{ $product->name }}
                                                                    </td>
                                                                    <td>
                                                                        <img src="{{ $product->image_icon }}"
                                                                             style="max-width: 100px !important;"
                                                                             alt="{{ $product->image_icon }}_img">
                                                                    </td>
                                                                    <td>
                                                                        {{ number_format($product->price)  }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $product->category->title_fa }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $product->brand->title_fa }}
                                                                    </td>

                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li>
                                                                                    <a class="dropdown-item d-flex justify-content-between w-75 mx-auto"
                                                                                       href="">
                                                                                        <i class="fas fa-images text-primary"></i>
                                                                                        <span
                                                                                            class="text-center ms-2">گالری تصاویر</span>
                                                                                    </a></li>
                                                                                <li>
                                                                                    <a class="dropdown-item d-flex justify-content-between w-75 mx-auto"
                                                                                       href="{{ route('admin.products.edit', $product->slug) }}">
                                                                                        <i class="fas fa-edit text-warning"></i>
                                                                                        <span
                                                                                            class="text-center">ویرایش</span>
                                                                                    </a></li>
                                                                                <li>
                                                                                    <a class="dropdown-item d-flex justify-content-between w-75 mx-auto"
                                                                                       href="#"
                                                                                       onclick="event.preventDefault(); document.querySelector('#form_{{ $product->id }}').submit()">
                                                                                        <i class="fas fa-trash text-danger ms-1"></i>
                                                                                        <span
                                                                                            class="text-center">حذف</span>
                                                                                    </a></li>
                                                                                <form
                                                                                    action="{{ route('admin.products.delete', $product->id) }}"
                                                                                    method="post"
                                                                                    id="form_{{ $product->id }}">
                                                                                    @csrf
                                                                                    @method('delete')
                                                                                </form>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td></td>
                                                                </tr>

                                                            @endforelse

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    {{ $products->links() }}
                                                </div>
                                                <!-- end table responsive -->
                                            </div>
                                            <!-- end card body -->
                                            <!-- end card -->
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

