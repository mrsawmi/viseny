@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')
        <!DOCTYPE html>
<html lang="en">
<body>
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
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-3">
                    <!-- Contact Info-->
                    <section class="widget widget-light-skin">
                        <h3 class="widget-title">ارتباط با ما</h3>
                        <p class="text-white">تلفن (محمد شجاع ) : 1323 - 350 - 0935</p>
                        <p class="text-white">ایمیل : mohammadshoja65@gmail.com</p>
                        <p class="text-white">وبسایت : <a class="navi-link-light" href="http://moderniz.ir/">http://moderniz.ir</a>
                        </p>
                        <p><a class="navi-link-light" href="http://moderniz.ir/">توسعه و ترجمه تیم نرم افزاری مدرنیز</a>
                        </p>
                        <a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i
                                    class="socicon-facebook"></i></a>
                        <a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i
                                    class="socicon-twitter"></i></a>
                        <a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i
                                    class="socicon-instagram"></i></a>
                        <a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i
                                    class="socicon-googleplus"></i></a>
                    </section>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <!-- Mobile App Buttons-->
                    <section class="widget widget-light-skin">
                        <h3 class="widget-title">دکمه های مارکت موبایل</h3>
                        <a class="market-button apple-button mb-light-skin" href="#">
                            <span class="mb-subtitle">دانلود از مارکت</span>
                            <span class="mb-title">اپ استور</span>
                        </a>
                        <a class="market-button google-button mb-light-skin" href="#">
                            <span class="mb-subtitle">دانلود از مارکت</span>
                            <span class="mb-title">گوگل پلی</span></a>
                        <a class="market-button windows-button mb-light-skin" href="#">
                            <span class="mb-subtitle">دانلود از مارکت</span>
                            <span class="mb-title">ویندوز استور</span>
                        </a>
                    </section>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <!-- About Us-->
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title">درباره ما</h3>
                        <ul>
                            <li><a href="#">حرفه و مهارت</a></li>
                            <li><a href="moderniz.html">درباره مدرنیزز</a></li>
                            <li><a href="#">بیشتر بدانید</a></li>
                            <li><a href="#">خدمات و سرویسها</a></li>
                            <li><a href="#">وبلاگ گروه</a></li>
                            <li><a href="#">مزایای استفاده از این قالب</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <!-- Account / Shipping Info-->
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title">مشخصات حساب و دسترسی شما</h3>
                        <ul>
                            <li><a href="account-profile.html">پروفایل شما</a></li>
                            <li><a href="account-profile.html">قیمت و حمل و نقل</a></li>
                            <li><a href="account-profile.html">بازپرداخت و جایگزینی</a></li>
                            <li><a href="account-profile.html">مالیات</a></li>
                            <li><a href="account-address.html">اطلاعات تحویل</a></li>
                            <li><a href="account-profile.html">برنامه های وابسته</a></li>
                        </ul>
                    </section>
                </div>
            </div>
            <hr class="hr-light mt-2 margin-bottom-2x">
            <div class="row">
                <div class="col-md-7 padding-bottom-1x">
                    <!-- Payment Methods-->
                    <div class="margin-bottom-1x" style="max-width: 615px;"><img src="img/payment_methods.png"
                                                                                 alt="Payment Methods">
                    </div>
                </div>
                <div class="col-md-5 padding-bottom-1x">
                    <div class="margin-top-1x hidden-md-up"></div>
                    <!--Subscription-->
                    <form class="subscribe-form" action="http://moderniz.ir/" method="post" target="_blank" novalidate>
                        <div class="clearfix">
                            <div class="input-group input-light">
                                <input class="form-control" type="email" name="EMAIL"
                                       placeholder="ایمیل خود را وارد کنید ..."><span class="input-group-addon"><i
                                            class="icon-mail"></i></span>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                            </div>
                            <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                        </div>
                        <span class="form-text text-sm text-white opacity-50 text-right">برای عضویت در خبرنامه , دریافت تخفیف ها , آخرین اخبار ، و فروش های ویژه </span>
                    </form>
                </div>
            </div>
            <!-- Copyright-->
            <p class="footer-copyright text-right">© کلیه حقوق محفوظ است , ایجاد شده توسط &nbsp;<i
                        class="icon-heart text-danger"></i><a href="http://moderniz.ir/" target="_blank"> &nbsp;محمد
                    شجاع</a></p>
        </div>
    </footer>
</div>
<!-- Photoswipe container-->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="بستن (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="اشتراک"></button>
                <button class="pswp__button pswp__button--fs" title="تغییر وضعیت به تمام صفحه"></button>
                <button class="pswp__button pswp__button--zoom" title="زوم جلو / عقب"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="قبلی (جهت چپ)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="بعدی (جهت راست)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="{{ asset('viseny/js/vendor.min.js') }}"></script>
<script src="{{ asset('viseny/js/scripts.min.js') }}"></script>
</body>

<!-- Mirrored from moderniz.ir/demo/unishop/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 16:31:18 GMT -->
</html>
@include('viseny.layouts.footer')
