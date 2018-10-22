<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from moderniz.ir/demo/unishop/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 16:25:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>یونی شاپ | قالب فروشگاهی یونی شاپ
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords"
          content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('css/viseny/vendor.min.css')}}">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('css/viseny/styles.css')}}">
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('css/viseny/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/viseny/fancy-slider/style.css')}}">
    <!-- Modernizr-->
    <script src="{{asset('js/viseny/modernizr.min.js')}}"></script>
</head>
<!-- Body-->
<body>

<!-- Default Modal-->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="icon-unlock"></i> - ورود به تاپ کالا </h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body text-right">
                    <div class="row">
                        <div class="col-md-12 text-center mb-3 hidden-sm-down">
                            <img src="img/account/buffallo.png" width="100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="input-user">نام کاربری یا پست الکترونیک</label>
                                <input class="form-control" type="text" id="input-user"
                                       placeholder="نام کاربری را وارد کنید ">
                            </div>
                            <div class="form-group">
                                <label for="input-pass">کلمه عبور</label>
                                <input class="form-control" type="password" id="input-pass"
                                       placeholder="کلمه عبور را وارد کنید">
                            </div>
                        </div>
                    </div>
                    <div class="row padding-top-1x">
                        <div class="col-sm-6">
                            <div class="">
                                <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">مرا بخاطر بسپار</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" style="text-decoration:none">فراموشی کلمه عبور</a>
                        </div>
                    </div>
                    <button class="btn btn-rounded btn-success btn-sm col-md-12" type="button">ورود به تاپ کالا</button>
                </div>
                <div class="modal-footer">
                    <a href="#">
                        <button class="btn btn-rounded btn-primary btn-sm " type="button">ثبت نام نکرده اید , همین حالا
                            اقدام کنید
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Off-Canvas Category Menu-->
<div class="offcanvas-container" id="shop-categories">
    <a class="account-link" href="account-orders.html">
        <div class="user-ava"><img src="img/account/user-ava-md.jpg" alt="Daniel Adams"></div>
        <div class="user-info">
            <h6 class="user-name">محمد شجاع</h6><span class="text-sm text-white opacity-60">290 خرید ثبت شده</span>
        </div>
    </a>
    <nav class="offcanvas-menu">
        <ul class="menu">
            <li class="has-children"><span><a href="#">کفش های مردانه</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">کفش ورزشی</a></li>
                    <li><a href="#">کوهنوردی</a></li>
                    <li><a href="#">کفشهای پوتین</a></li>
                    <li><a href="#">کفش تابستانه</a></li>
                    <li><a href="#">نمایش همه</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">کفشهای زنانه</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">سندل زنانه</a></li>
                    <li><a href="#">تخت و اسلیم</a></li>
                    <li><a href="#">کوهنوردی</a></li>
                    <li><a href="#">پاشنه بلند</a></li>
                    <li><a href="#">نمایش همه</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">لباس های مردانه</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">تیشرت و بلوز</a></li>
                    <li><a href="#">پالتو</a></li>
                    <li><a href="#">ژاکت</a></li>
                    <li><a href="#">نمایش همه</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">لباس زنانه</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">پیراهن</a></li>
                    <li><a href="#">تیشرت و تاپ</a></li>
                    <li><a href="#">لباس زیر</a></li>
                    <li><a href="#">سوییشرت</a></li>
                    <li><a href="#">نمایش همه</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">کفش کودکان</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">پوتین</a></li>
                    <li><a href="#">سندل</a></li>
                    <li><a href="#">کفش اسپرت</a></li>
                    <li><a href="#">کوهنوردی</a></li>
                    <li><a href="#">نمایش همه</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">کیغ و چرم</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">کیف دستی</a></li>
                    <li><a href="#">کوله پشتی</a></li>
                    <li><a href="#">کیف تحصیل</a></li>
                    <li><a href="#">کیف رسمی و اداری</a></li>
                    <li><a href="#">نمایش همه</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">دستبند و آویز</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">دستبند فلزی</a></li>
                    <li><a href="#">سر بند</a></li>
                    <li><a href="#">ساعت لوکس</a></li>
                    <li><a href="#">گردنبند</a></li>
                    <li><a href="#">گوشواره</a></li>
                    <li><a href="#">نمایش همه</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- Off-Canvas Mobile Menu-->
<div class="offcanvas-container" id="mobile-menu">
    <a class="account-link" href="account-orders.html">
        <div class="user-ava"><img src="img/account/user-ava-md.jpg" alt="محمد شجاع" title="محمد شجاع"></div>
        <div class="user-info">
            <h6 class="user-name">محمد شجاع</h6><span class="text-sm text-white opacity-60">290 خرید ثبت شده</span>
        </div>
    </a>
    <nav class="offcanvas-menu">
        <ul class="menu">
            <li class="has-children active"><span><a href="index-2.html"><span>خانه</span></a><span
                            class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li class="active"><a href="index-2.html">ویژگی های اسلایدر محصولات</a></li>
                    <li><a href="home-featured-categories.html">ویژه دسته بندی ها</a></li>
                    <li><a href="home-collection-showcase.html">نمایش دسته بندی محصولات</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="shop-grid-ls.html"><span>فروشگاه</span></a><span
                            class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li>
                        <a href="shop-categories.html">دسته بندی فروشگاه</a>
                    </li>
                    <li class="has-children"><span><a href="shop-grid-ls.html"><span>نمایش جدولی</span></a><span
                                    class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-grid-ls.html">جدولی سایدبار چپ</a></li>
                            <li><a href="shop-grid-rs.html">جدولی سایدبار راست</a></li>
                            <li><a href="shop-grid-ns.html">جدولی بدون سایدبار</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="shop-list-ls.html"><span>نمایش خطی</span></a><span
                                    class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-list-ls.html">خطی سایدبار چپ</a></li>
                            <li><a href="shop-list-rs.html">خطی سایدبار راست</a></li>
                            <li><a href="shop-list-ns.html">خطی بدون سایدبار</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-single.html">صفحه محصولات</a></li>
                    <li><a href="cart.html">سبد خرید</a></li>
                    <li><a href="checkout.html">بررسی و پرداخت</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">دسته بندی ها</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li class="has-children"><span><a href="#">کفشهای مردانه</a><span
                                    class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">ورزشی</a></li>
                            <li><a href="#">کوهنوردی</a></li>
                            <li><a href="#">پوتین کفش</a></li>
                            <li><a href="#">سندل</a></li>
                            <li><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">کفشهای زنانه</a><span
                                    class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">سندل</a></li>
                            <li><a href="#">کفش تخت</a></li>
                            <li><a href="#">کوهنوردی</a></li>
                            <li><a href="#">پاشنه بلند</a></li>
                            <li><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">پوشاک مردانه</a><span
                                    class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">تیشرت مردانه</a></li>
                            <li><a href="#">پالتو</a></li>
                            <li><a href="#">ژاکت</a></li>
                            <li><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">پوشاک زنانه</a><span
                                    class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">پراهن زنانه</a></li>
                            <li><a href="#">تاپ و تیشرت</a></li>
                            <li><a href="#">لباس زیر</a></li>
                            <li><a href="#">سوییشرت</a></li>
                            <li><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">کیف و چرم</a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">کیف دستس</a></li>
                            <li><a href="#">کوله پشتی</a></li>
                            <li><a href="#">کیف مدرسه</a></li>
                            <li><a href="#">کیف اداری</a></li>
                            <li><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">آویز و تزیینی</a><span
                                    class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">ساعت مچی</a></li>
                            <li><a href="#">گردنبند</a></li>
                            <li><a href="#">دستبند</a></li>
                            <li><a href="#">انگشتر</a></li>
                            <li><a href="#">گوشواره</a></li>
                            <li><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-children"><span><a href="account-orders.html"><span>دسترسی ها</span></a><span
                            class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="account-login.html">ورود / ثبت نام</a></li>
                    <li><a href="account-password-recovery.html">فراموشی رمز</a></li>
                    <li><a href="account-orders.html">لیست سفارشات</a></li>
                    <li><a href="account-wishlist.html">علاقه مندی های من</a></li>
                    <li><a href="account-profile.html">صفحه پروفایل من</a></li>
                    <li><a href="account-address.html">مشخصات تماس و آدرسها</a></li>
                    <li><a href="account-open-ticket.html">ارسال درخواست</a></li>
                    <li><a href="account-tickets.html">درخواست های من</a></li>
                    <li><a href="account-single-ticket.html">درخواست تکی</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="blog-rs.html"><span>وبلاگ</span></a><span
                            class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li class="has-children"><span><a href="blog-rs.html"><span>طرح وبلاگ</span></a><span
                                    class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="blog-rs.html">وبلاگ با سایدبار راست</a></li>
                            <li><a href="blog-ls.html">وبلاگ با سایدبار چپ</a></li>
                            <li><a href="blog-ns.html">وبلاگ بدون سایدبار</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="blog-single-rs.html"><span>صفحه پست مطلب</span></a><span
                                    class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="blog-single-rs.html">مطلب با سایدبار راست</a></li>
                            <li><a href="blog-single-ls.html">مطلب با سایدبار چپ</a></li>
                            <li><a href="blog-single-ns.html">مطلب بدون سایدبار</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#"><span>صفحات</span></a><span
                            class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="about.html">درباره ما</a></li>
                    <li><a href="mobile-app.html">یونی شاپ اپلیکشن موبایل</a></li>
                    <li><a href="services.html">خدمات</a></li>
                    <li><a href="contacts.html">ارتباط با ما</a></li>
                    <li><a href="faq.html">راهنما / FAQ</a></li>
                    <li><a href="order-tracking.html">لیست سفارشات</a></li>
                    <li><a href="search-results.html">جستجوی نتایج</a></li>
                    <li><a href="404.html">404</a></li>
                    <li><a href="coming-soon.html">صفحه بزودی</a></li>
                    <li><a class="text-danger" href="docs/dev-setup.html">مستندات</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="components/accordion.html"><span>قابلیت ها</span></a><span
                            class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="components/accordion.html">آکاردئون</a></li>
                    <li><a href="components/alerts.html">خطا و هشدار</a></li>
                    <li><a href="components/buttons.html">دکمه ها</a></li>
                    <li><a href="components/cards.html">کارد ویزیت</a></li>
                    <li><a href="components/carousel.html">لغزنده ها</a></li>
                    <li><a href="components/countdown.html">شمارنده ها</a></li>
                    <li><a href="components/forms.html">فرم ها</a></li>
                    <li><a href="components/gallery.html">گالری</a></li>
                    <li><a href="components/google-maps.html">گوگل مپ</a></li>
                    <li><a href="components/images.html">تصاویر و جعبه نمایش</a></li>
                    <li><a href="components/list-group.html">نمایش خطی</a></li>
                    <li><a href="components/market-social-buttons.html">مارکت و دکمه های اجتماعی</a></li>
                    <li><a href="components/media.html">اشیا رسانه</a></li>
                    <li><a href="components/modal.html">مودال باکس</a></li>
                    <li><a href="components/pagination.html">صفحه بندی</a></li>
                    <li><a href="components/pills.html">انتخابگر</a></li>
                    <li><a href="components/progress-bars.html">نوار پیشرفت</a></li>
                    <li><a href="components/shop-items.html">المان فروشگاه</a></li>
                    <li><a href="components/steps.html">مرحله بندی</a></li>
                    <li><a href="components/tables.html">جداول</a></li>
                    <li><a href="components/tabs.html">تب شو</a></li>
                    <li><a href="components/team.html">تیم کاری</a></li>
                    <li><a href="components/toasts.html">رویدادهای لحظه ای</a></li>
                    <li><a href="components/tooltips-popovers.html">حباب عنوان</a></li>
                    <li><a href="components/typography.html">تایپو گرافی</a></li>
                    <li><a href="components/video-player.html">ویدئو پلیر</a></li>
                    <li><a href="components/widgets.html">ابزارک ها</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- Topbar-->

<div class="topbar">
    <div class="topbar-column">
        <a href="about.html" class="hidden-md-down" href="tel:00331697720">
            <i class="icon-map"></i>&nbsp; قوانین و مقررات فروش
        </a>
        <a href="about.html" class="hidden-md-down" href="tel:00331697720">
            <i class="icon-heart"></i>&nbsp; محاسبه هزینه ارسال
        </a>
        <a href="contacts.html" class="hidden-md-down" href="mailto:support@unishop.com">
            <i class="icon-mail"></i>&nbsp; درباره ما
        </a>
        <a href="contacts.html" class="hidden-md-down" href="tel:00331697720">
            <i class="icon-bell"></i>&nbsp; تماس با ما
        </a>
        <a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank">
            <i class="socicon-facebook"></i>
        </a>
        <a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank">
            <i class="socicon-twitter"></i>
        </a>
        <a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank">
            <i class="socicon-instagram"></i>
        </a>
        <a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank">
            <i class="socicon-pinterest"></i>
        </a>
    </div>
    <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; دریافت اپ
            موبایل</a>
        <div class="lang-currency-switcher-wrap">
            <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English"
                                                                                            src="img/flags/FA.png"></span><span
                        class="currency">تومان</span></div>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><img src="img/flags/GB.png" alt="Deutsch">English</a>
                <a class="dropdown-item" href="#"><img src="img/flags/FR.png" alt="Français">Français</a>
                <a class="dropdown-item" href="#"><img src="img/flags/IT.png" alt="Italiano">Italiano</a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->

<header class="navbar navbar-sticky">
    <!-- Search-->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="عبارت مورد جستجو را تایپ کنید . . .">
        <div class="search-tools"><span class="clear-search hidden-xs-down">پاک کردن</span><span class="close-search"><i
                        class="icon-cross"></i></span></div>
    </form>
    <div class="site-branding">
        <div class="inner">
            <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories"
                                                           data-toggle="offcanvas"></a>
            <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle " href="#mobile-menu"
                                                       data-toggle="offcanvas"></a>
            <!-- Site Logo--><a class="site-logo" href="index-2.html"><img src="img/logo/logo.png" alt="Unishop"></a>
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul>
            <li class="has-megamenu active"><a href="index-2.html"><span>خانه</span></a>
                <ul class="mega-menu">
                    <li><a class="d-block img-thumbnail text-center navi-link" href="index-2.html"><img
                                    alt="Featured Products Slider" src="img/mega-menu-home/01.jpg">
                            <h6 class="mt-3">با قابلیت اسلایدر محصولات</h6></a></li>
                    <li><a class="d-block img-thumbnail text-center navi-link" href="home-featured-categories.html"><img
                                    alt="Featured Categories" src="img/mega-menu-home/02.jpg">
                            <h6 class="mt-3">دسته بندی محصولات</h6></a></li>
                    <li><a class="d-block img-thumbnail text-center navi-link" href="home-collection-showcase.html"><img
                                    alt="Products Collection Showcase" src="img/mega-menu-home/03.jpg">
                            <h6 class="mt-3">محصولات طبقه بندی شده</h6></a></li>
                    <li><a class="d-block img-thumbnail text-center navi-link" href="coming-soon.html"><img
                                    alt="More To Come. Stay Tuned!" src="img/mega-menu-home/04.jpg">
                            <h6 class="mt-3">محصولات طبقه بندی شده</h6></a></li>
                </ul>
            </li>
            <li><a href="shop-grid-ls.html"><span>خرید / فروشگاه</span></a>
                <ul class="sub-menu">
                    <li><a href="shop-categories.html">دسته بندی فروشگاه</a></li>
                    <li class="has-children"><a href="shop-grid-ls.html"><span>نمایش جدولی</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-grid-ls.html">جدولی سایدبار از چپ</a></li>
                            <li><a href="shop-grid-rs.html">جدولی سایدبار از راست</a></li>
                            <li><a href="shop-grid-ns.html">جدولی بدون سایدبار</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="shop-list-ls.html"><span>نمایش لیستی ( خطی )</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-list-ls.html">خطی سایدبار از چپ</a></li>
                            <li><a href="shop-list-rs.html">خطی سایدبار از راست</a></li>
                            <li><a href="shop-list-ns.html">خطی بدون سایدبار</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-single.html">صفحه محصولات</a></li>
                    <li><a href="cart.html">سبد خرید</a></li>
                    <li class="has-children"><a href="checkout-address.html"><span>بررسی و پرداخت</span></a>
                        <ul class="sub-menu">
                            <li><a href="checkout-address.html">آدرس</a></li>
                            <li><a href="checkout-shipping.html">مراحل خرید</a></li>
                            <li><a href="checkout-payment.html">پرداخت مبلغ</a></li>
                            <li><a href="checkout-review.html">بازنگری</a></li>
                            <li><a href="checkout-complete.html">تکمیل فرایند</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-megamenu"><a href="#"><span>مگامنو</span></a>
                <ul class="mega-menu">
                    <li><span class="mega-menu-title">دسته بندی های برتر</span>
                        <ul class="sub-menu">
                            <li><a href="#">کفشهای مردانه</a></li>
                            <li><a href="#">کفشهای زنانه</a></li>
                            <li><a href="#">تیشرت و لباس</a></li>
                            <li><a href="#">ساعت ها</a></li>
                            <li><a href="#">شلوارک و اسلش</a></li>
                            <li><a href="#">گرد آویزها</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">بهترین خریداران</span>
                        <ul class="sub-menu">
                            <li><a href="#">محمد شجاع</a></li>
                            <li><a href="#">علی رستم تبار</a></li>
                            <li><a href="#">عباس فرجی</a></li>
                            <li><a href="#">مقداد صفری</a></li>
                            <li><a href="#">مسعود مجیدیان</a></li>
                            <li><a href="#">مهدی شجاع</a></li>
                        </ul>
                    </li>
                    <li>
                        <section class="promo-box" style="background-image: url('img/banners/02.jpg');"><span
                                    class="overlay-dark" style="opacity: .4;"></span>
                            <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                <h4 class="text-light text-thin text-shadow">مجموعه ای جدید از</h4>
                                <h3 class="text-bold text-light text-shadow">عینک آفتابی</h3><a
                                        class="btn btn-sm btn-primary" href="#">همین حالا خرید کنید</a>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="promo-box" style="background-image: url('img/banners/03.jpg');">
                            <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span
                                    class="overlay-dark" style="opacity: .45;"></span>
                            <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                <h3 class="text-bold text-light text-shadow">فروش ویژه و محدود</h3>
                                <h4 class="text-light text-thin text-shadow">تخفیف ویژه 50 درصدی</h4><a
                                        class="btn btn-sm btn-primary" href="#">بیشتر بدانید</a>
                            </div>
                        </section>
                    </li>
                </ul>
            </li>
            <li><a href="account-orders.html"><span>دسترسی اعضا</span></a>
                <ul class="sub-menu">
                    <li><a href="account-login.html">ورود / ثبت نام</a></li>
                    <li><a href="account-password-recovery.html">فراموشی رمز عبور</a></li>
                    <li><a href="account-orders.html">لیست سفارشات</a></li>
                    <li><a href="account-wishlist.html">لیست علاقه مندی</a></li>
                    <li><a href="account-profile.html">صفحه پروفایل</a></li>
                    <li><a href="account-address.html">تلفن ها / آدرس خریداران</a></li>
                    <li><a href="account-tickets.html">تیکت های من</a></li>
                    <li><a href="account-single-ticket.html">صفحه تیکت</a></li>
                </ul>
            </li>
            <li><a href="blog-rs.html"><span>وبلاگ</span></a>
                <ul class="sub-menu">
                    <li class="has-children"><a href="blog-rs.html"><span>طرح وبلاگ</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-rs.html">وبلاگ سایدبار در راست</a></li>
                            <li><a href="blog-ls.html">وبلاگ سایدبار در چپ</a></li>
                            <li><a href="blog-ns.html">وبلاگ بدون سایدبار</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="blog-single-rs.html"><span>صفحه پست مطلب</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-single-rs.html">مطلب با سایدبار راست</a></li>
                            <li><a href="blog-single-ls.html">مطلب با سایدبار چپ</a></li>
                            <li><a href="blog-single-ns.html">صفحه مطلب بدون سایدبار</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#"><span>صفحات</span></a>
                <ul class="sub-menu">
                    <li><a href="about.html">درباره ما</a></li>
                    <li><a href="contacts.html">ارتباط با ما</a></li>
                    <li><a href="faq.html">Help / FAQ</a></li>
                    <li><a href="order-tracking.html">سفارشات ثبت شده</a></li>
                    <li><a href="search-results.html">جستجوی نتایج</a></li>
                    <li><a href="404.html">404 صفحه پیدا نشد</a></li>
                    <li><a href="coming-soon.html">بزودی می آییم</a></li>
                    <li><a class="text-danger" href="docs/dev-setup.html">مستندات</a></li>
                </ul>
            </li>
            <li class="has-megamenu"><a href="components/accordion.html"><span>قابلیت ها</span></a>
                <ul class="mega-menu">
                    <li><span class="mega-menu-title">گروه اول</span>
                        <ul class="sub-menu">
                            <li><a href="components/accordion.html">آکاردئون</a></li>
                            <li><a href="components/alerts.html">هشدارها</a></li>
                            <li><a href="components/buttons.html">دکمه ها</a></li>
                            <li><a href="components/cards.html">کارد</a></li>
                            <li><a href="components/carousel.html">لغزنده ها</a></li>
                            <li><a href="components/countdown.html">شمارنده ها</a></li>
                            <li><a href="components/forms.html">فرم ها</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">گروه دوم</span>
                        <ul class="sub-menu">
                            <li><a href="components/gallery.html">گالری</a></li>
                            <li><a href="components/google-maps.html">گوگل مپ</a></li>
                            <li><a href="components/images.html">جعبه تصاویر</a></li>
                            <li><a href="components/list-group.html">نمایش گروهی خطی</a></li>
                            <li><a href="components/market-social-buttons.html">دکمه های شبکه اجتماعی</a></li>
                            <li><a href="components/media.html">اشیای رسانه</a></li>
                            <li><a href="components/modal.html">مودال باکس</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">گروه سوم</span>
                        <ul class="sub-menu">
                            <li><a href="components/pagination.html">صفحه بندی</a></li>
                            <li><a href="components/pills.html">انتخابگر ها</a></li>
                            <li><a href="components/progress-bars.html">نوار پیشرفت</a></li>
                            <li><a href="components/shop-items.html">آیتمهای فروشگاه</a></li>
                            <li><a href="components/steps.html">مرحله بندی</a></li>
                            <li><a href="components/tables.html">جداول</a></li>
                            <li><a href="components/tabs.html">تب شو</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">گروه چهارم</span>
                        <ul class="sub-menu">
                            <li><a href="components/team.html">گروه</a></li>
                            <li><a href="components/toasts.html">نمایش رویدادها</a></li>
                            <li><a href="components/tooltips-popovers.html">تولتیپ و حباب عنوان</a></li>
                            <li><a href="components/typography.html">تایپوگرافی</a></li>
                            <li><a href="components/video-player.html">ویدئو پلیر</a></li>
                            <li><a href="components/widgets.html">ابزارک ها</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search"><i class="icon-search"></i></div>
                <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava"><img src="img/account/user-ava-sm.jpg" alt="Daniel Adams">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">محمد شجاع</h6><span
                                        class="text-xs text-muted">290 خرید ثبت شده</span>
                            </div>
                        </li>
                        <li><a href="account-profile.html">مشخصات من</a></li>
                        <li><a href="account-orders.html">لیست سفارشات</a></li>
                        <li><a href="account-wishlist.html">علاقه مندیها</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="#" data-toggle="modal" data-target="#modalLogin"><i class="icon-unlock"></i>جعبه
                                ورود</a></li>
                        <li><a href="#"> <i class="icon-unlock"></i>خروج</a></li>
                    </ul>
                </div>
                <div class="cart"><a href="cart.html"></a><i class="icon-bag"></i><span class="count">3</span><span
                            class="subtotal">98300 تومان</span>
                    <div class="toolbar-dropdown">
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i
                                        class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img
                                        src="img/cart-dropdown/01.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title"
                                                                  href="shop-single.html">کفش ورزشی مردانه</a><span
                                        class="dropdown-product-details">54200 تومان</span> <span
                                        class="dropdown-product-details"> - 2</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i
                                        class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img
                                        src="img/cart-dropdown/02.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title"
                                                                  href="shop-single.html">کلاه بازی تنیس</a><span
                                        class="dropdown-product-details">54200 تومان</span> <span
                                        class="dropdown-product-details"> - 2</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i
                                        class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img
                                        src="img/cart-dropdown/03.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title"
                                                                  href="shop-single.html">کیف زنانه چرم آبی</a><span
                                        class="dropdown-product-details">54200 تومان</span> <span
                                        class="dropdown-product-details"> - 2</span></div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="cart.html">نمایش
                                    سبد</a></div>
                            <div class="column"><a class="btn btn-sm btn-block btn-success"
                                                   href="checkout-address.html">تسویه</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
    <!-- Page Content-->

    <!-- Main Content-->
    <section class="container pt-2 mb-3">
        <div class="row pt-2" style="background:none;">
            <div class="col-md-12 hidden-xs-down hidden-sm-down">
                <div class="alert alert-no-padding alert-image-bg alert-dismissible fade show text-center mb-2"
                     style="background-image: url('img/hero-slider/johanson.jpg');"><span class="alert-close text-white" data-dismiss="alert"></span>
                    <a href="#"><img src="img/banners/top-banner.jpg"></a>
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
                                             style="background-image: url('img/hero-slider/johanson.jpg')">
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
                                         style="background-image: url('img/hero-slider/captainamerica.jpg')">

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
                                         style="background-image: url('img/hero-slider/ironman.jpg')">

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
                                         style="background-image: url('img/hero-slider/thor.jpg')">

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
                                         style="background-image: url('img/hero-slider/spiderman.jpg')">
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
                <section class="alert alert-image-bg alert-dismissible fade show text-center mb-2"
                         style="background-image: url('img/banners/clock-benner.jpg');"><span
                            class="alert-close text-white" data-dismiss="alert"></span>
                    <div class="h4 text-medium text-white padding-top-1x padding-bottom-1x bg-shadow">
                        <i class="icon-clock" style="font-size: 33px; margin-top: -5px;"></i> حراج ویژه شب عید با 50%
                        تخفیف
                        <div class="mt-3 hidden-xl-up"></div>
                        <a class="btn btn-primary" href="#">نمایش حراجی</a>
                    </div>
                </section>
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
                                    <div class="countdown mb-3" data-date-time="09/30/2018 12:00:00">
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
                                 style="background-image: url('img/banners/mo19951.jpg');"></div>
                        </div>
                    </div>
                </section>
                <!--Top Category-->
                <section class="pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
                    <h6 class="text-right border-title mb-3"> نمایش دسته های دوست داشتنی </h6>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                                    <div class="inner">
                                        <div class="main-img"><img src="img/shop/categories/01.jpg" alt="Category"></div>
                                        <div class="thumblist"><img src="img/shop/categories/02.jpg" alt="Category"><img
                                                    src="img/shop/categories/03.jpg" alt="Category"></div>
                                    </div>
                                </a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">ژاکت و تن پوش</h4>
                                    <p class="text-muted">قیمت از 4990 تومان</p><a
                                            class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">نمایش
                                        محصولات</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                                    <div class="inner">
                                        <div class="main-img"><img src="img/shop/categories/04.jpg" alt="Category"></div>
                                        <div class="thumblist"><img src="img/shop/categories/05.jpg" alt="Category"><img
                                                    src="img/shop/categories/06.jpg" alt="Category"></div>
                                    </div>
                                </a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">کفش</h4>
                                    <p class="text-muted">قیمت از 5600 تومان</p><a
                                            class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">نمایش
                                        محصولات</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                                    <div class="inner">
                                        <div class="main-img"><img src="img/shop/categories/07.jpg" alt="Category"></div>
                                        <div class="thumblist"><img src="img/shop/categories/08.jpg" alt="Category"><img
                                                    src="img/shop/categories/09.jpg" alt="Category"></div>
                                    </div>
                                </a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">کیف</h4>
                                    <p class="text-muted">قیمت از 27000 تومان</p><a
                                            class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">نمایش
                                        محصولات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><a class="btn btn-secondary margin-top-none" href="shop-categories.html">دیدن
                            همه دسته ها</a></div>
                </section>
                <!--Banner Promo-->
                <section class="alert alert-image-bg alert-dismissible fade show text-center mb-2"
                         style="background-image: url('img/banners/food-banner.jpg');"><span
                            class="alert-close text-white" data-dismiss="alert"></span>
                    <div class="h4 text-medium text-white padding-top-1x padding-bottom-1x bg-shadow"><i
                                class="icon-clock" style="font-size: 33px; margin-top: -5px;"></i> حراج ویژه شب عید با 50%
                        تخفیف
                        <div class="mt-3 hidden-xl-up"></div>
                        <a class="btn btn-primary" href="#">نمایش حراجی</a>
                    </div>
                </section>
                <!-- Featured Products Carousel-->
                <!-- ↓↓↓↓↓↓↓↓ -->
                <section class=" pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
                    <h6 class="text-right border-title mb-3"> محصولات ویژه و پر طرفدار </h6>
                    <div class="owl-carousel"
                         data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;margin&quot;: 10, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
                        <!-- Product-->
                        @foreach($tablos as $tablo)
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
                                <a class="product-thumb mt-3" href="shop-single.html"><img height="400" width="100"
                                            src="{{ asset('/storage/tablo/'. $tablo->tablo_img) }}" alt="Product"></a>
                                <h3 class="product-title"><a href="shop-single.html">{{ $tablo->tablo_title }}</a></h3>
                                <h4 class="product-price">
                                    <del>{{ $tablo->tablo_price + ($tablo->tablo_price * (20 / 100)) }}</del>
                                    {{ $tablo->tablo_price }}
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
                            @endforeach
                    </div>
                        <!-- Product-->
                        {{--<div class="grid-item">--}}
                            {{--<div class="product-card">--}}
                                {{--<div class="rating-stars">--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star "></i>--}}
                                {{--</div>--}}
                                {{--<a class="product-thumb mt-3" href="shop-single.html"><img--}}
                                            {{--src="img/shop/products/31.jpg" alt="Product"></a>--}}
                                {{--<h3 class="product-title"><a href="shop-single.html">عینک ری بن مدل لامبورگینی</a></h3>--}}
                                {{--<h4 class="product-price">--}}
                                    {{--<del>134000</del>--}}
                                    {{--110000--}}
                                    {{--<span> تومان </span>--}}
                                {{--</h4>--}}
                                {{--<div class="product-buttons">--}}
                                    {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"--}}
                                            {{--title="علاقه مندی"><i class="icon-heart"></i></button>--}}
                                    {{--<button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"--}}
                                            {{--data-toast-position="topRight" data-toast-icon="icon-circle-check"--}}
                                            {{--data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">--}}
                                        {{--افزودن به سبد--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Product-->--}}
                        {{--<div class="grid-item">--}}
                            {{--<div class="product-card">--}}
                                {{--<div class="rating-stars">--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star "></i>--}}
                                    {{--<i class="icon-star "></i>--}}
                                {{--</div>--}}
                                {{--<a class="product-thumb mt-3" href="shop-single.html"><img--}}
                                            {{--src="img/shop/products/32.jpg" alt="Product"></a>--}}
                                {{--<h3 class="product-title"><a href="shop-single.html">کلاه شاپوی مردانه طرح تابستانی</a>--}}
                                {{--</h3>--}}
                                {{--<h4 class="product-price">--}}
                                    {{--<del>99.99</del>--}}
                                    {{--49.99--}}
                                    {{--<span> تومان </span>--}}
                                {{--</h4>--}}
                                {{--<div class="product-buttons">--}}
                                    {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"--}}
                                            {{--title="علاقه مندی"><i class="icon-heart"></i></button>--}}
                                    {{--<button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"--}}
                                            {{--data-toast-position="topRight" data-toast-icon="icon-circle-check"--}}
                                            {{--data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">--}}
                                        {{--افزودن به سبد--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Product-->--}}
                        {{--<div class="grid-item">--}}
                            {{--<div class="product-card">--}}
                                {{--<div class="rating-stars">--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                {{--</div>--}}
                                {{--<a class="product-thumb mt-3" href="shop-single.html"><img--}}
                                            {{--src="img/shop/products/33.jpg" alt="Product"></a>--}}
                                {{--<h3 class="product-title"><a href="shop-single.html">کفش ورزشی شنساکو طرح مشکی ---}}
                                        {{--سفید</a></h3>--}}
                                {{--<h4 class="product-price">--}}
                                    {{--135000--}}
                                    {{--<span> تومان </span>--}}
                                {{--</h4>--}}
                                {{--<div class="product-buttons">--}}
                                    {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"--}}
                                            {{--title="علاقه مندی"><i class="icon-heart"></i></button>--}}
                                    {{--<button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"--}}
                                            {{--data-toast-position="topRight" data-toast-icon="icon-circle-check"--}}
                                            {{--data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">--}}
                                        {{--افزودن به سبد--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Product-->--}}
                        {{--<div class="grid-item">--}}
                            {{--<div class="product-card">--}}
                                {{--<div class="rating-stars">--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star "></i>--}}
                                    {{--<i class="icon-star "></i>--}}
                                {{--</div>--}}
                                {{--<a class="product-thumb mt-3" href="shop-single.html"><img--}}
                                            {{--src="img/shop/products/34.jpg" alt="Product"></a>--}}
                                {{--<h3 class="product-title"><a href="shop-single.html">دستنبد فلزی با بند چرمی قفل--}}
                                        {{--شونده</a></h3>--}}
                                {{--<h4 class="product-price">--}}
                                    {{--<del>99.99</del>--}}
                                    {{--49.99--}}
                                    {{--<span> تومان </span>--}}
                                {{--</h4>--}}
                                {{--<div class="product-buttons">--}}
                                    {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"--}}
                                            {{--title="علاقه مندی"><i class="icon-heart"></i></button>--}}
                                    {{--<button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"--}}
                                            {{--data-toast-position="topRight" data-toast-icon="icon-circle-check"--}}
                                            {{--data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">--}}
                                        {{--افزودن به سبد--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Product-->--}}
                        {{--<div class="grid-item">--}}
                            {{--<div class="product-card">--}}
                                {{--<div class="product-badge text-danger">50%</div>--}}
                                {{--<div class="rating-stars">--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star filled"></i>--}}
                                    {{--<i class="icon-star "></i>--}}
                                    {{--<i class="icon-star "></i>--}}
                                {{--</div>--}}
                                {{--<a class="product-thumb mt-3" href="shop-single.html"><img--}}
                                            {{--src="img/shop/products/35.jpg" alt="Product"></a>--}}
                                {{--<h3 class="product-title"><a href="shop-single.html">کفش ورزشی آدیداس با کفه سفید و--}}
                                        {{--سبز</a></h3>--}}
                                {{--<h4 class="product-price">--}}
                                    {{--<del>99.99</del>--}}
                                    {{--49.99--}}
                                    {{--<span> تومان </span>--}}
                                {{--</h4>--}}
                                {{--<div class="product-buttons">--}}
                                    {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"--}}
                                            {{--title="علاقه مندی"><i class="icon-heart"></i></button>--}}
                                    {{--<button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"--}}
                                            {{--data-toast-position="topRight" data-toast-icon="icon-circle-check"--}}
                                            {{--data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">--}}
                                        {{--افزودن به سبد--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </section>
                <!--Banner Promo-->
                <section class="alert alert-image-bg alert-dismissible fade show text-center mb-2"
                         style="background-image: url('img/banners/banner3_04.jpg');"><span class="alert-close text-white"
                                                                                          data-dismiss="alert"></span>
                    <div class="h4 text-medium text-white padding-top-1x padding-bottom-1x bg-shadow"><i
                                class="icon-clock" style="font-size: 33px; margin-top: -5px;"></i> حراج ویژه شب عید با 50%
                        تخفیف
                        <div class="mt-3 hidden-xl-up"></div>
                        <a class="btn btn-primary" href="#">نمایش حراجی</a>
                    </div>
                </section>
                <!-- Featured Products Carousel Slider -->
                <section class=" pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
                    <h6 class="text-right border-title m  b-3">کالاهای ویژه همراه با اسلایدر محصولات</h6>
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
                                            src="img/shop/products/36.jpg" alt="Product"></a>
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
                                            src="img/shop/products/37.jpg" alt="Product"></a>
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
                                            src="img/shop/products/38.jpg" alt="Product"></a>
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
                                            src="img/shop/products/39.jpg" alt="Product"></a>
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
                                            src="img/shop/products/40.jpg" alt="Product"></a>
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
                                            src="img/shop/products/33.jpg" alt="Product"></a>
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
                    <img src="img/blog/09.jpg"/>
                </section>
                <section
                        class="alert alert-no-padding alert-image-bg alert-dismissible fade show text-center mb-2 soft-shadow"
                        data-dismiss="alert"></span>
                    <img src="img/blog/10.jpg"/>
                </section>
                <section class="alert alert-image-bg alert-dismissible fade show text-center mb-2 soft-shadow"
                         style="background-image: url('img/blog/05.jpg');">
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
                            <div class="widget widget-featured-products widget-border">
                                <h3 class="widget-title">ویدجت اخبار و اعلامیه</h3>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/widget/11.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">افزایش ۹۲ درصدی قیمت BMW </a>
                                        </h4>
                                        <span class="entry-meta">یکشنبه 19 فروردین 97</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/widget/12.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html"> اپلیکیشن‌های فعال در
                                                پس‌زمینه</a></h4>
                                        <span class="entry-meta">یکشنبه 19 فروردین 97</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/widget/13.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">عذرخواهی مارک زاکربرگ از
                                                کاربران</a></h4>
                                        <span class="entry-meta">یکشنبه 19 فروردین 97</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/widget/14.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">ارزان اما کارآمد؛ HP با کروم
                                                بوک</a></h4>
                                        <span class="entry-meta">یکشنبه 19 فروردین 97</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/widget/15.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">سقوط کاخ آسمانی چینی‌ها </a>
                                        </h4>
                                        <span class="entry-meta">یکشنبه 19 فروردین 97</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/widget/16.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">جف بزوس برای تامین مالی
                                                بلو </a></h4>
                                        <span class="entry-meta">یکشنبه 19 فروردین 97</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/widget/17.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">آیا علم می‌تواند پاسخگو
                                                باشد؟</a></h4>
                                        <span class="entry-meta">یکشنبه 19 فروردین 97</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/widget/03.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">کلاه شاپو سفید تابستانی</a>
                                        </h4>
                                        <span class="entry-meta">یکشنبه 19 فروردین 97</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/widget/18.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">کامیون‌الکتریکی سلطان
                                                جاده‌</a></h4>
                                        <span class="entry-meta">یکشنبه 19 فروردین 97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                        class="alert alert-no-padding alert-image-bg alert-dismissible fade show text-center mb-2 soft-shadow"
                        data-dismiss="alert"></span>
                    <img src="img/blog/03.jpg"/>
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
                <section class="mb-2" style="background:#fff">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="widget widget-featured-products widget-border">
                                <h3 class="widget-title"> محصولات پربازدید تاپ کالا</h3>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/30.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">میز سه پایه فلزی</a></h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان </span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/31.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">سبد پلاستیکی قرمز رنگ با دسته
                                                فلزی</a></h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/32.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">آبکش منحنی سبز رنگ</a></h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/33.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">جا ادویه دوطبقه چوبی طرح شلوغ
                                                پلوغ و جمع و جور</a></h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/34.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">دستگاه آرایشی چند کاره</a>
                                        </h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/35.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">اتوی موی دولبه برقی بسیار
                                                باکیفیت و کم مصرف</a></h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/36.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">دستگاه فر دستی باکیفیت</a>
                                        </h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/37.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">عینک ری بن طرح بنفش</a></h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/38.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">موبایل سامسونگ جی 5 مدل 2017
                                                و سنسور انگشت</a></h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/39.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">نمک پاشی دستی چند کاره
                                                خشابی</a></h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                                <!-- Entry-->
                                <div class="entry">
                                    <div class="entry-thumb"><a href="shop-single.html"><img
                                                    src="img/shop/products/40.jpg" alt="Product"></a></div>
                                    <div class="entry-content">
                                        <h4 class="entry-title"><a href="shop-single.html">کفش نایک طرح لامبورگینی </a>
                                        </h4>
                                        <span class="entry-meta"><del>45000</del> 27500 تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>

        </div><!--End Container Row-->
    </section><!-- container -->

    <!-- Promo #2-->
    <section class="container mb-3">
        <div class="row pt-2 pb-2" style="background:#f0eff1">
            <div class="col-xl-12 col-lg-12">
                <div class="fw-section rounded padding-top-4x padding-bottom-4x"
                     style="background-image: url('img/blog/06.jpg');"><span class="overlay rounded"
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
             style="background:url('img/background/brand-pattern.jpg');border:solid 1px #e1e7ec">
        <div class="container">
            <h5 class="text-center mb-30 pb-2">برند ها و همکاران ما</h5>
            <div class="owl-carousel"
                 data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }">
                <img class="d-block w-110  m-auto" src="img/brands/10.png" data-toggle="tooltip"
                     title="خانه عکاسان ایران" alt="Adidas">
                <img class="d-block w-110  m-auto" src="img/brands/11.png" data-toggle="tooltip" title="ایران فیلم"
                     alt="Brooks">
                <img class="d-block w-110  m-auto" src="img/brands/12.png" data-toggle="tooltip"
                     title="راست چین , قالب فارسی" alt="Valentino">
                <img class="d-block w-110  m-auto" src="img/brands/13.png" data-toggle="tooltip"
                     title="شرکت لبنیاتی کاله" alt="Nike">
                <img class="d-block w-110  m-auto" src="img/brands/14.png" data-toggle="tooltip"
                     title="گروه فنی مهندسی انار" alt="Puma">
                <img class="d-block w-110  m-auto" src="img/brands/15.png" data-toggle="tooltip" title="ایران زمین"
                     alt="New Balance">
                <img class="d-block w-110  m-auto" src="img/brands/16.png" data-toggle="tooltip" title="پروانه رنگی"
                     alt="Dior">
                <img class="d-block w-110  m-auto" src="img/brands/17.png" data-toggle="tooltip" title="ژاکت"
                     alt="Dior">
                <img class="d-block w-110  m-auto" src="img/brands/18.png" data-toggle="tooltip" title="ماهان نیلبر"
                     alt="Dior">
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="container padding-top-2x padding-bottom-2x">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center mb-30">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="images/services/garanti-e.png"
                     alt="Shipping">
                <h6>بازگشت بی قید و شرط محصول</h6>
                <p class="text-muted margin-bottom-none font-small">برگشت کالا در صورت نارضایتی مشتری</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="images/services/pay-e.png"
                     alt="Money Back">
                <h6>پرداخت آنلاین درب منزل</h6>
                <p class="text-muted margin-bottom-none font-small">پس از دریافت و اطمینان از کالا پرداخت کنید</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="images/services/express-e.png"
                     alt="Support">
                <h6>حمل رایگان و سریع سفارش</h6>
                <p class="text-muted margin-bottom-none font-small">سفارش خود را بسرعت تحویل بگیرید</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="images/services/orginal-e.png"
                     alt="Payment">
                <h6>ضمانت اصل بودن محصول</h6>
                <p class="text-muted margin-bottom-none font-small">مطمن باشید کالایی اصل و با کیفیت خواهید داشت</p>
            </div>
        </div>
    </section>
    <!-- Site Footer-->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
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
                <div class="col-lg-3 col-md-6">
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
                <div class="col-lg-3 col-md-6">
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
                <div class="col-lg-3 col-md-6">
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
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="{{asset('js/viseny/vendor.min.js')}}"></script>
<script src="{{asset('js/viseny/scripts.min.js')}}"></script>
<script src="{{asset('js/viseny/fancy-slider/index.js')}}"></script>
</body>

<!-- Mirrored from moderniz.ir/demo/unishop/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 16:29:26 GMT -->
</html>
