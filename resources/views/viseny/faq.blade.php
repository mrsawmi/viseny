@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')
<div class="offcanvas-wrapper text-right">
    <!-- Page Title-->
    <div class="page-title">
        <div class="container">
            <div class="column">
                <h1>Help / FAQ</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('users.home') }}">خانه</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>Help / FAQ</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x">
        <div class="row">
            <!-- Side Menu-->
            <div class="col-lg-3 col-md-4">
                <nav class="list-group">
                    @foreach($questions as $questionTitle)
                        <a class="list-group-item"
                           href="#{{ $questionTitle->faq_id }}">{{ $questionTitle->faq_title }}</a>
                    @endforeach
                </nav>
                <div class="padding-bottom-3x hidden-md-up"></div>
            </div>
            <!-- Content-->
            <div class="col-lg-9 col-md-8">
                <div class="accordion" id="accordion" role="tablist">
                    @foreach($questions as $question)
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h6><a href="#{{ $question->faq_id }}" data-toggle="collapse" data-parent="#accordion"
                                       aria-expanded="false" class="collapsed">
                                        {{ $question->faq_title }}
                                    </a>
                                </h6>
                            </div>
                            <div class="collapse" id="{{ $question->faq_id }}" role="tabpanel" style="">
                                <div class="card-body">
                                    <p style="text-align:justify">
                                        {{ $question->faq_caption }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <h3 class="padding-top-2x">آیا جواب را پیدا نکرده اید؟ از ما بپرس.</h3>
                <p class="text-muted mb-30">ما معمولا ظرف دو روز کاری پاسخ می دهیم. سوالات رایج در این صفحه ظاهر می
                    شود.</p>
                <form class="row" method="post" action="{{ route('users.faq.store') }}">
                    {{ csrf_field() }}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="help_name">نام شما</label>
                            <input class="form-control form-control-rounded" name="faqFullName" type="text" id="help_name" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="help_email">ایمیل شما</label>
                            <input class="form-control form-control-rounded" name="faqEmail" type="email" id="help_email" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="help_subject">موضوع</label>
                            <input class="form-control form-control-rounded" name="faqTitle" type="text" id="help_subject" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="help_category">دسته بندی</label>
                            <select class="form-control form-control-rounded" id="help_category">
                                <option>مدیریت حساب</option>
                                <option>سیاست بازپرداخت</option>
                                <option>نحوه پرداخت</option>
                                <option>اطلاعات خرید</option>
                                <option>برنامه ارجاع</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="help_question">سوال </label>
                            <textarea class="form-control form-control-rounded" name="faqCaption" id="help_question" rows="8"
                                      required=""></textarea>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <button class="btn btn-outline-primary" type="submit">ارسال سوال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Site Footer-->
</div>
@include('viseny.layouts.footer')
