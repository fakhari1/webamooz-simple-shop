@extends('admin.layouts.app')


@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">داشبورد</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">فوداتکو</a></li>
                                    <li class="breadcrumb-item active">داشبورد</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">کیف پول من</span>
                                        <h4 class="mb-3">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate ">۴.</span>
                                        </h4>
                                    </div>

                                    <div class="col-6">
                                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success ">۳۱</span>
                                    <span class="ms-1 text-muted font-size-13">ازهفته گذشته تاکنون</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">تعداد تراکنش ها</span>
                                        <h4 class="mb-3">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">۵۴.۳۸۱</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-danger text-danger">۲۴تراکنش</span>
                                    <span class="ms-1 text-muted font-size-13">ازهفته گذشته تاکنون</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">درامد</span>
                                        <h4 class="mb-3">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">۲۴.۳۸</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">۲۴.۳۸</span>
                                    <span class="ms-1 text-muted font-size-13">ازهفته گذشته تاکنون</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">سود خالص</span>
                                        <h4 class="mb-3">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">۲۵۴.۳۸</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">۲۴.۳۸</span>
                                    <span class="ms-1 text-muted font-size-13">ازهفته گذشته تاکنون</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row-->
                <div class="row">
                    <div class="col-12 col-xl-12 grid-margin stretch-card">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                                    <h6 class="card-title mb-0">درآمد</h6>
                                    <div class="dropdown">
                                        <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye"
                                                    class="icon-sm me-2"></i> <span class="">مشاهده</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2"
                                                    class="icon-sm me-2"></i> <span class="">ویرایش</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash"
                                                    class="icon-sm me-2"></i> <span class="">حذف</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="printer"
                                                    class="icon-sm me-2"></i> <span class="">چاپ</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="download"
                                                    class="icon-sm me-2"></i> <span class="">دانلود</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col-md-7">
                                        <p class="text-muted tx-13 mb-3 mb-md-0">نمودار فعالیت های تجاری</p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-md-end">
                                        <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-outline-primary">امروز</button>
                                            <button type="button" class="btn btn-outline-primary d-none d-md-block">
                                                هفته
                                            </button>
                                            <button type="button" class="btn btn-primary">ماه</button>
                                            <button type="button" class="btn btn-outline-primary">سال</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="revenueChartRTL"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">تجارت</h4>
                                <div class="flex-shrink-0">
                                    <ul class="nav nav-tabs-custom card-header-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#buy-tab" role="tab">خرید</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#sell-tab"
                                               role="tab">فروش</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="buy-tab" role="tabpanel">
                                        <div class="float-end ms-2">
                                            <h5 class="font-size-14"><i
                                                    class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i>
                                                <a href="#!" class="text-reset text-decoration-underline">۲۳,۷۵۴.۲۵</a>
                                            </h5>
                                        </div>
                                        <h5 class="font-size-14 mb-4">خرید ارز</h5>
                                        <div>
                                            <div class="form-group mb-3">
                                                <label>روش پرداخت:</label>
                                                <select class="form-select">
                                                    <option>درگاه پرداخت مستقیم</option>
                                                    <option>کارت اعتباری</option>
                                                    <option>پی پال</option>
                                                    <option>پایونر</option>
                                                    <option>استریپ</option>
                                                </select>
                                            </div>

                                            <div>
                                                <label>مبلغ را اضافه کنید :</label>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">مبلغ</label>
                                                    <select class="form-select" style="max-width: 90px;">
                                                        <option value="BT" selected>بیت کوین</option>
                                                        <option value="ET">اتریوم</option>
                                                        <option value="LT">لایت کوین</option>
                                                    </select>
                                                    <input type="text" class="form-control" placeholder="۲۵۴.۲۵">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">قیمت</label>
                                                    <input type="text" class="form-control" placeholder="۳,۵۴.۲۵">
                                                    <label class="input-group-text">تومان</label>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">جمع کل</label>
                                                    <input type="text" class="form-control" placeholder="۲۳,۷۴.۲">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="button" class="btn btn-success w-md">خرید ارز</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane" id="sell-tab" role="tabpanel">
                                        <div class="float-end ms-2">
                                            <h5 class="font-size-14"><i
                                                    class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i>
                                                <a href="#!" class="text-reset text-decoration-underline">۲,۷۵.۲۵</a>
                                            </h5>
                                        </div>
                                        <h5 class="font-size-14 mb-4">فروش ارز</h5>

                                        <div>

                                            <div class="form-group mb-3">
                                                <label>ایدی کیف:</label>
                                                <input type="email" class="form-control"
                                                       placeholder="1cvb254ugxvfcd280ki">
                                            </div>

                                            <div>
                                                <label>مبلغ را اضافه کنید:</label>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">مبلغ</label>

                                                    <select class="form-select" style="max-width: 90px;">
                                                        <option value="BT" selected>بیت کوین</option>
                                                        <option value="ET">اتریوم</option>
                                                        <option value="LT">لایت کوین</option>
                                                    </select>
                                                    <input type="text" class="form-control" placeholder="۶,۸۵۲.۴۱">
                                                </div>

                                                <div class="input-group mb-3">

                                                    <label class="input-group-text">قیمت</label>

                                                    <input type="text" class="form-control" placeholder="۲۳,۷۵۴.۲۵">

                                                    <label class="input-group-text">تومان</label>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">جمع کل</label>
                                                    <input type="text" class="form-control" placeholder="۶,۸۵۲.۴۱">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="button" class="btn btn-danger w-md">فروش ارز</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">تراکنش ها</h4>
                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab"
                                               role="tab">
                                                کل
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab"
                                               role="tab">
                                                خرید
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab"
                                               role="tab">
                                                فروش
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- end nav tabs -->
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body px-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table align-middle table-nowrap table-borderless">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید بیت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۹</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۰۱۶ BTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۴۹.۸۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۹</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۳۹.۸۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید لایت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۸</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۱.۸۸ LTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۴۹.۸۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید اتریوم</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۸</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۲۹.۸۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش بیت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۷</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۵۹.۹۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید بیت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۷</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۷۹.۹۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۷</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۲۹.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table align-middle table-nowrap table-borderless">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید بیت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۷</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۳۹.۸۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید بیت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۶</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۳۹.۸۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید لایت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۶</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۲۹.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید اتریوم</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۶</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۸۹.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید اتریوم</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۴</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۴۲ ETH</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۹۴.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید اتریوم</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۴</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۴۴.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="font-size-22 text-success">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">خرید بیت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۳</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۰۱۶ BTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۴۴.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table align-middle table-nowrap table-borderless">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۳</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۷۴.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش بیت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۳</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۰۱۶ BTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۷۴.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش بیت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۳</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۰۱۸ BTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۸۴.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۲</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۳۴.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش لایت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۱</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۱.۸۸ LTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۹۴.۲۲</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۱</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۴۲ ETH</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۷۱.۲۵</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="font-size-22 text-danger">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">فروش بیت کوین</h5>
                                                            <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۰</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 mb-0">۰.۰۱۶ BTC</h5>
                                                            <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <h5 class="font-size-14 text-muted mb-0">۸۱.۲۵</h5>
                                                            <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">فعالیت های اخیر</h4>
                                <div class="flex-shrink-0">
                                    <select class="form-select form-select-sm mb-0 my-n1">
                                        <option value="Today" selected="">امروز</option>
                                        <option value="Yesterday">دیروز</option>
                                        <option value="Week">هفته گذشته</option>
                                        <option value="Month">ماه گذشته</option>
                                    </select>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body px-0">
                                <div class="px-3" data-simplebar style="max-height: 352px;">
                                    <ul class="list-unstyled activity-wid mb-0">

                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-md">
                                                        <span
                                                            class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                        </span>
                                            </div>
                                            <div class="timeline-list-item">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 overflow-hidden me-4">
                                                        <h5 class="font-size-14 mb-1">۱۴۰۱/۰۴/۱۰</h5>
                                                        <p class="text-truncate text-muted font-size-13">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                    </div>
                                                    <div class="flex-shrink-0 text-end me-3">
                                                        <h6 class="mb-1">BTC+۰.۵</h6>
                                                        <div class="font-size-13">۳۱.۲۵</div>
                                                    </div>

                                                    <div class="flex-shrink-0 text-end">
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-24"
                                                               role="button" data-bs-toggle="dropdown"
                                                               aria-haspopup="true">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">عملیات</a>
                                                                <a class="dropdown-item" href="#">دیگر</a>
                                                                <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-md">
                                                        <span
                                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-ethereum font-size-24"></i>
                                                        </span>
                                            </div>
                                            <div class="timeline-list-item">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 overflow-hidden me-4">
                                                        <h5 class="font-size-14 mb-1">۱۴۰۱/۰۴/۰۹</h5>
                                                        <p class="text-truncate text-muted font-size-13">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                    </div>
                                                    <div class="flex-shrink-0 text-end me-3">
                                                        <h6 class="mb-1">ETH-۲۰.۵</h6>
                                                        <div class="font-size-13">۸۱.۳۵</div>
                                                    </div>

                                                    <div class="flex-shrink-0 text-end">
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-24"
                                                               role="button" data-bs-toggle="dropdown"
                                                               aria-haspopup="true">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">عملیات</a>
                                                                <a class="dropdown-item" href="#">دیگر</a>
                                                                <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-md">
                                                        <span
                                                            class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                        </span>
                                            </div>
                                            <div class="timeline-list-item">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 overflow-hidden me-4">
                                                        <h5 class="font-size-14 mb-1">۱۴۰۱/۰۴/۰۹</h5>
                                                        <p class="text-truncate text-muted font-size-13">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                    </div>
                                                    <div class="flex-shrink-0 text-end me-3">
                                                        <h6 class="mb-1">BTC+۰.۵ </h6>
                                                        <div class="font-size-13">۶۱.۳۵</div>
                                                    </div>

                                                    <div class="flex-shrink-0 text-end">
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-24"
                                                               role="button" data-bs-toggle="dropdown"
                                                               aria-haspopup="true">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">عملیات</a>
                                                                <a class="dropdown-item" href="#">دیگر</a>
                                                                <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-md">
                                                        <span
                                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-litecoin font-size-24"></i>
                                                        </span>
                                            </div>
                                            <div class="timeline-list-item">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 overflow-hidden me-4">
                                                        <h5 class="font-size-14 mb-1">۱۴۰۱/۰۴/۰۷</h5>
                                                        <p class="text-truncate text-muted font-size-13">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                    </div>
                                                    <div class="flex-shrink-0 text-end me-3">
                                                        <h6 class="mb-1">LTC-۱.۵ </h6>
                                                        <div class="font-size-13">۹۱.۴۵</div>
                                                    </div>

                                                    <div class="flex-shrink-0 text-end">
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-24"
                                                               role="button" data-bs-toggle="dropdown"
                                                               aria-haspopup="true">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">عملیات</a>
                                                                <a class="dropdown-item" href="#">دیگر</a>
                                                                <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-md">
                                                        <span
                                                            class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                        </span>
                                            </div>
                                            <div class="timeline-list-item">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 overflow-hidden me-4">
                                                        <h5 class="font-size-14 mb-1">۱۴۰۱/۰۴/۰۶</h5>
                                                        <p class="text-truncate text-muted font-size-13">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                    </div>
                                                    <div class="flex-shrink-0 text-end me-3">
                                                        <h6 class="mb-1">BTC+۰.۵ </h6>
                                                        <div class="font-size-13">۵۷۹۱.۴۵</div>
                                                    </div>

                                                    <div class="flex-shrink-0 text-end">
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-24"
                                                               role="button" data-bs-toggle="dropdown"
                                                               aria-haspopup="true">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">عملیات</a>
                                                                <a class="dropdown-item" href="#">دیگر</a>
                                                                <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="activity-list">
                                            <div class="activity-icon avatar-md">
                                                        <span
                                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-litecoin font-size-24"></i>
                                                        </span>
                                            </div>
                                            <div class="timeline-list-item">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 overflow-hidden me-4">
                                                        <h5 class="font-size-14 mb-1">۱۴۰۱/۰۴/۰۶</h5>
                                                        <p class="text-truncate text-muted font-size-13">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                    </div>
                                                    <div class="flex-shrink-0 text-end me-3">
                                                        <h6 class="mb-1">LTC+.۵۵ </h6>
                                                        <div class="font-size-13">۹۱.۴۵</div>
                                                    </div>

                                                    <div class="flex-shrink-0 text-end">
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-24"
                                                               role="button" data-bs-toggle="dropdown"
                                                               aria-haspopup="true">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">عملیات</a>
                                                                <a class="dropdown-item" href="#">دیگر</a>
                                                                <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>


        @include('admin.partials.__footer')
    </div>
    <!-- end main content-->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

@endsection
