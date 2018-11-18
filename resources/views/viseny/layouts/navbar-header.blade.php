<!-- Navbar-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->

<header class="navbar navbar-sticky">
    <!-- Search-->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="بنویس تا واست پیداش کنم...">
        <div class="search-tools"><span class="clear-search hidden-xs-down">پاک کردن</span><span class="close-search"><i
                        class="icon-cross"></i></span></div>
    </form>
    <div class="site-branding">
        <div class="inner">
            <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories"
                                                           data-toggle="offcanvas"></a>
            <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle " href="#mobile-menu"
                                                       data-toggle="offcanvas"></a>
            <!-- Site Logo--><a class="site-logo" href="{{ route('users.home') }}"><img
                        src="{{ asset('/storage/logo.png') }}"
                        alt="VisenyArt"></a>
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul>
            <li class="has-megamenu active"><a href="{{ route('users.home') }}"><span>خانه</span></a>
                <ul class="mega-menu">
                    <li><a class="d-block img-thumbnail text-center navi-link" href="index-2.html"><img
                                    alt="Featured Products Slider" src="/viseny/img/mega-menu-home/01.jpg">
                            <h6 class="mt-3">با قابلیت اسلایدر محصولات</h6></a></li>
                    <li><a class="d-block img-thumbnail text-center navi-link" href="home-featured-categories.html"><img
                                    alt="Featured Categories" src="/viseny/img/mega-menu-home/02.jpg">
                            <h6 class="mt-3">دسته بندی محصولات</h6></a></li>
                    <li><a class="d-block img-thumbnail text-center navi-link" href="home-collection-showcase.html"><img
                                    alt="Products Collection Showcase" src="/viseny/img/mega-menu-home/03.jpg">
                            <h6 class="mt-3">محصولات طبقه بندی شده</h6></a></li>
                    <li><a class="d-block img-thumbnail text-center navi-link" href="coming-soon.html"><img
                                    alt="More To Come. Stay Tuned!" src="/viseny/img/mega-menu-home/04.jpg">
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
                        <section class="promo-box" style="background-image: url(/viseny/img/banners/02.jpg);"><span
                                    class="overlay-dark" style="opacity: .4;"></span>
                            <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                <h4 class="text-light text-thin text-shadow">مجموعه ای جدید از</h4>
                                <h3 class="text-bold text-light text-shadow">عینک آفتابی</h3><a
                                        class="btn btn-sm btn-primary" href="#">همین حالا خرید کنید</a>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="promo-box" style="background-image: url(/viseny/img/banners/03.jpg);">
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
            <li><a href="{{ route('users.profile.account',[\Illuminate\Support\Facades\Auth::user() ]) }}"><span>دسترسی اعضا</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('register') }}">ثبت نام</a></li>
                    <li><a href="{{ route('login') }}">ورود</a></li>
                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            خروج از حساب کاربری
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li>
                    <li><a href="account-password-recovery.html">فراموشی رمز عبور</a></li>
                    <li><a href="{{ route('users.profile.orders',[\Illuminate\Support\Facades\Auth::user()]) }}">لیست
                            سفارشات</a></li>
                    <li><a href="{{ route('users.profile.favorites',[\Illuminate\Support\Facades\Auth::user()]) }}">لیست
                            علاقه مندی</a></li>
                    <li><a href="{{ route('users.profile.account',[\Illuminate\Support\Facades\Auth::user()]) }}">صفحه
                            پروفایل</a></li>
                    <li><a href="{{ route('users.profile.addresses',[\Illuminate\Support\Facades\Auth::user()]) }}">تلفن
                            ها / آدرس خریداران</a></li>
                    <li><a href="{{ route('users.profile.tickets',[\Illuminate\Support\Facades\Auth::user()]) }}">تیکت
                            های من</a></li>
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
                    <li><a href="{{ route('about') }}">درباره ما</a></li>
                    <li><a href="{{ route('contactus') }}">ارتباط با ما</a></li>
                    <li><a href="{{ route('users.faq') }}">Help / FAQ</a></li>
                    <li><a href="{{ route('users.profile.orders',[\Illuminate\Support\Facades\Auth::user()]) }}">سفارشات
                            ثبت شده</a></li>
                    <li><a href="search-results.html">جستجوی نتایج</a></li>
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
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="account"><a
                                href="{{ route('users.profile.account',[\Illuminate\Support\Facades\Auth::user()]) }}"></a><i
                                class="icon-head"></i>
                        <ul class="toolbar-dropdown">
                            <li class="sub-menu-user">
                                @if(!empty(\Illuminate\Support\Facades\Auth::user()->user_img))
                                    <div class="user-ava"><img
                                                src="{{ asset('/storage/profile/'.\Illuminate\Support\Facades\Auth::user()->user_img) }}"
                                                alt="{{ \Illuminate\Support\Facades\Auth::user()->user_fullName }}">
                                    </div>
                                    @else
                                    <div class="user-ava"><img
                                                src="{{ asset('/storage/profile/default.png') }}"
                                                alt="{{ \Illuminate\Support\Facades\Auth::user()->user_fullName }}">
                                    </div>
                                @endif
                                <div class="user-info">
                                    <h6 class="user-name">{{ \Illuminate\Support\Facades\Auth::user()->user_fullName }}</h6>
                                    <span
                                            class="text-xs text-muted">{{ \Illuminate\Support\Facades\Auth::user()->user_point }}
                                        امتیاز ثبت شده</span>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('users.profile.account',[\Illuminate\Support\Facades\Auth::user()]) }}">مشخصات
                                    من</a></li>
                            <li><a href="{{ route('users.profile.orders',\Illuminate\Support\Facades\Auth::user()) }}">لیست
                                    سفارشات</a></li>
                            <li class="sub-menu-separator"></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon-unlock"></i>خروج از حساب کاربری
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li>
                        </ul>
                    </div>
                @else
                    <div class="account"><a
                                href="{{ route('login') }}"></a><i
                                class="icon-head"></i></div>
                @endif
                <div class="cart"><a href="cart.html"></a><i class="icon-bag"></i><span class="count">3</span><span
                            class="subtotal">98300 تومان</span>
                    <div class="toolbar-dropdown">
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i
                                        class="icon-cross"></i></span><a class="dropdown-product-thumb"
                                                                         href="shop-single.html"><img
                                        src="/viseny/img/cart-dropdown/01.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title"
                                                                  href="shop-single.html">کفش ورزشی مردانه</a><span
                                        class="dropdown-product-details">54200 تومان</span> <span
                                        class="dropdown-product-details"> - 2</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i
                                        class="icon-cross"></i></span><a class="dropdown-product-thumb"
                                                                         href="shop-single.html"><img
                                        src="/viseny/img/cart-dropdown/02.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title"
                                                                  href="shop-single.html">کلاه بازی تنیس</a><span
                                        class="dropdown-product-details">54200 تومان</span> <span
                                        class="dropdown-product-details"> - 2</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i
                                        class="icon-cross"></i></span><a class="dropdown-product-thumb"
                                                                         href="shop-single.html"><img
                                        src="/viseny/img/cart-dropdown/03.jpg" alt="Product"></a>
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