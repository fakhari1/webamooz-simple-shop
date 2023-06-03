@extends('admin.layouts.app')


@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @include('admin.partials.__request-errors')

                <div class="row">
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title mb-3">لیست دسته بندی ها</h6>

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
                                                                <th style="width: 120px;">شناسه</th>
                                                                <th>نام دسته بندی</th>
                                                                <th>نام انگلیسی دسته بندی</th>
                                                                <th class="text-center">دسته پدر</th>
                                                                <th style="width: 90px;">عملیات</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @forelse($categories as $key => $category)

                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check font-size-16">
                                                                            <input type="checkbox"
                                                                                   class="form-check-input">
                                                                            <label class="form-check-label"></label>
                                                                        </div>
                                                                    </td>

                                                                    <td><a href="javascript: void(0);"
                                                                           class="text-dark fw-medium">
                                                                            {{ $category->id }}
                                                                        </a></td>
                                                                    <td>
                                                                        {{ $category->title_fa }}
                                                                    </td>
                                                                    <td>{{ $category->title_en }}</td>

                                                                    <td class="text-center">
                                                                        {{ $category->parent->title_fa ?? '-' }}
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
                                                                                       href="{{ route('admin.categories.edit', $category->id) }}">
                                                                                        <i class="fas fa-edit text-warning"></i>
                                                                                        <span
                                                                                            class="text-center">ویرایش</span>
                                                                                    </a></li>
                                                                                <li>
                                                                                    <a class="dropdown-item d-flex justify-content-between w-75 mx-auto"
                                                                                       href="{{ route('admin.categories.delete', $category->id) }}">
                                                                                        <i class="fas fa-trash text-danger ms-1"></i>
                                                                                        <span
                                                                                            class="text-center">حذف</span>
                                                                                    </a></li>
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
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title mb-3">ایجاد دسته بندی</h6>

                                <form class="forms-sample" method="post" action="{{ route('admin.categories.store') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="title_fa"
                                                   placeholder="نام دسته بندی">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="title_en"
                                                   placeholder="نام انگلیسی دسته بندی">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="parent_id"
                                               class="col-sm-3 col-form-label">دسته پدر</label>
                                        <div class="col-sm-9">
                                            <select name="parent_id" id="parent_id" class="form-select">
                                                <option disabled selected>انتخاب کنید</option>

                                                @foreach($categories as $key => $category)
                                                    @php $dash=''; @endphp

                                                    @if($category->parent == null)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->title_fa }}
                                                        </option>
                                                    @endif

                                                    @if(count($category->children))
                                                        @include('admin.category.__children',['categories' => $category->children])
                                                    @endif
                                                @endforeach
                                            </select>
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
