<!--header area start-->
<header>
    <div class="main_header">
        <div class="container">
            <!--header top start-->
            <div class="header_top">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="antomi_message">
                            <p>ارسال رایگان - ضمانت بازگشت وجه 30 روزه</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="header_top_settings text-right">
                            <ul>
                                <li><a href="#">آدرس‌های فروشگاه</a></li>
                                <li><a href="#">پیگیری سفارش</a></li>
                                <li>تلفن تماس: <a class="ltr-text" href="tel:+(+98)800456789">(+98) 800 456 789 </a>
                                </li>
                                <li>ضمانت کیفیت محصولات</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->

            <!--header middel start-->
            <div class="header_middle sticky-header">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-6">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('client/assets/img/logo/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        @include('client.partials.__main-menu')
                    </div>
                    <div class="col-lg-3">
                        <div class="header_configure_area">
                            <div class="header_wishlist">
                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>
                                    <span class="wishlist_count">3</span>
                                </a>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="cart_price"><span>152,000 تومان</span> <i
                                            class="ion-ios-arrow-down"></i></span>
                                    <span class="cart_count">2</span>

                                </a>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="mini_cart_inner">
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img
                                                        src="{{ asset('client/assets/img/s-product/product.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">گوشی هوشمند سامسونگ A50</a>
                                                <p>تعداد: 1 × <span> 60,000 تومان </span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img
                                                        src="{{ asset('client/assets/img/s-product/product2.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">صندلی آشپزخانه پلاستیکی Nilper</a>
                                                <p>تعداد: 1 × <span> 60,000 تومان </span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>جمع اجزا:</span>
                                            <span class="price">138,000 تومان</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>جمع کل:</span>
                                            <span class="price">138,000 تومان</span>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="cart.html">مشاهده سبد</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html">پرداخت</a>
                                        </div>

                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->

            <!--header bottom satrt-->
           @include('client.partials.__top-header')
            <!--header bottom end-->
        </div>
    </div>
</header>
<!--header area end-->
