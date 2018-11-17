@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')
<div class="offcanvas-wrapper bg-white">
    <!-- Page Content-->
    <div class="container padding-top-3x padding-bottom-3x mb-1"><img class="d-block m-auto"
                                                                      src="/viseny/img/404_art.jpg"
                                                                      style="width: 100%; max-width: 550px;" alt="404">
        <div class="padding-top-1x mt-2 text-center">
            <h3>صفحه مورد نظر یافت نشد</h3>
            <p>به نظر می رسد ما نمی توانیم صفحاتی را پیدا کنیم که دنبال آن هستید. <a href="{{ route('users.home') }}">برگشت
                    به صفحه
                    خانه</a><br>یا سعی کنید از جستجو در گوشه بالا سمت راست صفحه استفاده کنید.</p>
        </div>
    </div>
</div>
<!-- Site Footer-->
@include('viseny.layouts.footer')