@extends('admin.layouts.app')


@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title mb-3">لیست برند ها</h6>

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
                                                                <th>نام برند</th>
                                                                <th>نام انگلیسی برند</th>
                                                                <th>تصویر</th>
                                                                <th style="width: 90px;">عملیات</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @forelse($brands as $key => $brand)

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
                                                                            {{ $brand->id }}
                                                                        </a></td>
                                                                    <td>
                                                                        {{ $brand->title_fa }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $brand->title_en }}
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="{{ '\storage\\' . $brand->image_url }}"
                                                                            alt="" style="max-width: 100px !important;">
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
                                                                                       href="{{ route('admin.brands.edit', $brand->id) }}">
                                                                                        <i class="fas fa-edit text-warning"></i>
                                                                                        <span
                                                                                            class="text-center">ویرایش</span>
                                                                                    </a></li>
                                                                                <li>
                                                                                    <a class="dropdown-item d-flex justify-content-between w-75 mx-auto"
                                                                                       href="#"
                                                                                       onclick="event.preventDefault(); document.querySelector('#form_{{ $brand->id }}').submit()">
                                                                                        <i class="fas fa-trash text-danger ms-1"></i>
                                                                                        <span
                                                                                            class="text-center">حذف</span>
                                                                                    </a></li>
                                                                                <form
                                                                                    action="{{ route('admin.brands.delete', $brand->id) }}"
                                                                                    method="post"
                                                                                    id="form_{{ $brand->id }}">
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
                                                    {{ $brands->links() }}
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

