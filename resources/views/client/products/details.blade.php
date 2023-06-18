@extends('client.layouts.app')

@section('content')

    @include('client.partials.__header')

    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">خانه</a></li>
                            <li><a href="#">جزئیات محصول</a></li>
                            <li>{{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <div class="product_page_bg">
        <div class="container">
            <div class="product_details_wrapper mb-55">
                <!--product details start-->
                <div class="product_details">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="product-details-tab">
                                <div id="img-1" class="zoomWrapper single-zoom">
                                    <a href="#">
                                        <img id="zoom1"
                                             src="{{ asset($product->image_zoom_url) }}"
                                             data-zoom-image="{{ asset($product->image_zoom_url) }}"
                                             alt="big-1">
                                    </a>
                                </div>
                                <div class="single-zoom-thumb">
                                    <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active"
                                               data-update=""
                                               data-image="{{ asset($product->image_zoom_url) }}"
                                               data-zoom-image="{{ asset($product->image_zoom_url) }}">
                                                <img src="{{ asset($product->image_zoom_url) }}" alt="zo-th-1">
                                            </a>

                                        </li>
                                        @foreach($product->galleries as $key => $gallery)
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active"
                                                   data-update=""
                                                   data-image="{{ asset($gallery->image_icon) }}"
                                                   data-zoom-image="{{ asset($gallery->image_icon) }}">
                                                    <img src="{{ asset($gallery->image_icon) }}" alt="zo-th-1">
                                                </a>

                                            </li>
                                        @endforeach
                                        {{--                                        <li>
                                                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.jpg" data-zoom-image="assets/img/product/productbig1.jpg">
                                                                                        <img src="assets/img/product/productbig1.jpg" alt="zo-th-1">
                                                                                    </a>

                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.jpg" data-zoom-image="assets/img/product/productbig2.jpg">
                                                                                        <img src="assets/img/product/productbig2.jpg" alt="zo-th-1">
                                                                                    </a>

                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="assets/img/product/productbig3.jpg">
                                                                                        <img src="assets/img/product/productbig3.jpg" alt="zo-th-1">
                                                                                    </a>

                                                                                </li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="product_d_right">
                                <form action="#">

                                    <h3><a href="#">
                                            {{ $product->name }}
                                        </a></h3>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li class="review"><a href="#">( 1 نقد و بررسی )</a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">{{ number_format($product->price) }} تومان</span>
                                        <span class="current_price">{{ number_format($product->price) }} تومان</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>
                                            {{ $product->description }}
                                        </p>
                                    </div>
                                    <div class="product_variant color">
                                        <h3>گزینه های در دسترس</h3>
                                        <label>رنگ</label>
                                        <ul>
                                            <li class="color1"><a href="#"></a></li>
                                            <li class="color2"><a href="#"></a></li>
                                            <li class="color3"><a href="#"></a></li>
                                            <li class="color4"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_variant quantity">
                                        <label>تعداد</label>
                                        <input min="1" max="100" value="1" type="number">
                                        <button class="button" type="submit">افزودن به سبد</button>

                                    </div>
                                    <div class=" product_d_action">
                                        <ul>
                                            <li><a href="#" title="افزودن به علاقه‌مندی‌ها">+ افزودن به
                                                    علاقه‌مندی‌ها</a></li>
                                            <li><a href="#" title="افزودن به علاقه‌مندی‌ها">+ مقایسه</a></li>
                                        </ul>
                                    </div>
                                    <div class="product_meta">
                                        <span>دسته: <a href="#">پوشاک</a></span>
                                    </div>

                                </form>
                                <div class="priduct_social">
                                    <ul>
                                        <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                                                لایک</a></li>
                                        <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i>
                                                توییت</a></li>
                                        <li><a class="pinterest" href="#" title="pinterest"><i
                                                    class="fa fa-pinterest"></i> ذخیره</a></li>
                                        <li><a class="google-plus" href="#" title="google +"><i
                                                    class="fa fa-google-plus"></i> اشتراک گذاری</a></li>
                                        <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i>
                                                لینکدین</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--product details end-->

                <!--product info start-->
                <div class="product_d_info">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_d_inner">
                                <div class="product_info_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#info" role="tab"
                                               aria-controls="info" aria-selected="false">توضیحات</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                               aria-selected="false">مشخصات فنی</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                               aria-selected="false">نقد و برررسی (1)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel">
                                        <div class="product_info_content">
                                            <p>
                                                {{ $product->description }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sheet" role="tabpanel">
                                        <div class="product_d_table">
                                            <form action="#">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td class="first_child">جنس</td>
                                                        <td>پلی استر</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">سبک ها</td>
                                                        <td>دخترانه</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">خصوصیات</td>
                                                        <td>پیراهن کوتاه</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="product_info_content">
                                            <p>
                                                {{ $product->description }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                                        <div class="reviews_wrapper">
                                            <h2>1 نقد و بررسی برای این محصول</h2>
                                            <div class="reviews_comment_box">
                                                <div class="comment_thmb">
                                                    <img src="assets/img/blog/comment2.jpg" alt="">
                                                </div>
                                                <div class="comment_text">
                                                    <div class="reviews_meta">
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p><strong>مدیر </strong>- 12 آذر 1398</p>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است</p>
                                                </div>

                                            </div>
                                            <div class="comment_title">
                                                <h2>یک نقد و بررسی بنویسید </h2>
                                                <p>ایمیل شما منتشر نخواهد شد. فیلد های الزامی مشخص شده اند</p>
                                            </div>
                                            <div class="product_rating mb-10">
                                                <h3>امتیاز شما</h3>
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_review_form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="review_comment">نقد و بررسی شما </label>
                                                            <textarea name="comment" id="review_comment"></textarea>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="author">نام</label>
                                                            <input id="author" type="text">

                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="email">ایمیل </label>
                                                            <input id="email" type="email" dir="ltr">
                                                        </div>
                                                    </div>
                                                    <button type="submit">ثبت</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product info end-->
            </div>

            <!--product area start-->
            <section class="product_area related_products">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>محصولات مرتبط </h2>
                        </div>
                    </div>
                </div>
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product14.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product13.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از صنعت</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">80,000 تومان</span>
                                        <span class="current_price">70,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product17.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product18.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از صنعت چاپ</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">76,000 تومان</span>
                                        <span class="current_price">75,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product19.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product20.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از صنعت چاپ و با</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">86,000 تومان</span>
                                        <span class="current_price">79,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product22.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product23.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">ساعت هوشمند سامسونگ مدل Gear
                                            Watch</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">82,000 تومان</span>
                                        <span class="current_price">75,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product24.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product25.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">72,000 تومان</span>
                                        <span class="current_price">70,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product26.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product27.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">65,000 تومان</span>
                                        <span class="current_price">60,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>

            </section>
            <!--product area end-->

            <!--product area start-->
            <section class="product_area upsell_products">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>محصولات پرفروش </h2>
                        </div>
                    </div>
                </div>
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product28.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product29.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از صنعت</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">80,000 تومان</span>
                                        <span class="current_price">70,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product7.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product8.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از صنعت چاپ</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">76,000 تومان</span>
                                        <span class="current_price">75,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product9.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product10.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">72,000 تومان</span>
                                        <span class="current_price">70,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product11.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product12.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">65,000 تومان</span>
                                        <span class="current_price">60,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product13.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product4.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم از صنعت چاپ و با</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">86,000 تومان</span>
                                        <span class="current_price">79,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/product15.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/product16.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">فروش</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="افزودن به علاقه‌مندی‌ها"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" title="افزودن به مقایسه"><i
                                                    class="ion-ios-settings-strong"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="مشاهده سریع"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="product-details.html">ساعت هوشمند سامسونگ مدل Gear
                                            Watch</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">82,000 تومان</span>
                                        <span class="current_price">75,000 تومان</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="افزودن به سبد">افزودن به سبد</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>
            </section>
            <!--product area end-->
        </div>
    </div>

    <!--footer area start-->
    <footer class="footer_widgets">
        <!--newsletter area start-->
        <div class="newsletter_area">
            <div class="container">
                <div class="newsletter_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-5">
                            <div class="newsletter_sing_up">
                                <h3>عضویت در خبرنامه</h3>
                                <p>با عضویت از <span>30% تخفیف</span> بهره مند شوید</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="subscribe_content">
                                <p><strong>به 226,000+ مشترک ما</strong> بپیوندید و از تخفیف های ویژه هفتگی مخصوص
                                    مشترکین خبرنامه بهره مند شوید.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off"
                                           placeholder="... آدرس ایمیل شما" dir="ltr">
                                    <button id="mc-submit">اشتراک</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter area end-->
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="widgets_container contact_us">
                            <h3>دریافت برنامه</h3>
                            <div class="aff_content">
                                <p>برنامه <strong>آنتومی</strong> هم اکنون در گوگل پلی و اپل استور آماده دریافت است.</p>
                            </div>
                            <div class="app_img">
                                <figure class="app_img">
                                    <a href="#"><img src="assets/img/icon/icon-appstore.png" alt=""></a>
                                </figure>
                                <figure class="app_img">
                                    <a href="#"><img src="assets/img/icon/icon-googleplay.png" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>اطلاعات</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">درباره ما</a></li>
                                    <li><a href="#">نحوه ارسال</a></li>
                                    <li><a href="#">محصولات جدید</a></li>
                                    <li><a href="#">محصولات برتر</a></li>
                                    <li><a href="my-account.html">حساب کاربری</a></li>
                                    <li><a href="#">سابقه خرید</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>حساب کاربری</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="my-account.html">حساب کاربری</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="wishlist.html">علاقه‌مندی‌ها</a></li>
                                    <li><a href="#">کاهش قیمت‌ها</a></li>
                                    <li><a href="#">سابقه خرید</a></li>
                                    <li><a href="#">سفارشات بین المللی</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>خدمات مشتری</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">نقشه سایت</a></li>
                                    <li><a href="my-account.html">حساب کاربری</a></li>
                                    <li><a href="#">نحوه ارسال</a></li>
                                    <li><a href="#">سابقه خرید</a></li>
                                    <li><a href="wishlist.html">علاقه‌مندی‌ها</a></li>
                                    <li><a href="#">ویژه ها</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-sm-12">
                        <div class="widgets_container">
                            <h3>اطلاعات تماس</h3>
                            <div class="footer_contact">
                                <div class="footer_contact_inner">
                                    <div class="contact_icone">
                                        <img src="assets/img/icon/icon-phone.png" alt="">
                                    </div>
                                    <div class="contact_text">
                                        <p>تلفن تماس 24 ساعته: <br> <strong class="ltr-text">(+98) 123 456 789</strong>
                                        </p>
                                    </div>
                                </div>
                                <p>تبریز، چهار راه آبرسان، فلکه دانشگاه، برج تجاری بلور، طبقه 456، واحد 45</p>
                            </div>

                            <div class="footer_social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>ارائه شده در وب‌سایت <a href="https://www.rtl-theme.com/" target="_blank">راست‌چین</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <img src="assets/img/icon/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                                   aria-controls="tab1" aria-selected="false"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                   aria-controls="tab2" aria-selected="false"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                   role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="assets/img/product/product9.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                   aria-controls="tab4" aria-selected="false"><img
                                                        src="assets/img/product/product14.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>گوشی هوشمند سامسونگ A50</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">64,000 تومان</span>
                                        <span class="old_price">78,000 تومان</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                            ابزارهای </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>اندازه</h2>
                                            <select class="select_option">
                                                <option selected value="1">کوچک</option>
                                                <option value="1">متوسط</option>
                                                <option value="1">بزرگ</option>
                                                <option value="1">XL</option>
                                                <option value="1">XXL</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>رنگ</h2>
                                            <select class="select_option">
                                                <option selected value="1">بنفش</option>
                                                <option value="1">اطلسی</option>
                                                <option value="1">مشکی</option>
                                                <option value="1">صورتی</option>
                                                <option value="1">نارنجی</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">افزودن به سبد</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>اشتراک گذاری این محصول</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->


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
