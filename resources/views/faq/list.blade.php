@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>لیست سوالات ما </h4>
    </div>
    <div class="card-body">
        @include('partials.success')
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>متن سوال</th>
                    <th>متن پاسخ</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($questions as $question)
                    <tr>
                        <th scope="row">{{ $question->faq_id }}</th>
                        <td>{{ $question->faq_fullName }}</td>
                        <td>{{ $question->faq_email }}</td>
                        <td>{{ $question->faq_title }}</td>
                        <td>{{ $question->faq_caption }}</td>
                        <td>
                            <label class="switch" for="switch">
                                <form method="post" id="switch"
                                      action="{{ route('admin.faq.answer',[$question->faq_id]) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="changeStatus" value="1">
                                    @if($question->faq_status == 0)
                                        <input type="submit" name="answerQuestion" value="پاسخ">
                                    @else
                                        پاسخ داده شده
                                    @endif
                                    <span class="slider"></span>
                                </form>
                            </label>
                        </td>
                        <td>
                            <a href="{{ route('admin.faq.delete',[$question->faq_id]) }}">
                                حذف&nbsp;
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection