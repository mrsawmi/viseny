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
                <li><a href="{{ route('users.profile.account',[\Illuminate\Support\Facades\Auth::user()->user_id]) }}">حساب کاربری</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li>پروفایل من</li>
            </ul>
        </div>
    </div>
</div>
@include('partials.success')
@include('partials.errors')
<div class="container padding-bottom-3x mb-2">
    <div class="row">
        @include('viseny.user.profile.navbarcontent.imageticket')
        <div class="col-lg-8 text-right">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <div class="col-lg-8">
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                <form class="row" method="post" enctype="multipart/form-data"
                      action="{{ route('users.profile.tickets.send',[\Illuminate\Support\Facades\Auth::user()->user_id]) }}">
                    {{ csrf_field() }}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="help_name">نام شما</label>
                            <input class="form-control form-control-rounded"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->user_fullName }}" type="text"
                                   id="help_name" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="help_email">ایمیل شما</label>
                            <input class="form-control form-control-rounded"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" type="email"
                                   id="help_email" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="help_subject">موضوع</label>
                            <input class="form-control form-control-rounded" name="ticketTitle" type="text"
                                   id="help_subject" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="help_category">اهمیت</label>
                            <select class="form-control form-control-rounded" name="ticketPriority" id="help_category">
                                <option>پایین</option>
                                <option selected>متوسط</option>
                                <option>بالا</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="help_question">سوال </label>
                            <textarea class="form-control form-control-rounded" name="ticketContent" id="help_question"
                                      rows="8" required=""></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ticketAttach">تصویر محصول :</label>
                            <input class="file-input" type="file" name="ticketAttach">
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <a href="{{ route('users.profile.tickets',[\Illuminate\Support\Facades\Auth::user()->user_id]) }}">
                            <button class="btn btn-outline-primary" type="button">بازگشت</button>
                        </a>
                        <button class="btn btn-outline-primary" type="submit">ارسال سوال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('viseny.layouts.footer')