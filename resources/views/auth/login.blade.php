@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')
@include('partials.success')
@include('partials.errors')
<center>
<br>
<br>
    <div class="col-md-6">
        <form class="login-box" method="post" style="background: #e1e7ec;" action="{{ route('login') }}">
            {{ csrf_field() }}
            {{--<div class="row margin-bottom-1x">--}}
            {{--<div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="#"><i--}}
            {{--class="socicon-facebook"></i>&nbsp; ورود با فیس بوک</a></div>--}}
            {{--<div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href="#"><i--}}
            {{--class="socicon-twitter"></i>&nbsp; ورود از طریق توییتر</a></div>--}}
            {{--<div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href="#"><i--}}
            {{--class="socicon-googleplus"></i>&nbsp; ورود با گوگل +</a></div>--}}
            {{--</div>--}}
            <h4 class="margin-bottom-1x"> با استفاده از فرم پایین لاگین کنید.</h4>
            <div class="form-group input-group">
                <input class="form-control" type="email" name="email" placeholder="آدرس ایمیل ..." required=""><span
                        class="input-group-addon"><i class="icon-mail"></i></span>
            </div>
            <div class="form-group input-group">
                <input class="form-control" type="password" name="password" placeholder="رمز عبور ..."
                       required=""><span
                        class="input-group-addon"><i class="icon-lock"></i></span>
            </div>
            <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                <label class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" checked=""><span
                            class="custom-control-indicator"></span><span class="custom-control-description">مرا بخاطر بسپار</span>
                </label><a class="navi-link" href="account-password-recovery.html">فراموشی رمز عبور ؟</a>
            </div>
            <div class="text-center text-sm-right">
                <button class="btn btn-primary margin-bottom-none" type="submit">ورود به تاپ کالا</button>
            </div>
        </form>
    </div>
    <br>
    <br>
</center>
@include('viseny.layouts.footer')