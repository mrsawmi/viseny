@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')
<!-- Mirrored from moderniz.ir/demo/unishop/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 16:30:54 GMT -->
<!-- Added by HTTrack -->
{{--included--}}
<!-- Page Title-->
<div class="page-title">
    <div class="container">
        <div class="column">
            <h1>صفحه تکی محصول</h1>
        </div>
        <div class="column">
            <ul class="breadcrumbs">
                <li><a href="index-2.html">خانه</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li><a href="shop-grid-ls.html">فروشگاه</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li>صفحه تکی محصول</li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Content-->
<div class="container padding-bottom-3x padding-top-1x mb-3 soft-shadow bg-white">
    <div class="row">
        <!-- Poduct Gallery-->
    @include('viseny.products.productimage')
    <!-- Product Info-->
    @include('viseny.products.profuctinfo')
    <!-- Product Tabs-->
    @include('viseny.products.productcomments')
    <!-- Related Products Carousel-->
        <!-- Carousel-->
        <!-- Featured Products Carousel Slider -->
        <section class=" pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
            <h6 class="text-right border-title mb-3">محصولاتی که ممکن است شما بپسندید</h6>
            <div class="owl-carousel"
                 data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;margin&quot;: 10, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}},&quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000 ,&quot;loop&quot;: true }">
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                            <i class="icon-star "></i>
                        </div>
                        <div class="product-badge text-danger">22%</div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/36.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">کفش زنانه مجلسی</a></h3>
                        <h4 class="product-price">
                            <del>99.99</del>
                            49.99
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/37.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">عینک ری بن مدل لامبورگینی</a></h3>
                        <h4 class="product-price">
                            <del>134000</del>
                            110000
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                            <i class="icon-star "></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/38.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">کلاه شاپوی مردانه طرح تابستانی</a></h3>
                        <h4 class="product-price">
                            <del>99.99</del>
                            49.99
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/39.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">کفش ورزشی شنساکو طرح مشکی - سفید</a></h3>
                        <h4 class="product-price">
                            135000
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                            <i class="icon-star "></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/40.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">دستنبد فلزی با بند چرمی قفل شونده</a></h3>
                        <h4 class="product-price">
                            <del>99.99</del>
                            49.99
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="product-badge text-danger">50%</div>
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                            <i class="icon-star "></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/33.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">کفش ورزشی آدیداس با کفه سفید و سبز</a></h3>
                        <h4 class="product-price">
                            <del>99.99</del>
                            49.99
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Site Footer-->
</div>
<!-- Mirrored from moderniz.ir/demo/unishop/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 16:31:18 GMT -->

@include('viseny.layouts.footer')
