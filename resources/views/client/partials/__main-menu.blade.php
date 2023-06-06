<div class="main_menu menu_position text-center">
    <nav>
        <ul>
            <li><a class="active" onclick="event.preventDefault()">برند ها<i class="fa fa-angle-down"></i></a>
                <ul class="sub_menu" style="padding: 0 !important;" >
                    @foreach($brands as $key => $brand)
                        <li class="border-bottom" style="padding: 5px 15px">
                            <a href="#" class="d-flex justify-content-between align-content-center">
                                <span>{{ $brand->title_fa }}</span>
                                <span><img src="{{ $brand->image_url }}" alt="" style="max-height: 20px !important;"></span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="mega_items"><a href="shop.html">فروشگاه<i class="fa fa-angle-down"></i></a>
                <div class="mega_menu">
                    <ul class="mega_menu_inner">
                        <li><a href="#">طرح های فروشگاه</a>
                            <ul>
                                <li><a href="shop-fullwidth.html">تمام عرض</a></li>
                                <li><a href="shop-fullwidth-list.html">تمام عرض لیست</a></li>
                                <li><a href="shop-left-sidebar.html">نوار کناری چپ </a></li>
                                <li><a href="shop-left-sidebar-list.html"> نوار کناری چپ لیست</a></li>
                                <li><a href="shop-list.html">نمایش لیست</a></li>
                            </ul>
                        </li>
                        <li><a href="#">سایر صفحات</a>
                            <ul>
                                <li><a href="cart.html">سبد خرید</a></li>
                                <li><a href="wishlist.html">لیست علاقه‌مندی‌ها</a></li>
                                <li><a href="checkout.html">پرداخت</a></li>
                                <li><a href="my-account.html">حساب کاربری</a></li>
                                <li><a href="404.html">خطای 404</a></li>
                            </ul>
                        </li>
                        <li><a href="#">انواع محصول</a>
                            <ul>
                                <li><a href="product-details.html">جزئیات محصول</a></li>
                                <li><a href="product-sidebar.html">محصول با نوار کناری</a></li>
                                <li><a href="product-grouped.html">محصول گروهبندی شده</a></li>
                                <li><a href="variable-product.html">محصول متغیر</a></li>
                                <li><a href="product-countdown.html">محصول شمارنده</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="blog.html">بلاگ<i class="fa fa-angle-down"></i></a>
                <ul class="sub_menu pages">
                    <li><a href="blog-details.html">جزئیات مطلب بلاگ</a></li>
                    <li><a href="blog-fullwidth.html">بلاگ تمام عرض</a></li>
                    <li><a href="blog-right-sidebar.html">نوار کناری راست</a></li>
                    <li><a href="blog-no-sidebar.html">بلاگ بدون نوار کناری</a></li>
                </ul>
            </li>
            <li><a href="#">صفحات <i class="fa fa-angle-down"></i></a>
                <ul class="sub_menu pages">
                    <li><a href="about.html">درباره ما</a></li>
                    <li><a href="faq.html">سوالات متداول</a></li>
                    <li><a href="privacy-policy.html">سیاست حریم خصوصی</a></li>
                    <li><a href="contact.html">تماس</a></li>
                    <li><a href="login.html">ورود</a></li>
                    <li><a href="404.html">خطای 404</a></li>
                    <li><a href="compare.html">مقایسه</a></li>
                    <li><a href="coming-soon.html">به زودی</a></li>
                </ul>
            </li>

            <li><a href="about.html">درباره ما</a></li>
            <li><a href="contact.html"> تماس با ما</a></li>
        </ul>
    </nav>
</div>
