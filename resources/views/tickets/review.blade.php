@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>لیست تیکت ها </h4>
    </div>
    <div class="card-body">
        @include('partials.success')
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>زمان ارسال</th>
                    <th>بروزرسانی</th>
                    <th>متن تیکت</th>
                    <th>اولویت</th>
                    <th>وضعیت</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $ticket->ticket_id }}</th>
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
    </div>
    <!-- Messages-->
    @foreach($messages as $message)
        <div class="comment">
            <div class="chk-group">
                پیام از طرف: {{ $message->message_sender }}
            </div>
            <div>متن پیام: {{ $message->message }}</div>
            <div>
                تاریخ ارسال پیام: {{ $message->created_at }}
            </div>
        </div>
        <br>
    @endforeach
    <!-- Reply Form-->
    <h5 class="mb-30 padding-top-1x">افزودن ی پیام تازه</h5>
    <form method="post" action="{{ route('ticket.review.store',[$ticket->ticket_id]) }}">
        {{ csrf_field() }}
        <input type="hidden" name="ticketId" value="{{ $ticket->ticket_id }}">
        <div class="form-group">
                    <textarea class="form-control input-default" name="ticketReview" id="review_text" rows="8"
                              placeholder="پیام خود را اینجا بنویسید ..." required=""></textarea>
        </div>
        <div class="text-right">
            <a href="{{ route('admin.ticket') }}">
                <button class="btn btn-outline-primary" type="button">بازگشت</button>
            </a>
            <button class="btn btn-outline-primary" type="submit">ارسال پیام جدید</button>
        </div>
    </form>
@endsection