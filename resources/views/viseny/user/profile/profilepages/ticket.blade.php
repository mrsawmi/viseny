@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')
<div class="page-title">
    <div class="container">
        <div class="column">
            <h1>مشخصات پروفایل</h1>
        </div>
        <div class="column">
            <ul class="breadcrumbs">
                <li><a href="{{ route('users.home') }}">خانه</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li><a href="{{ route('users.profile.account',[\Illuminate\Support\Facades\Auth::user()->user_id]) }}">حساب
                        کاربری</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li>پروفایل من</li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
    <div class="row">
        @include('viseny.user.profile.navbarcontent.imageticket')
        <div class="col-lg-8 text-right">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            @include('viseny.user.profile.navbarcontent.ticket')
        </div>
    </div>
</div>
<!-- Site Footer-->

<!-- Mirrored from moderniz.ir/demo/unishop/account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 16:31:19 GMT -->
@include('viseny.layouts.footer')
