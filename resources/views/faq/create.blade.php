@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>ایجاد سوال جدید</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form p-10">
                    @include('partials.errors')
                    @include('partials.success')
                    <form method="post" action="{{ route('admin.faq.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="userFullName">نام و نام خانوادگی</label>
                            <input id="userFullName" name="userFullName" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->user_fullName }}"
                                   disabled
                            >
                        </div>
                        <div class="form-group">
                            <label for="userEmail">آدرس ایمیل</label>
                            <input id="userEmail" name="userEmail" type="email"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"
                            disabled>
                        </div>
                        <div class="form-group">
                            <label for="questionTitle">متن سوال</label>
                            <textarea class="form-group" name="questionTitle" id="questionTitle" rows="8"
                                      required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="questionAnswer">متن پاسخ</label>
                            <textarea class="form-group" name="questionCaption" id="questionAnswer" rows="8"
                                      required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="questionCategory">دسته بندی</label>
                            <select class="form-control persianText" name="questionCategory" id="questionCategory">
                                <option>مدیریت حساب</option>
                                <option>سیاست بازپرداخت</option>
                                <option>نحوه پرداخت</option>
                                <option>اطلاعات خرید</option>
                                <option>برنامه ارجاع</option>
                            </select>
                        </div>
                        <div class="form-group m-t-20">
                            <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection