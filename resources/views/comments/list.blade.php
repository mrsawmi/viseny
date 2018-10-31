@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>لیست دیدکاه ها </h4>
    </div>
    <div class="card-body">
        @include('partials.success')
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>شناسه کاربر</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>محتوای دیدگاه</th>
                    <th>تاریخ ثبت دیدگاه</th>
                    <th>وضعیت</th>
                    <th> عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <th scope="row">{{ $comment->comment_id }}</th>
                        <td>{{ $comment->comment_user_id }}</td>
                        <td>{{ $comment->comment_author }}</td>
                        {{--                        <td>{{ comment tablo image }}</td>--}}
                        <td>{{ $comment->comment_email }}</td>
                        <td>{{ $comment->comment_content }}</td>
                        <td>{{ $comment->created_at }}</td>
                        <td>
                            <label class="switch">
                                <form method="post"
                                      action="{{ route('admin.comment.confirm',[$comment->comment_id]) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="deleteValue" value="1">
                                    @if($comment->comment_status == 0)
                                        <input type="submit" name="deleteComment" value="نمایش">
                                    @else
                                        <input type="submit" name="deleteComment" value="لغو نمایش">
                                    @endif
                                    <span class="slider"></span>
                                </form>
                            </label>
                        </td>
                        <td>
                            <a href="{{ route('admin.comment.delete',[$comment->comment_id]) }}">
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