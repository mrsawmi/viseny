@if(!is_null(\Illuminate\Support\Facades\Auth::user()->user_address))
    <div class="padding-top-2x mt-2 hidden-lg-up"></div>
    <div class="col-lg-8">
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
        <div class="table-responsive">
            <table class="table table-hover margin-bottom-none text-right">
                <thead>
                <tr>
                    <th>نام شرکت</th>
                    <th>استان / شهر</th>
                    <th>کد پستی</th>
                    <th>آدرس</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails">
                            {{ \Illuminate\Support\Facades\Auth::user()->user_company }}
                        </a>
                    </td>
                    <td>{{ \Illuminate\Support\Facades\Auth::user()->user_state }}</td>
                    <td><span>{{ \Illuminate\Support\Facades\Auth::user()->user_postalCode }}</span></td>
                    <td><span>{{ \Illuminate\Support\Facades\Auth::user()->user_address }}</span></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
    </div>
@endif
<div class="col-lg-8 text-right">
    <div class="padding-top-2x mt-2 hidden-lg-up"></div>
    <h4>آدرس ارسال سفارشات</h4>
    <hr class="padding-bottom-1x">
    <form class="row" method="post"
          action="{{ route('users.profile.addresses.update',\Illuminate\Support\Facades\Auth::user()) }}">
        {{ csrf_field() }}
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-company">شرکت / کارخانه</label>
                <input class="form-control" type="text" name="company" id="account-company">
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label>استان را انتخاب کنید</label>
                <select class="province form-control" id="sorting" name="state" onchange="province">
                </select>
                <label>شهر را انتخاب کنید</label>
                <select class="city form-control" id="2" name="city" onchange="loadprovince();">
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-zip">
                    کد پستی <font color="red">*</font>
                </label>
                <input class="form-control" type="text" name="postalCode" id="account-zip" required="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-address1">
                    آدرس 1 <font color="red">*</font>
                </label>
                <input class="form-control" type="text" name="address1" id="account-address1" required="">
            </div>
        </div>
        <div class="col-12 padding-top-1x">
            <hr class="margin-top-1x margin-bottom-1x">
            <div class="text-right">
                <button class="btn btn-primary margin-bottom-none" type="submit" data-toast=""
                        data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check"
                        data-toast-title="بروز رسانی : " data-toast-message="آدرسها با موفقیت بروزرسانی شد">بروز رسانی
                    آدرس
                </button>
            </div>
        </div>
    </form>
</div>
