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
                    <form method="post" action="{{ route('admin.faq.sendAnswer') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="userEmail">شناسه سوال</label>
                            <input id="userEmail" name="faqId" type="email"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ $faqs->faq_id }}"
                                   disabled>
                        </div>
                        <div class="form-group">
                            <label for="userFullName">نام و نام خانوادگی</label>
                            <input id="userFullName" name="userFullName" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ $faqs->faq_fullName }}"
                                   disabled
                            >
                        </div>
                        <div class="form-group">
                            <label for="userEmail">آدرس ایمیل</label>
                            <input id="userEmail" name="userEmail" type="email"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ $faqs->faq_email }}"
                                   disabled>
                        </div>
                        <div class="form-group">
                            <label for="questionTitle">عنوان سوال</label>
                            <input id="userEmail" name="faqTitle" type="email"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ $faqs->faq_title }}"
                                   disabled>
                        </div>
                        <div class="form-group">
                            <label for="questionTitle">متن سوال</label>
                            <input id="userEmail" name="faqQuestion" type="email"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ $faqs->faq_caption }}"
                                   disabled>
                        </div>
                        <div class="form-group">
                            <label for="questionAnswer">متن پاسخ</label>
                            <textarea class="form-control input-default" name="questionAnswer" id="questionAnswer"
                                      rows="10"
                                      required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="questionCategory">دسته بندی</label>
                            <input id="questionCategory" name="userEmail" type="email"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ $faqs->faq_category }}"
                                   disabled>
                        </div>
                        <div class="form-group">
                            <label for="questionStatus">وضعیت</label>
                            <select class="form-control persianText" name="questionPublish" id="questionStatus">
                                <option>ارسال ایمیل به کاربر</option>
                                <option>انتشار عمومی</option>
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