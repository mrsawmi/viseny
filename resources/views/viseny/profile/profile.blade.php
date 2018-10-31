@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')
        <!DOCTYPE html>
<html lang="en">
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
    <div class="row">
        @include('viseny.profile.profileimg')
        <div class="col-lg-8 text-right">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <form class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">نام شما</label>
                        <input class="form-control" type="text" id="account-fn" value="محمد" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">فامیلی شما</label>
                        <input class="form-control" type="text" id="account-ln" value="شجاع" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">آدرس ایمیل</label>
                        <input class="form-control" type="email" id="account-email" value="mohammadshoja65@gmail.com"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">شماره تلفن</label>
                        <input class="form-control" type="text" id="account-phone" value="+7(805) 348 95 72" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-pass">رمز عبور</label>
                        <input class="form-control" type="password" id="account-pass">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">تایید رمز عبور</label>
                        <input class="form-control" type="password" id="account-confirm-pass">
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox" checked><span
                                    class="custom-control-indicator"></span><span class="custom-control-description">مشترک شدن در خبرنامه فروشگاه</span>
                        </label>
                        <button class="btn btn-primary margin-right-none" type="button" data-toast
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
<!-- Site Footer-->

<!-- Mirrored from moderniz.ir/demo/unishop/account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 16:31:19 GMT -->
</html>
@include('viseny.layouts.footer')
