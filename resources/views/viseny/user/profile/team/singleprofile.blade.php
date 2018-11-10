    @include('viseny.layouts.header')
    @include('viseny.layouts.login-model')
    @include('viseny.layouts.canvas-category')
    @include('viseny.layouts.canvas-mobile')
    @include('viseny.layouts.topbar')
    @include('viseny.layouts.navbar-header')
    <br>
    <br>
    <div class="container padding-bottom-3x mb-2">
        <div class="row">
            <div class="col-lg-4">
                <aside class="user-info-wrapper">
                    <div class="user-cover" style="background-image: url(/storage/profile/user_cover.jpg);">
                        <div class="info-label" data-toggle="tooltip" title=""
                             data-original-title="شما در حال حاضر 0 امتیاز برای مصرف در فروشگاه دارید">
                            <i class="icon-medal"></i>0 امتیاز
                        </div>
                    </div>
                    <div class="user-info">
                        <div class="user-avatar">
                            <a id="fileupload" class="edit-avatar" href="#"></a><img
                                    src="http://tablo.sh/storage/profile/adminprof.jpg" alt="User">
                        </div>
                        <div class="user-data">
                            <h4>شایان مایلی</h4>
                            <span>عضو شده در:2018-11-04 19:16:26</span>
                        </div>
                    </div>
                </aside>
                <nav class="list-group text-right">
                    <a class="list-group-item with-badge " href="http://tablo.sh/profile/10/orders"><i class="icon-bag"></i>
                        سفارشات من</a>
                    <a class="list-group-item active" href="http://tablo.sh/profile/10"><i class="icon-head"></i>
                        پروفایل کاربری</a>
                    <a class="list-group-item" href="http://tablo.sh/profile/10/addresses"><i class="icon-map"></i> آدرسهای
                        من</a>
                    <a class="list-group-item with-badge" href="http://tablo.sh/profile/10/favorites"><i
                                class="icon-heart"></i> علاقه مندی
                        ها</a>
                    <a class="list-group-item with-badge" href="http://tablo.sh/profile/10/tickets"><i class="icon-tag"></i>
                        لیست تیکت ها</a>
                </nav>
            </div>
            <div class="col-lg-8 text-right">
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                <form class="row" method="post" action="http://tablo.sh/profile/10/update">
                    <input type="hidden" name="_token" value="5PR4fgybpE3gJVPNq8qlyJuNDAONHildLgRAHKki">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">نام و نام خانوادگی شما</label>
                            <input class="form-control" type="text" id="account-fn" name="fullName" value="شایان مایلی"
                                   required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">آدرس ایمیل</label>
                            <input class="form-control" type="email" id="account-email" value="shayanmayeli@gmail.com"
                                   disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-phone">شماره تلفن</label>
                            <input class="form-control" type="text" id="account-phone" name="phoneNumber"
                                   value="09381800820" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-birthday">تاریخ تولد</label>
                            <input class="form-control" type="text" id="account-birthday" name="birthday" value="1997/8/16"
                                   required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-wallet"><a href="#">موجودی حساب شما (برای شارژ کلیک کنید)</a></label>
                            <input class="form-control" type="text" id="account-wallet" value="0" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-plan"><a href="#">طرح شما (برای خرید طرح کلیک کنید)</a></label>
                            <input class="form-control" type="text" id="account-plan" value="طرح ندارید" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-pass">رمز عبور</label>
                            <input class="form-control" type="password" id="account-pass" name="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">تایید رمز عبور</label>
                            <input class="form-control" type="password" id="account-confirm-pass" name="ConfirmPassword">
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <label class="custom-control custom-checkbox d-block">
                                <input class="custom-control-input" type="checkbox" checked=""><span
                                        class="custom-control-indicator"></span><span class="custom-control-description">مشترک شدن در خبرنامه فروشگاه</span>
                            </label>
                            <button class="btn btn-primary margin-right-none" type="submit" data-toast=""
                                    data-toast-position="topRight" data-toast-type="success"
                                    data-toast-icon="icon-circle-check" data-toast-title="Success!"
                                    data-toast-message="Your profile updated successfuly.">بروز رسانی پروفایل
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    @include('viseny.layouts.footer')