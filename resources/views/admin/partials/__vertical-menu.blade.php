<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidebar -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">منو</li>

                <li>
                    <a href="{{ route('admin.index') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">داشبورد</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="fas fa-list"></i>
                        <span>دسته بندی ها</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">اپلیکیشن</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="apps-calendar.html">
                                <span data-key="t-calendar">تقویم</span>
                            </a>
                        </li>
                        <li>
                            <a href="datepicker.html">
                                <span data-key="t-chat">دیت پیکر شمسی</span>
                            </a>
                        </li>
                        <li>
                            <a href="apps-chat.html">
                                <span data-key="t-chat">چت</span>
                            </a>
                        </li>
                        <li>
                            <a href="index2.html">
                                <span data-key="t-chat">داشبورد 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-email">ایمیل</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-email-inbox.html" data-key="t-inbox">دریافتی</a></li>
                                <li><a href="apps-email-read.html" data-key="t-read-email">خوانده شده</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">صورتحساب</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-invoices-list.html" data-key="t-invoice-list">لیست صورتحساب ها</a></li>
                                <li><a href="apps-invoices-detail.html" data-key="t-invoice-detail">جزئیات صورتحساب</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-contacts">ارتباطات</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-contacts-grid.html" data-key="t-user-grid">ناحیه کاربری</a></li>
                                <li><a href="apps-contacts-list.html" data-key="t-user-list">لیست کاربران</a></li>
                                <li><a href="apps-contacts-profile.html" data-key="t-profile">پروفایل</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">احراز هویت</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login.html" data-key="t-login">لاگین</a></li>
                        <li><a href="pages-register.html" data-key="t-register">ثبت نام</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">صفحات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html" data-key="t-starter-page">صفحه خالی</a></li>
                        <li><a href="pages-maintenance.html" data-key="t-maintenance">صفحات ضروری</a></li>

                        <li><a href="pages-timeline.html" data-key="t-timeline">تایم لاین</a></li>
                        <li><a href="pages-faqs.html" data-key="t-faqs">سوالات</a></li>
                        <li><a href="pages-pricing.html" data-key="t-pricing">قیمت ها</a></li>
                        <li><a href="pages-404.html" data-key="t-error-404">صفحه ۴۰۴</a></li>
                        <li><a href="pages-500.html" data-key="t-error-500">صفحه ۵۰۰</a></li>
                    </ul>
                </li>



                <li class="menu-title mt-2" data-key="t-components">المنت ها</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">کامپوننت ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.html" data-key="t-alerts">هشدارها</a></li>
                        <li><a href="ui-buttons.html" data-key="t-buttons">دکمه ها</a></li>
                        <li><a href="ui-cards.html" data-key="t-cards">کاردها</a></li>
                        <li><a href="ui-carousel.html" data-key="t-carousel">اسلایدر</a></li>
                        <li><a href="ui-dropdowns.html" data-key="t-dropdowns">دراپ داون</a></li>
                        <li><a href="ui-grid.html" data-key="t-grid">بخش بندی</a></li>
                        <li><a href="ui-images.html" data-key="t-images">تصاویر</a></li>
                        <li><a href="ui-modals.html" data-key="t-modals">مدال ها</a></li>
                        <li><a href="ui-offcanvas.html" data-key="t-offcanvas">کانونس</a></li>
                        <li><a href="ui-progressbars.html" data-key="t-progress-bars">پراگرس بار</a></li>
                        <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">تب ها</a></li>
                        <li><a href="ui-typography.html" data-key="t-typography">تایپو گرافی</a></li>
                        <li><a href="ui-video.html" data-key="t-video">ویدئو</a></li>
                        <li><a href="ui-general.html" data-key="t-general">کلیات</a></li>
                        <li><a href="ui-colors.html" data-key="t-colors">رنگ ها</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="gift"></i>
                        <span data-key="t-ui-elements">المان ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">سوئیت الرت2</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="box"></i>
                        <span class="badge rounded-pill bg-soft-danger text-danger float-end">۷</span>
                        <span data-key="t-forms">فرم ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.html" data-key="t-form-elements">فرم ساده</a></li>

                        <li><a href="form-advanced.html" data-key="t-form-advanced">پلاگین های پیشرفته</a></li>
                        <li><a href="form-editors.html" data-key="t-form-editors">ادیتور ها</a></li>
                        <li><a href="form-uploads.html" data-key="t-form-upload">اپلود فایل</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="sliders"></i>
                        <span data-key="t-tables">جداول</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.html" data-key="t-basic-tables">جدول ساده</a></li>
                        <li><a href="tables-datatable.html" data-key="t-data-tables">دیتا تیبل</a></li>
                        <li><a href="tables-responsive.html" data-key="t-responsive-table">ریسپانسیو</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="pie-chart"></i>
                        <span data-key="t-charts">نمودارها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">چارت جی اس</a></li>
                        <li><a href="charts-flot.html" data-key="t-knob-charts">فلوت</a></li>
                        <li><a href="charts-sparkline.html" data-key="t-sparkline-charts">اسپارک لاین</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="cpu"></i>
                        <span data-key="t-icons">ایکون ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons.html" data-key="t-boxicons">باکس ایکون</a></li>
                        <li><a href="icons-materialdesign.html" data-key="t-material-design">جزئیات طراحی</a></li>
                        <li><a href="icons-dripicons.html" data-key="t-dripicons">دریپ ایکون</a></li>
                        <li><a href="icons-fontawesome.html" data-key="t-font-awesome">فونت اوسام</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="share-2"></i>
                        <span data-key="t-multi-level">چند سطحی</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" data-key="t-level-1-1">سطح 1-1-1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">سطح 1-1-2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-2-1">سطح 1-2-1</a></li>
                                <li><a href="javascript: void(0);" data-key="t-level-2-2">سطح 1-2-2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="{{ asset('dashboard/assets/images/giftbox.png') }}" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">افر ویژه</h5>
                        <p class="font-size-13">این ورژن دارای افر ویژه است</p>
                        <a href="#!" class="btn btn-primary mt-2">ثبت سفارش</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
