<form class="row" method="post" action="{{ route('users.profile.account.update',[\Illuminate\Support\Facades\Auth::user()]) }}">
    {{ csrf_field() }}
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-fn">نام و نام خانوادگی شما</label>
            <input class="form-control" type="text" id="account-fn" name="fullName"
                   value="{{ \Illuminate\Support\Facades\Auth::user()->user_fullName }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-email">آدرس ایمیل</label>
            <input class="form-control" type="email" id="account-email"
                   value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"
                   disabled>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-phone">شماره تلفن</label>
            <input class="form-control" type="text" id="account-phone" name="phoneNumber"
                   value="{{ \Illuminate\Support\Facades\Auth::user()->user_phoneNumber }}"
                   required>
        </div>
    </div>
    @if(!is_null(\Illuminate\Support\Facades\Auth::user()->user_birthday))
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-birthday">تاریخ تولد</label>
                <input class="form-control" type="text" id="account-birthday" name="birthday"
                       value="{{ \Illuminate\Support\Facades\Auth::user()->user_birthday }}"
                       required>
            </div>
        </div>
    @else
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-birthday">تاریخ تولد</label>
                <input class="form-control" type="date" id="account-birthday" name="birthday"
                       value=""
                       required>
            </div>
        </div>
    @endif
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-wallet"><a href="#">موجودی حساب شما (برای شارژ کلیک کنید)</a></label>
            <input class="form-control" type="text" id="account-wallet"
                   value="{{ \Illuminate\Support\Facades\Auth::user()->user_wallet }}"
                   disabled>
        </div>
    </div>
    @if(\Illuminate\Support\Facades\Auth::user()->user_plan == 0)
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-plan"><a href="#">طرح شما (برای خرید طرح کلیک کنید)</a></label>
                <input class="form-control" type="text" id="account-plan"
                       value="طرح ندارید" disabled>
            </div>
        </div>
    @elseif(\Illuminate\Support\Facades\Auth::user()->user_plan == 1)
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-plan">طرح شما</label>
                <input class="form-control" type="text" id="account-plan"
                       value="طرح برنز برای شما فعال است">
            </div>
        </div>
    @elseif(\Illuminate\Support\Facades\Auth::user()->user_plan == 2)
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-plan">طرح شما</label>
                <input class="form-control" type="text" id="account-plan"
                       value="طرح نقره ای برای شما فعال است">
            </div>
        </div>
    @elseif(\Illuminate\Support\Facades\Auth::user()->user_plan == 3)
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-plan">طرح شما</label>
                <input class="form-control" type="text" id="account-plan"
                       value="طرح طلایی برای شما فعال است">
            </div>
        </div>
    @endif
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
                <input class="custom-control-input" type="checkbox" checked><span
                        class="custom-control-indicator"></span><span class="custom-control-description">مشترک شدن در خبرنامه فروشگاه</span>
            </label>
            <button class="btn btn-primary margin-right-none" type="submit" data-toast
                    data-toast-position="topRight" data-toast-type="success"
                    data-toast-icon="icon-circle-check" data-toast-title="Success!"
                    data-toast-message="Your profile updated successfuly.">بروز رسانی پروفایل
            </button>
        </div>
    </div>
</form>