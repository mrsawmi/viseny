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
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>موضوع</th>
                    <th>اولویت</th>
                    <th>پیام</th>
                    <th>فایل ارسالی</th>
                    <th>وضعیت</th>
                    <th> عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <th scope="row">{{ $ticket->ticket_id }}</th>
                        <td>{{ $ticket->user->user_fullName }}</td>
                        <td>{{ $ticket->user->email }}</td>
                        <td>{{ $ticket->ticket_title}}</td>
                        <td>{{ $ticket->ticket_priority }}</td>
                        <td>{{ $ticket->ticket_content }}</td>
                        <td>
                            @if(!empty($ticket->ticket_attach))
                                {{--<img src="{{ asset('/storage/ticketAttach/'. $ticket->ticket_attach) }}" alt="Img">--}}
                                <form method="post"
                                      action="{{ route('file.show',[$ticket->ticket_id]) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="{{ $ticket->ticket_id }}">
                                    <input type="submit" name="fileId" value="نمایش فایل">
                                    <span class="slider"></span>
                                </form>
                            @else
                                فایلی ارسال نشده است
                            @endif
                        </td>
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
                        <td>
                            <a href="{{ route('admin.ticket.answer',[$ticket->ticket_id]) }}">
                                پاسخ&nbsp;
                            </a>
                            <a href="">
                                بستن </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection