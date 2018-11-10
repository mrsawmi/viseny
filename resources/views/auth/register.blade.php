@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')

<center>
    @include('partials.errors')
    @include('partials.success')
    <!-- Page Content-->
    <div class="col-md-6">
        <div class="padding-top-3x hidden-md-up"></div>
        <h3 class="margin-bottom-1x">ثبت نام - ایجاد حساب جدید</h3>
        <p>ثبت نام کمتر از 60 ثانیه طول میکشد اما به شما کنترل کامل سفارشات را میدهد</p>
        <form class="row" method="post" action="{{ route('register.store') }}">
            {{ csrf_field() }}
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="reg-fn">نام و نام خانوادگی شما :</label>
                    <input class="form-control" type="text" id="reg-fn" name="userFullName" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="reg-email">آدرس ایمیل :</label>
                    <input class="form-control" type="email" id="reg-email" name="userEmail" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="reg-phone">شماره تلفن :</label>
                    <input class="form-control" type="text" id="reg-phone" name="userPhone" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="reg-pass">رمز عبور :</label>
                    <input class="form-control" type="password" id="reg-pass" name="userPassword" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="reg-pass-confirm">تایید رمز عبور :</label>
                    <input class="form-control" type="password" id="reg-pass-confirm" name="userPasswordConfirm" required>
                </div>
            </div>
            <div class="col-12 text-center text-sm-right">
                <button class="btn btn-primary margin-bottom-none" type="submit">ثبت نام کاربر جدید :</button>
            </div>
        </form>
    </div>
<br><br>
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
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ asset('viseny/js/vendor.min.js') }}"></script>
    <script src="{{ asset('viseny/js/scripts.min.js') }}"></script>
    <script src="{{ asset('viseny/js/fancy-slider/index.js') }}"></script>
    @include('viseny.layouts.footer')
    <!-- Mirrored from moderniz.ir/demo/unishop/account-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 16:31:19 GMT -->

</center>
