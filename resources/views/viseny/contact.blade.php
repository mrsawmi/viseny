@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')

<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper text-right bg-white">
    <!-- Page Title-->
    <div class="page-title">
        <div class="container">
            <div class="column">
                <h1>ارتباط با ما</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('users.home') }}">خانه</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>ارتباط با ما</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-2x mb-2 ">
        <div class="row">
            <div class="col-md-7">
                <div class="display-3 text-muted opacity-75 mb-30">سرویس های مشتری</div>
            </div>
            <div class="col-md-5">
                <ul class="list-icon">
                    <li><i class="icon-mail"></i><a class="navi-link" href="mailto:support@visenyart.ir">Support@visenyart.ir</a>
                    </li>
                    <li class="dir-ltr"><i class="icon-bell"></i>0938-1800820</li>
                    <li><i class="icon-clock"></i>1 - 2 روز کاری</li>
                </ul>
            </div>
        </div>
        <hr class="margin-top-2x">
        <div class="row margin-top-2x">
            <div class="col-md-7">
                <div class="display-3 text-muted opacity-75 mb-30">پشتیبانی فنی</div>
            </div>
            <div class="col-md-5">
                <ul class="list-icon">
                    <li><i class="icon-mail"></i><a class="navi-link" href="mailto:support@visenyart.ir">Support@visenyart.ir</a>
                    </li>
                    <li class="dir-ltr"><i class="icon-bell"></i>0938-1800820</li>
                    <li><i class="icon-clock"></i>1 - 2 روز کاری</li>
                </ul>
            </div>
        </div>
        <h3 class="margin-top-3x text-center mb-30" style="font-family:'b-yekan'">مشخصات و ادرس فروشگاههای ما</h3>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30">
                    <div>
                        <img src="/storage/maqze.jpg">
                    </div><div class="card-body">
                        <ul class="list-icon">
                            <li><i class="icon-map"></i>تهران - خیابان شیراز - بین خیابان گرماسر غربی و سامان - ساختمان
                                141 - طبقه منفی 1
                            </li>
                            <li class="dir-ltr"><i class="icon-bell"></i>0912-2398389</li>
                            <li><i class="icon-mail"></i><a class="navi-link" href="mailto:support@visenyart.ir">Support@visenyart.ir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Site Footer-->
@include('viseny.layouts.footer')
