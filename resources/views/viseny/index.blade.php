@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')

<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
    <!-- Page Content-->

    <!-- Main Content-->
    <section class="container pt-2 mb-3">
        <div class="row pt-2" style="background:none;">
            <div class="col-md-12 hidden-xs-down hidden-sm-down">
                <div class="alert alert-no-padding alert-image-bg alert-dismissible fade show text-center mb-2"
                     style="background-image: url();"><span class="alert-close text-white" data-dismiss="alert"></span>
                    <a href="#"><img src="/viseny/img/banners/top-banner.jpg"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 order-lg-2 mb-2" style="padding-right:7px">
                <!-- Main Slider-->
                <section class="slice-thubm-slider mb-2" style="width:100%;max-width:900px;height:300px;">
                    <div class="demo-cont soft-shadow rounded-5">
                        <!-- slider start -->
                        <div class="fnc-slider example-slider">
                            <div class="fnc-slider__slides">
                                <!-- slide start -->
                                <a href="#">
                                    <div class="fnc-slide m--blend-dark m--active-slide">
                                        <div class="fnc-slide__inner"
                                             style="background-image: url('/viseny/img/hero-slider/johanson.jpg')">
                                            <div class="fnc-slide__content">
                                                <h2 class="fnc-slide__heading">
                                                    <div class="fnc-slide__heading-line">
                                                        <span>پنجره مشکی</span>
                                                    </div>
                                                    <div class="fnc-slide__heading-line">
                                                        <span style="font-size:14px">هر آنچه میخواهید خلق کنید</span>
                                                    </div>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- slide end -->
                                <!-- slide start -->
                                <div class="fnc-slide m--blend-dark">
                                    <div class="fnc-slide__inner"
                                         style="background-image: url('/viseny/img/hero-slider/captainamerica.jpg')">

                                        <div class="fnc-slide__content">
                                            <h2 class="fnc-slide__heading">
                                                <div class="fnc-slide__heading-line">
                                                    <span>کاپتان آمریکایی</span>
                                                </div>
                                                <div class="fnc-slide__heading-line">
                                                    <span style="font-size:14px">افسانه ای در دوردست ، از خیال تا واقعیت</span>
                                                </div>
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <!-- slide end -->
                                <!-- slide start -->
                                <div class="fnc-slide m--blend-red">
                                    <div class="fnc-slide__inner"
                                         style="background-image: url('/viseny/img/hero-slider/ironman.jpg')">

                                        <div class="fnc-slide__content">
                                            <h2 class="fnc-slide__heading">
                                                <div class="fnc-slide__heading-line">
                                                    <span>مرد آهنی</span>
                                                </div>
                                                <div class="fnc-slide__heading-line">
                                                    <span style="font-size:14px">لباسی تمام فلزی ، نیرویی افسانه ای</span>
                                                </div>
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <!-- slide end -->
                                <!-- slide start -->
                                <div class="fnc-slide m--blend-blue">
                                    <div class="fnc-slide__inner"
                                         style="background-image: url('/viseny/img/hero-slider/thor.jpg')">

                                        <div class="fnc-slide__content">
                                            <h2 class="fnc-slide__heading">
                                                <div class="fnc-slide__heading-line">
                                                    <span>ثور</span>
                                                </div>
                                                <div class="fnc-slide__heading-line">
                                                    <span style="font-size:14px">یک قهرمان کهکشانی ، برخاسته از دنیای بیرون</span>
                                                </div>
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <!-- slide end -->
                                <!-- slide start -->
                                <div class="fnc-slide m--blend-dark">
                                    <div class="fnc-slide__inner"
                                         style="background-image: url('/viseny/img/hero-slider/spiderman.jpg')">
                                        <div class="fnc-slide__content">
                                            <h2 class="fnc-slide__heading">
                                                <div class="fnc-slide__heading-line">
                                                    <span>مرد عنکبوتی</span>
                                                </div>
                                                <div class="fnc-slide__heading-line">
                                                    <span style="font-size:14px">معلق در شهر </span>
                                                </div>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide end -->

                            </div>
                            <nav class="fnc-nav">
                                <div class="fnc-nav__bgs">
                                    <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                                    <div class="fnc-nav__bg m--navbg-dark"></div>
                                    <div class="fnc-nav__bg m--navbg-red"></div>
                                    <div class="fnc-nav__bg m--navbg-blue"></div>
                                    <div class="fnc-nav__bg m--navbg-blue"></div>
                                </div>
                                <div class="fnc-nav__controls">
                                    <button class="fnc-nav__control">
                                        پنجره مشکی
                                        <span class="fnc-nav__control-progress"></span>
                                    </button>
                                    <button class="fnc-nav__control">
                                        کاپتان آمریکایی
                                        <span class="fnc-nav__control-progress"></span>
                                    </button>
                                    <button class="fnc-nav__control">
                                        مرد آهنی
                                        <span class="fnc-nav__control-progress"></span>
                                    </button>
                                    <button class="fnc-nav__control">
                                        ثور
                                        <span class="fnc-nav__control-progress"></span>
                                    </button>
                                    <button class="fnc-nav__control">
                                        مرد عنکبوتی
                                        <span class="fnc-nav__control-progress"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <!-- slider end -->
                    </div>
                </section>
                <!--Banner Promo-->
            @include('viseny.banners.topbanner')
            <!-- Promo #1-->
                <section class="pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="rounded bg-faded position-relative">
                                <span class="product-badge text-danger"
                                      style="top: 24px; left: 24px;">تعداد محدود</span>
                                <div class="text-center pb-3">
                                    <h3 class="h2 text-normal mb-1">جدید</h3>
                                    <h2 class="display-2 text-bold mb-2">عینک آفتابی</h2>
                                    <h4 class="h4 text-normal mb-4">حراج آخر فصل تاپ کالا</h4>
                                    <div class="countdown mb-3" data-date-time="09/30/2019 12:00:00">
                                        <div class="item">
                                            <div class="days">00</div>
                                            <span class="days_ref">روز</span>
                                        </div>
                                        <div class="item">
                                            <div class="hours">00</div>
                                            <span class="hours_ref">ساعت</span>
                                        </div>
                                        <div class="item">
                                            <div class="minutes">00</div>
                                            <span class="minutes_ref">دقیقه</span>
                                        </div>
                                        <div class="item">
                                            <div class="seconds">00</div>
                                            <span class="seconds_ref">ثانیه</span>
                                        </div>
                                    </div>
                                    <br><a class="btn btn-primary margin-bottom-none" href="#">نمایش تمام مجموعه</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="img-cover rounded"
                                 style="background-image: url(/viseny/img/banners/mo19951.jpg);"></div>
                        </div>
                    </div>
                </section>
                <!--Top Category-->
            @include('viseny.collections.newest')
            <!--Banner Promo-->
            @include('viseny.banners.midbanner')
            <!-- Featured Products Carousel-->
            @include('viseny.collections.mostviewed')
            <!--Banner Promo-->
            @include('viseny.banners.botbanner')
            <!-- Featured Products Carousel Slider -->
                <section class=" pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
                    <h6 class="text-right border-title mb-3">کالاهای ویژه همراه با اسلایدر محصولات</h6>
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
                                <a class="product-thumb mt-3" href="shop-single.html"><img
                                            src="/viseny/img/shop/products/36.jpg" alt="Product"></a>
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
                                            data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">
                                        افزودن به سبد
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
                                <a class="product-thumb mt-3" href="shop-single.html"><img
                                            src="/viseny/img/shop/products/37.jpg" alt="Product"></a>
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
                                            data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">
                                        افزودن به سبد
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
                                <a class="product-thumb mt-3" href="shop-single.html"><img
                                            src="/viseny/img/shop/products/38.jpg" alt="Product"></a>
                                <h3 class="product-title"><a href="shop-single.html">کلاه شاپوی مردانه طرح تابستانی</a>
                                </h3>
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
                                            data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">
                                        افزودن به سبد
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
                                <a class="product-thumb mt-3" href="shop-single.html"><img
                                            src="/viseny/img/shop/products/39.jpg" alt="Product"></a>
                                <h3 class="product-title"><a href="shop-single.html">کفش ورزشی شنساکو طرح مشکی -
                                        سفید</a></h3>
                                <h4 class="product-price">
                                    135000
                                    <span> تومان </span>
                                </h4>
                                <div class="product-buttons">
                                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                            title="علاقه مندی"><i class="icon-heart"></i></button>
                                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                            data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                            data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">
                                        افزودن به سبد
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
                                <a class="product-thumb mt-3" href="shop-single.html"><img
                                            src="/viseny/img/shop/products/40.jpg" alt="Product"></a>
                                <h3 class="product-title"><a href="shop-single.html">دستنبد فلزی با بند چرمی قفل
                                        شونده</a></h3>
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
                                            data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">
                                        افزودن به سبد
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
                                <a class="product-thumb mt-3" href="shop-single.html"><img
                                            src="/viseny/img/shop/products/33.jpg" alt="Product"></a>
                                <h3 class="product-title"><a href="shop-single.html">کفش ورزشی آدیداس با کفه سفید و
                                        سبز</a></h3>
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
                                            data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">
                                        افزودن به سبد
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div><!--end Inner content-->

            <!---------------------
                    Sidebar
            ---------------------->
            <aside class="col-md-3 col-sm-4 order-lg-1" style="padding-left:7px">
                <section
                        class="alert alert-no-padding alert-image-bg alert-dismissible fade show text-center mb-2 soft-shadow"
                        data-dismiss="alert"></span>
                    <img src="/viseny/img/blog/09.jpg"/>
                </section>
                <section
                        class="alert alert-no-padding alert-image-bg alert-dismissible fade show text-center mb-2 soft-shadow"
                        data-dismiss="alert"></span>
                    <img src="/viseny/img/blog/10.jpg"/>
                </section>
                <section class="alert alert-image-bg alert-dismissible fade show text-center mb-2 soft-shadow"
                         style="background-image: url(/viseny/img/blog/05.jpg);">
                    <span class="alert-close text-white" data-dismiss="alert"></span>
                    <div class="h5 text-medium padding-top-1x padding-bottom-1x bg-shadow" style="color:#000">
                        <i class="icon-clock" style="font-size: 25px; margin-top: -5px;"></i> حراج ویژه شب عید با 50%
                        تخفیف
                        <div class="mt-3 hidden-xl-up"></div>
                        <a class="btn btn-primary" href="#">نمایش حراجی</a>
                    </div>
                </section>

                <!-- Product Widgets-->
                <section class="mb-2" style="background:#fff">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            @include('viseny.lastproducts')
                        </div>
                    </div>
                </section>
                <section
                        class="alert alert-no-padding alert-image-bg alert-dismissible fade show text-center mb-2 soft-shadow"
                        data-dismiss="alert"></span>
                    <img src="/viseny/img/blog/03.jpg"/>
                </section>


                <!-- Widget Tags-->
                <section class="widget widget-tags soft-shadow mb-2" style="background:#fff">
                    <h3 class="widget-title widget-border">کلمات کلیدی</h3>
                    <a class="tag" href="#">دکوراسیون</a>
                    <a class="tag" href="#">فشن شو</a>
                    <a class="tag" href="#">گردشگری</a>
                    <a class="tag" href="#">ارسال رایگان کالا</a>
                    <a class="tag active" href="#">گارانتی بی قیدوشرط</a>
                </section>

                <!-- Product Widgets-->
                @include('viseny.topviewed')
                <!-- container -->
            </aside>
        </div><!--End Container Row-->
    </section>

    <!-- Promo #2-->
    <section class="container mb-3">
        <div class="row pt-2 pb-2" style="background:#f0eff1">
            <div class="col-xl-12 col-lg-12">
                <div class="fw-section rounded padding-top-4x padding-bottom-4x"
                     style="background-image: url(/viseny/img/blog/06.jpg);"><span class="overlay rounded"
                                                                                   style="opacity: .35;"></span>
                    <div class="text-center">
                        <h3 class="display-4 text-normal text-white text-shadow mb-3">کالکشن های قدیمی</h3>
                        <h2 class="display-2 text-bold text-white text-shadow">فروش بزرگ !</h2>
                        <h4 class="d-inline-block h2 text-normal text-white text-shadow border-default border-left-0 border-right-0 mb-4">
                            در فروشگاه های لباس ما</h4>
                        <br>
                        <a class="btn btn-primary margin-bottom-none" href="contacts.html">فروشگاه ها را تعیین کنید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Brands-->
    <section class="bg-faded padding-top-2x padding-bottom-4x"
             style="background:url(/viseny/img/background/brand-pattern.jpg);border:solid 1px #e1e7ec">
        <div class="container">
            <h5 class="text-center mb-30 pb-2">برند ها و همکاران ما</h5>
            <div class="owl-carousel"
                 data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }">
                <img class="d-block w-110  m-auto" src="/viseny/img/brands/10.png" data-toggle="tooltip"
                     title="خانه عکاسان ایران" alt="Adidas">
                <img class="d-block w-110  m-auto" src="/viseny/img/brands/11.png" data-toggle="tooltip"
                     title="ایران فیلم"
                     alt="Brooks">
                <img class="d-block w-110  m-auto" src="/viseny/img/brands/12.png" data-toggle="tooltip"
                     title="راست چین , قالب فارسی" alt="Valentino">
                <img class="d-block w-110  m-auto" src="/viseny/img/brands/13.png" data-toggle="tooltip"
                     title="شرکت لبنیاتی کاله" alt="Nike">
                <img class="d-block w-110  m-auto" src="/viseny/img/brands/14.png" data-toggle="tooltip"
                     title="گروه فنی مهندسی انار" alt="Puma">
                <img class="d-block w-110  m-auto" src="/viseny/img/brands/15.png" data-toggle="tooltip"
                     title="ایران زمین"
                     alt="New Balance">
                <img class="d-block w-110  m-auto" src="/viseny/img/brands/16.png" data-toggle="tooltip"
                     title="پروانه رنگی"
                     alt="Dior">
                <img class="d-block w-110  m-auto" src="/viseny/img/brands/17.png" data-toggle="tooltip" title="ژاکت"
                     alt="Dior">
                <img class="d-block w-110  m-auto" src="/viseny/img/brands/18.png" data-toggle="tooltip"
                     title="ماهان نیلبر"
                     alt="Dior">
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="container padding-top-2x padding-bottom-2x">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center mb-30">
                <img src="">
                <h6></h6>
                <p class="text-muted margin-bottom-none font-small"></p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3"
                     src="/viseny/img/services/garanti-e.png"
                     alt="Shipping">
                <a href="{{ route('visenyteam') }}"><h6>بازگشت بی قید و شرط محصول</h6></a>
                <p class="text-muted margin-bottom-none font-small">برگشت کالا در صورت نارضایتی مشتری</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3"
                     src="/viseny/img/services/orginal-e.png"
                     alt="Payment">
                <h6>ضمانت اصل بودن محصول</h6>
                <p class="text-muted margin-bottom-none font-small">مطمن باشید کالایی اصل و با کیفیت خواهید داشت</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30">
                <img src="">
                <h6></h6>
                <p></p>
            </div>
        </div>
    </section>
</div>
<!-- Site Footer-->
@include('viseny.layouts.footer')
