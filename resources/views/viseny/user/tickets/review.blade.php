@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')
<div class="page-title">
    <div class="container">
        <div class="column">
            <h1>صفحه تییکت</h1>
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
                <li>صفحه تیکت</li>
            </ul>
        </div>
    </div>
</div>
@include('partials.success')
<div class="container padding-bottom-3x mb-2">
    <div class="row">

        @include('viseny.user.profile.navbarcontent.imageticket')

        <div class="col-lg-8 text-right">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <div class="table-responsive margin-bottom-2x">
                <table class="table margin-bottom-none">
                    <thead>
                    <tr>
                        <th>زمان ارسال</th>
                        <th>بروزرسانی</th>
                        <th>متن تیکت</th>
                        <th>اولویت</th>
                        <th>وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $ticket->created_at }}</td>
                        <td>{{ $ticket->updated_at }}</td>
                        <td>{{ $ticket->ticket_content }}</td>
                        <td><span class="text-warning">{{ $ticket->ticket_priority }}</span></td>
                        <td>
                        <span class="text-primary">
                            @if($ticket->ticket_status == 0)
                                در انتظار پاسخ
                            @elseif($ticket->ticket_status == 1)
                                پاسخ داده شد
                            @elseif($ticket->ticket_status == 2)
                                بسته شد
                            @endif
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- Messages-->
            @foreach($messages as $message)
                <div class="comment">
                    @if(\Illuminate\Support\Facades\Auth::user()->user_id == $message->message_user_id)
                        @if(!empty(\Illuminate\Support\Facades\Auth::user()->user_img))
                            <div class="comment-author-ava"><img
                                        src="{{ asset('/storage/profile/'.\Illuminate\Support\Facades\Auth::user()->user_img) }}"
                                        alt="Avatar"></div>
                        @else
                            <div class="comment-author-ava"><img
                                        src="{{ asset('/storage/profile/default.png') }}"
                                        alt="Avatar"></div>

                        @endif
                    @else
                        <div class="comment-author-ava"><img src="{{ asset('/storage/profile/support.png') }}"
                                                             alt="Avatar"></div>
                    @endif
                    <div class="comment-body">
                        <p class="comment-text">{{ $message->message }}</p>
                        <div class="comment-footer"><span
                                    class="comment-meta">{{ $message->message_sender }}
                                | {{ $message->created_at }}</span></div>
                    </div>
                </div>
        @endforeach
        <!-- Reply Form-->
            <h5 class="mb-30 padding-top-1x">افزودن ی پیام تازه</h5>
            <form method="post" action="{{ route('ticket.review.store',[$ticket->ticket_id]) }}">
                {{ csrf_field() }}
                <input type="hidden" name="ticketId" value="{{ $ticket->ticket_id }}">
                <div class="form-group">
                    <textarea class="form-control form-control-rounded" name="ticketReview" id="review_text" rows="8"
                              placeholder="پیام خود را اینجا بنویسید ..." required=""></textarea>
                </div>
                <div class="text-right">
                    <a href="{{ route('users.profile.tickets',[\Illuminate\Support\Facades\Auth::user()->user_id]) }}">
                        <button class="btn btn-outline-primary" type="button">بازگشت</button>
                    </a>
                    <button class="btn btn-outline-primary" type="submit">ارسال پیام جدید</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('viseny.layouts.footer')
